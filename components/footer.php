<?php

?>
	
	<div id="subFooter">
	</div>
	
	<div id="footer" class="footer">
		<div class="wrapper">
			<p>footer here</p>
		</div>
	</div>

	<script src="angular/controllers.js"></script>
	<script src="angular/app.js"></script>
	<script src="js/unslider.js"></script>
	
	<script>
		window.addEventListener('load', function(){
			var body = document.body;
			var html = document.documentElement;
			var windowHeight = window.outerHeight;
			var height = Math.max( 
				body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight
			);

			if(height <= windowHeight){
				document.getElementById("footer").style.position = "absolute";
				document.getElementById("subFooter").style.position = "absolute";
				document.getElementById("subFooter").style.bottom = "100px";
			}else{
		
			}
			
		}, false);
		
		jQuery(document).ready(function(){
			$('.sponsorHack').unslider({
				autoplay: true,
				arrows: false,
				nav: false,
				animation: 'fade',
				speed: 1500,
				delay: 5000
			});
/*			$('.teamIcons').unslider({
				arrows: true,
				nav: false,
				speed: 1500,
				delay: 5000
			});*/
		});
		
	</script>

</body>