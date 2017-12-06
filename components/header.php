<?php

?>

<body ng-app="testingApp" ng-init="pageID='<?php echo $page ?>'" id="{{pageID}}" ng-class="{foo:true}">

	<div class="header">
		<div class="wrapper">
			<div id="logoContainer">
				<a href="./home"><img src="images/logo.png" /></a>
			</div>
			<div id="navigation" ng-controller="navigationController">
				<ul class="navMenu">
					<li ng-repeat="navItems in navigationList">
						<a href="./{{navItems.nav.link}}" ng-class="{true: 'selected'}[pageID == navItems.nav.link]">{{ ::navItems.nav.name}}</a>
					</li>
				</ul>	
			</div>
		</div>
	</div>
	
	<div class="subHeader">
			
	</div>
	