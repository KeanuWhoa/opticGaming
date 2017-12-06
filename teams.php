<?php include('components/header_common.php'); include('components/header.php'); ?>

<div class="topContent" ng-controller="teamClick">
	<div class="wrapper">
		<h2 class="subHeaderTitle">Teams</h2>
<!--		<div class="teamIntro">
			<div id="ytContainer"></div>
		</div>-->
		<div class="esportLogoContainer">
			<a href="javascript:void(0)" class="esport_logo csgo" id="csgo-logo" ng-click="getPlayerInfo($event)">
				<img src="./images/csgo_logo_alt.png" />
				<img src="./images/csgo_logo_gmap.png" class="esportLogoImg" />
			</a>
			<a href="javascript:void(0)" class="esport_logo cod" id="cod-logo" ng-click="getPlayerInfo($event)">
				<img src="./images/cod_logo.png" />
				<img src="./images/cod_logo_gmap.png" class="esportLogoImg" />
			</a>
			<a href="javascript:void(0)" class="esport_logo halo" id="halo-logo" ng-click="getPlayerInfo($event)">
				<img src="./images/halo_logo.png" />
				<img src="./images/halo_logo_gmap.png" class="esportLogoImg" />
			</a>
			<a href="javascript:void(0)" class="esport_logo gears" id="gears-logo" ng-click="getPlayerInfo($event)">
				<img src="./images/gears_logo.png" />
				<img src="./images/gears_logo_gmap.png" class="esportLogoImg" />
			</a>
		</div>
		<div class="teamContainer" id="csgo-Team">
			<div class="playerBanners">
				<div class="playerPortal" ng-repeat="names in playerData" id="{{names.id}}" ng-click="getPlayerID($event)">
					<img src="./images/team/{{names.id}}.png" class="teamPlayerBanner" />
					<img src="./images/team/{{names.id}}.png" class="noSVG" />
				</div>
			</div>

			<div class="teamPlayerInformationContainer" ng-repeat="bio in playerData | filter: ID | limitTo:1">
				<div class="playerInfo" id="{{ID}}-bio">
					<div class="playerContent">
						<h2>{{bio.Name}}</h2>
						<p>{{bio.Bio}}</p>
						<div class="playerInfoStats">
							<div>
								<h3>Statistics <span>(Past 3 months)</span></h3>
								<div class="stats">
									<ul>
										<li ng-repeat="stats in playerStats">{{stats.type}}<span>{{stats.stat}}</span></li>
									</ul>
								</div>
							</div>
							<div>
								<h3>Achievements <span>(recent LANs)</span></h3>
								<div class="achievements">
									<ul>
										<li>3rd at IEM Sydney 2017</li>
										<li>3rd at cs_summit Spring 2017</li>
										<li>3rd at ELEAGUE Major Main Qualifier</li>
										<li>2nd at ECS Season 2 Finals</li>
									</ul>
								</div>
							</div>
							<h5 class="hltv_powered">stats powered by <a href="https://www.hltv.org" target="_blank">HLTV.org</a></h5>
							<div style="clear: both; flex: 0;"></div>
						</div>
					</div>
					<div class="playerImage">
						<img src="{{bio.Path}}" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	var target = document.getElementsByClassName('teamPlayerBanner');

	Array.prototype.forEach.call(target, function(el){
		GradientMaps.applyGradientMap(el, "#212226, #9DC73B");
	});
	
	$(document).on('click', '.playerPortal', function(){
		var id = $(this).attr('id');
		console.log("#"+id+"-bio");
		$('.playerBanners').css('opacity', 0).css('visibility', 'hidden');
		$('.teamPlayerInformationContainer').css('opacity', 1).css('visibility', 'visible');
		$('#'+id+'-bio').css('opacity', 1);
	});
	
	$('.esport_logo').click(function(){
		var id = $(this).attr('id');
		if($('.playerBanners').css('opacity') != 0){
			
		}else{
			$('.esport_logo').each(function(){
				$(this).removeClass('active');	
			});
			$(this).addClass('active');
			$('.playerInfo').css('opacity', 0);
			$('.teamPlayerInformationContainer').css('opacity', 0).css('visibility', 'hidden');
			$('.playerBanners').css('opacity', 1).css('visibility', 'visible');
		}
	});
	
	//TODO: if team container is visible to load YT
	
	// Load the IFrame Player API code asynchronously.
/*	var tag = document.createElement('script');
	tag.src = "https://www.youtube.com/player_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	// Replace the 'ytplayer' element with an <iframe> and
	// YouTube player after the API code downloads.
	var player;
	function onYouTubePlayerAPIReady() {
		player = new YT.Player('ytContainer', {
			height: '562',
			width: '1000',
			videoId: '0YkfGje0ZWA',
			events: {
				'onReady' : onPlayerReady,
				'onStateChange' : onStateChange
			},
			playerVars: {
				autoplay: 1,
				modestbranding: 1,
				start: 1,
				end: 100,
				autohide: 0
			}
		});
		$('.esport_logo').click(function(){
			player.pauseVideo();
			$('.teamIntro').fadeOut();
		})
	}
	
	function onPlayerReady(event){
		event.target.setVolume(15);
	}
	
	function onStateChange(event){
		if (event.data === YT.PlayerState.ENDED){
			player.loadVideoById({
				videoId: '0YkfGje0ZWA',
				startSeconds: 240,
				endSeconds: 360
			})
		}
	}*/
</script>

<?php include('components/footer.php');?>