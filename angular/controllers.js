// JavaScript Document
var $scope;
var app = angular.module('testingApp.controllers', []);

app.controller('teamClick', function($scope, $http){
	$scope.playerData = [];
	$scope.getPlayerInfo = function($event){
		var ele = $event.currentTarget;
		var id = $(ele).attr('id');
		console.log(id);
		$http.post("data/teams.php", id).then(function(result) {
			$scope.playerData = result.data;
		}, function() {
			// error
		});
	};
	$scope.getPlayerID = function($event){
		var ele = $event.currentTarget;
		var id = $(ele).attr('id');
		$scope.ID = id;
		$http.post("data/hltv_scraper.php", id).then(function(e) {
			$scope.playerStats = e.data;
		}, function() {
			// error
		});
	};
});

app.controller('navigationController', function($scope){
	$scope.navigationList = [
		{
			nav: {
				name: 'Home',
				link: 'home'
			}
		},
		{
			nav: {
				name: 'About',
				link: 'about'
			}
		},
		{
			nav: {
				name: 'Teams',
				link: 'teams'
			}
		},
		{
			nav: {
				name: 'News',
				link: 'news'
			}
		},
		{
			nav: {
				name: 'Sponsors',
				link: 'sponsors'
			}
		},
		{
			nav: {
				name: 'Watch',
				link: 'watch'
			}
		}
	];
});

app.controller('homeTeamController', function($scope){
	$scope.homeTeamList = [
		{
			team: {
				sport: "CoD",
				players: [
					{
						player: {
							name: "Scump",
							headshot: "scump_hs.png"
						}
						
					},
					{
						player: {
							name: "Formal",
							headshot: "formal_hs.png"
						}
					},
					{
						player: {
							name: "Crimsix",
							headshot: "crim.png"
						}
					},
					{
						player: {
							name: "Karma",
							headshot: "karma.png"
						}
					}
				]
			}
		},
		{
			team: {
				sport: "CSGO",
				players: [
					{
						player: {
							name: "Mixwell",
							headshot: "mixwell_hs.png"
						}
						
					},
					{
						player: {
							name: "Tarik",
							headshot: "tarik_hs.png"
						}
					},
					{
						player: {
							name: "Rush",
							headshot: "rush_hs.png"
						}
					},
					{
						player: {
							name: "NAF-Fly",
							headshot: "naf_hs.png"
						}
					}/*,
					{
						player: {
							name: "Hazed",
							headshot: "hazed_hs.png"
						}
					} */
					
				]
			}
		},
		{
			team: {
				sport: "Halo",
				players: [
					{
						player: {
							name: "Lethul",
							headshot: "lethul_hs.png"
						}
						
					},
					{
						player: {
							name: "Snakebite",
							headshot: "snakebite_hs.png"
						}
					},
					{
						player: {
							name: "Royal2",
							headshot: "royal2.png"
						}
					},
					{
						player: {
							name: "Frosty",
							headshot: "frosty_hs.png"
						}
					}	
				]
			}
		}
	];
});
			   
app.controller('featuredDocsController', function($scope, $location){
	$scope.newsID = location.search.split("&")[0].replace("?","").split("=")[1];
	$scope.featuredList = [
		{
			doc: {
				title: 'CWL Season Two - Group Stage',
				link: 'home',
				img: 'doc6_bg.png',
				type: 'News',
				date: '25 July 2017',
				id: 1,
				content: "enter content here, really long paragraph with a lot of cool stuff"
			}
		},
		{
			doc: {
				title: 'Dreamhack Atlanta',
				link: 'home',
				img: 'doc8_bg.png',
				type: 'News',
				date: '24 July 2017',
				id: 2,
			}
		},
		{
			doc: {
				title: 'ESL One Cologne',
				link: 'home',
				img: 'doc2_bg.png',
				type: 'News',
				date: '22 July 2017',
				id: 3,
			}
		},
		{
			doc: {
				title: 'OpTic Bootcamp',
				link: 'home',
				img: 'doc1_bg.png',
				type: 'News',
				date: '18 July 2017',
				id: 4,
			}
		},
		{
			doc: {
				title: 'OpTic Welcomes ImAPet',
				link: 'home',
				img: 'doc4_bg.png',
				type: 'Announcement',
				date: '15 July 2017',
				id: 5,
			}
		},
		{
			doc: {
				title: "RUSH's return to form?",
				link: 'home',
				img: 'doc7_bg.png',
				type: 'News',
				date: '13 July 2017',
				id: 6,
			}
		},
		{
			doc: {
				title: 'Gears continues dominance',
				link: 'home',
				img: 'doc3_bg.png',
				type: 'News',
				date: '11 July 2017',
				id: 7,
			}
		},
		{
			doc: {
				title: 'IEM Sydney',
				link: 'home',
				img: 'doc9_bg.png',
				type: 'News',
				date: '11 June 2017',
				id: 8,
			}
		},
		{
			doc: {
				title: 'Document 10',
				link: 'home',
				img: 'doc5_bg.jpg',
				type: 'News',
				date: '11 March 2017',
				id: 9,
			}
		}
	];
	$scope.quantity = 5;
});