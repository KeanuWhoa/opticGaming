<?php include('components/header_common.php'); include('components/header.php'); ?>

<div class="topContent">
	<div class="wrapper">
		<div id="featuredDocsContainer" class="centeringMainDiv" ng-controller="featuredDocsController">
			<div class="featuredDocs" ng-repeat="featuredItems in featuredList | limitTo:5">
				<a href="news?id={{featuredItems.doc.id}}">
					<div class="featuredContent">
						<h1>{{featuredItems.doc.title}}</h1>
						<p>{{featuredItems.doc.date}}</p>
					</div>
					<div class="featuredType">
						<h5>{{featuredItems.doc.type}}</h5>
					</div>
					<img src="./images/news/{{featuredItems.doc.img}}" />
				</a>
			</div>
			<div class="sponsorHack">
				<ul>
					<li><img src="./images/sponsors/dxracer-sponsor.png" /></li>
					<li><img src="./images/sponsors/Sponsor-Scuf_2.jpg" /></li>
					<li><img src="./images/sponsors/Sponsor-TurtleBeach.jpg" /></li>
					<li><img src="./images/sponsors/twax_ad.png" /></li>
				</ul>
			</div>
		</div>
		<h2 class="subHeaderTitle">Teams</h2>
		<div class="homeTeamContainer centeringMainDiv" ng-controller="homeTeamController">
			<div class="homeTeamContainers" ng-repeat="team in homeTeamList" id="{{team.team.sport | lowercase}}_container">
				<p>{{team.team.sport}}</p>
				<div ng-repeat="member in team.team.players" class="homeTeamPlayers">
					<div class="tooltip">
						<span>{{member.player.name}}</span>
					</div>
					<div class="hs">
						<img src="./images/team/{{member.player.headshot}}" />
					</div>
				</div>
			</div>
		</div>
		<h2 class="subHeaderTitle">News</h2>
		<a href="" class="seeMore">See More</a>
		<div id="featuredDocsContainer" class="centeringMainDiv newsDocsContainer" ng-controller="featuredDocsController">
			<div class="featuredDocs" ng-repeat="featuredItems in featuredList | filter: {doc: {type: 'News'}} | limitTo:6">
				<a href="news?id={{featuredItems.doc.id}}">
					<div class="featuredContent">
						<h1>{{featuredItems.doc.title}}</h1>
						<p>{{featuredItems.doc.date}}</p>
					</div>
					<img src="./images/news/{{featuredItems.doc.img}}" />
				</a>
			</div>
		</div>
		<h2 class="subHeaderTitle">Sponsors</h2>
		<div class="sponsorBar">
			<div class="sponsorContainers">
				<a href="#"><img src="./images/sponsors/brisk.png" /></a>
			</div>
			<div class="sponsorContainers">
				<a href="#"><img src="./images/sponsors/turtle_beach.png" /></a>
			</div>
			<div class="sponsorContainers">
				<a href="#"><img src="./images/sponsors/scuf.png" /></a>
			</div>
			<div class="sponsorContainers">
				<a href="#"><img src="./images/sponsors/dxracer.png" /></a>
			</div>
		</div>
	</div>
</div>
<div class="bottomContent">
	<h3>TOP NOTCH ENTERTAINMENT</h3>
	<h2>CHECK OUT OPTIC GAMING VIDEOS AND LIVESTREAMS</h2>
	<a href="">WATCH NOW</a>
</div>
<?php include('components/footer.php');?>