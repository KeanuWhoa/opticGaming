<?php

// need:
	// name
	// bio
	// bg img path
	// stats

$postdata = file_get_contents("php://input"); //ajax data

$team = trim(substr($postdata, 0, strpos($postdata, '-')));

$csgo = array(
	array(

			"Name" => "Oscar 'Mixwell' Canellas", 
			"Bio" => "Oscar “mixwell” Cañellas is a Spanish professional Counter-Strike: Global Offensive player. He is a veteran to Counter Strike having played both Counter-Strike 1.6 and Source. Throughout his competitive career Mixwell has won several championships including two Major Championship titles in 2014 and 2015 and ELEAGUE season two with OpTic Gaming. Mixwell makes the transition to OpTic Gaming after two long stints with Epsilon eSports and gBots, and will serve as the teams main AWP.",
			"Path" => "./images/team/mixwell_bg.png",
			"id" => "mixwell"),
	array(

			"Name" => "Will 'Rush' Wierzba", 
			"Bio" => "Will “RUSH” Wierzba is a Bulgarian Counter-Strike: Global Offensive player who currently plays for OpTic Gaming. RUSH has three championships including one Major at the Alienware Area 51 Cup.",
			"Path" => "./images/team/rush_bg.png",
			"id" => "rush"),
	array(

			"Name" => "Keith 'NAF' Markovic", 
			"Bio" => "Keith “NAF” Markovic is a Canadian professional Counter-Strike: Global Offensive player who currently plays for OpTic Gaming. NAF has four championship wins including 1st at the John Wick Invitational.",
			"Path" => "./images/team/naf_bg.png",
			"id" => "naf"),
	array(

			"Name" => "Tarik 'Tarik' Celik", 
			"Bio" => "Tarik Celik is a Turkish American who got his start in gaming at a very young age of five when he watched his older brother playing Counter-Strike. He has always had a certain passion for gaming and knew early on that he wanted to be a professional gamer. Tarik has collected multiple tournament wins throughout his career and will have represented both the United States and Turkey at the World Championships. Tarik makes the transition to OpTic Gaming from Counter Logic Gaming where he was both a competitor and entertainer, through his brand NoShirtTV.",
			"Path" => "./images/team/tarik_bg.png",
			"id" => "tarik"),
);

echo json_encode($csgo);


?>