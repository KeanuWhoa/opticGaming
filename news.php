<?php include('components/header_common.php'); include('components/header.php'); ?>

<div class="topContent" ng-controller="featuredDocsController">
	<div class="wrapper">
		<h2 class="subHeaderTitle">News</h2>
		<a href="./news" ng-if="newsID" class="backBtn">BACK</a>
		<div class="newsArticle" ng-if="newsID" ng-repeat="featuredItems in featuredList | filter: { doc: { id: newsID } }">
			<div class="newsArticleContent">
				<h1>{{featuredItems.doc.title}}</h1>
				<p><span>{{featuredItems.doc.date}}</span></p>
				<br />
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras arcu sapien, faucibus ac tempor et, porta quis eros. Maecenas ac condimentum nulla, non pharetra leo. Nulla tempus odio odio, ut vestibulum nibh aliquam ac. Cras tincidunt eros ac tellus laoreet tincidunt. Proin ac vulputate velit. Proin eget diam ut diam iaculis rhoncus id eu diam. Sed blandit venenatis lectus, ut semper metus volutpat quis.</p>
				<p>Suspendisse volutpat fermentum elementum. Nullam suscipit, neque at tincidunt luctus, est ante euismod ex, ac lacinia risus ipsum consequat ex. Donec luctus augue sit amet eros eleifend, vitae vulputate nisi luctus. Nam id varius massa, id tempor turpis. Vivamus a congue urna. Quisque accumsan dictum feugiat. Praesent non sapien nibh. Quisque viverra metus sed tortor auctor, in suscipit elit rhoncus.</p>
				<p>Pellentesque sed imperdiet justo. Cras et faucibus magna, ullamcorper vestibulum tortor. Sed luctus egestas justo, finibus ultrices nulla rutrum ac. Cras id dolor id sapien tempus faucibus vitae sit amet ipsum. Nullam orci dui, rutrum a tortor sit amet, elementum pretium velit. Integer fringilla augue quis nulla fermentum posuere non in neque. Aliquam erat volutpat. Vivamus eu auctor risus. Donec vel justo eleifend, tincidunt justo in, ullamcorper mauris. Mauris porttitor, elit sit amet aliquam feugiat, magna arcu tincidunt risus, vitae eleifend turpis tellus a augue. Pellentesque venenatis purus nec sodales blandit. Duis imperdiet odio vel leo facilisis tristique. Pellentesque eleifend, tellus sed viverra tristique, eros nulla tempor erat, vitae mollis nulla quam ut quam. Nulla facilisi. In hac habitasse platea dictumst. Vivamus feugiat condimentum lorem, nec blandit nunc dapibus ac.</p>
				<p>Sed quis tincidunt sapien, sit amet rhoncus turpis. Maecenas neque risus, fermentum in consectetur eu, porttitor a ex. Sed vel finibus ante, ultrices molestie dolor. Aenean tincidunt in felis ac sodales. Sed vitae elit ornare metus eleifend condimentum. Nunc eu sapien sit amet urna pulvinar feugiat. Donec ac nulla velit. Etiam euismod ultrices rutrum. Sed a dapibus mauris. In sed faucibus mauris, nec convallis nisl. Quisque suscipit dictum sollicitudin. Donec sit amet mauris ipsum. Fusce consectetur, risus at maximus bibendum, erat justo elementum massa, ac faucibus mi est et neque.</p>
				<p>Etiam aliquet condimentum diam sit amet eleifend. Ut urna enim, eleifend nec mattis non, tincidunt in ligula. Vestibulum eu magna at elit rutrum ultricies ut sed libero. Suspendisse non facilisis lacus. Phasellus laoreet eu mi vel sodales. Sed vestibulum iaculis malesuada. Phasellus ut lacus nec nisi interdum consequat quis consectetur mi. Curabitur eleifend consequat cursus. Praesent nec scelerisque odio, vitae porta risus. Cras in tempus nulla. Curabitur vestibulum justo vel molestie imperdiet. Etiam sed nisl augue. Vivamus neque ipsum, scelerisque a elementum nec, commodo eget ante. </p>
			</div>
			<div class="newsArticleImg">
				<img src="./images/news/{{featuredItems.doc.img}}" />
			</div>
		</div>
		<p class="error" ng-show="(featuredList | filter: { doc: { id: newsID } }).length == 0">Nothing to see here! Move along!</p>
		<div class="hideStuff" ng-hide="newsID">
			<div class="filterNav">
				<h3>Filter by Type:</h3>
				<span ng-click="typeFilter = ''">Reset</span>
				<span ng-click="typeFilter = {doc: {type: 'News'}}">News</span>
				<span ng-click="typeFilter = {doc: {type: 'Announcement'}}">Announcement</span>
			</div>
			<div class="filterNav date">
				<h3>Filter by Date:</h3>
				<span ng-click="dateFilter = ''">Reset</span>
				<select ng-model="dateFilter">
					<option ng-click="dateFilter = ''">Reset</option>
					<option ng-click="{doc: {date: 'March'}}">March</option>
					<option ng-click="{doc: {date: 'April'}}">April</option>
					<option ng-click="{doc: {date: 'May'}}">May</option>
					<option ng-click="{doc: {date: 'June'}}">June</option>
					<option ng-click="{doc: {date: 'July'}}">July</option>
				</select>
			</div>
			<div id="featuredDocsContainer" class="centeringMainDiv">
				<div class="featuredDocs" ng-repeat="featuredItems in featuredList | filter:typeFilter | filter:dateFilter">
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
				<p ng-show="(featuredList | filter:typeFilter | filter:dateFilter).length == 0">No results!</p>
			</div>
		</div>
	</div>
</div>

<?php include('components/footer.php');?>