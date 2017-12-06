<?php
$postdata = file_get_contents("php://input"); //ajax data

include("../libs/simple_html_dom.php");

$getHtml = file_get_html('https://www.hltv.org/search?query='.$postdata.''); //hltv search to grab id

foreach($getHtml->find('.search .table tr a') as $players){
	$players2[] = $players->getAttribute('href'); //grab required info *(as of 7/31/2017)
}

$playerID = reset($players2);
$playerID =  str_replace('/player/', '', $playerID);
$playerID = substr($playerID, 0 , 4); //id is first 4 digits *(as of 7/31/2017)

$getHtml = file_get_html('https://www.hltv.org/player/'.$playerID.'/'.$postdata.''); //taking id and grabbing players page
foreach($getHtml->find('.playerProfile .standard-box .two-col') as $something){
	foreach($something->find('.col .cell') as $key => $cells){
		$stats[] = $cells->find('b')[0]->innertext; //grabs the column headers; TODO: find out why I can't store key values
		$stats_alt[] = $cells->find('span')[0]->innertext; //grabs the stats; TODO: find out why I can't store key values
	}
/*	foreach($something->find('.col .achievement') as $key => $cells){
		if(strpos($cells->innertext, 'stage') !== FALSE || strpos($cells->innertext, 'columbus') !== FALSE){
			
		}else{	
			echo $cells->find('a')[0]->innertext;
			echo "<br />";
		}
	}*/
}

$stats = array_filter($stats);
$stats_alt = array_filter($stats_alt);

/*$achievements = array_filter($achievements);
$achievements_alt = array_filter($achievements_alt);*/

$result = array();
foreach($stats as $i => $val){
	if($val != "Maps played" && $val != "Rounds contributed"){
		$result[$i]['type'] = $val; //hack for above TODO
		$result[$i]['stat'] = $stats_alt[$i]; //hack for above TODO
	}
}

/*$result2 = array();
foreach($achievements as $i => $val){
	$result2[$i]['type'] = $val;
	$result2[$i]['stat'] = $achievements_alt[$i];
}*/

echo json_encode($result);
?>