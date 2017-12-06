<?php
$dir = "./images/";
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
		if($file != "." && $file != ".."){
			if(strpos($file, '.') == true){
				echo "filename:" . $file . "<br>";	
			}
		}else{

		}
    }
    closedir($dh);
  }
}
?>


<style>
	.slideshow{width: 50%;}
	.slideshow img{display: block; max-width: 100%;}
	.slide{cursor:pointer;}
	.slideshowZoom{
		width: 100%; 
		height: 100%; 
		position: absolute; 
		background-color: rgba(0,0,0,.5);
		top:0;
		left:0;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		visibility: hidden;
		opacity: 0;
		transition: 1s all ease;
	}
	.slideshowZoom a{margin-bottom: 25px; left: 10%; position: relative;}
	.slideshowZoom img{max-width: 100%; box-shadow: 0 0 10px rgba(0,0,0,.5);}
</style>


<script src="js/jquery.js"></script>

<div class="slideshow">
	<div class="slide"><img src="./images/cod_bg.png" /></div>
	<div class="slide"><img src="./images/cod_bg_gs.png" /></div>
	<div class="slide"><img src="./images/cod_logo_gmap.png" /></div>
	<div class="slide"><img src="./images/cod_logo.png" /></div>
</div>

<div class="slideshowZoom"><a href="javascript:void(0)">CLOSE</a></div>

<script src="js/jquery.bxslider.min.js"></script>


<script>

jQuery(document).ready(function(){
	slider = $('.slideshow').bxSlider({
		mode: 'fade',
		speed: 1000,
		auto: true,
		pause: 4000,
		pager: false,
		slideWidth: 500
	});
	
	$('.slide').click(function(){
		slider.stopAuto();
		$(this).find('img').clone().appendTo('.slideshowZoom');
		$('.slideshowZoom').css('visibility', 'visible').css('opacity','1');
	});
	
	$('.slideshowZoom a').click(function(){
		$('.slideshowZoom').css('visibility', 'hidden').css('opacity','0');
		$('.slideshowZoom img').remove();
		slider.startAuto();
	});
	
	
});
	
</script>