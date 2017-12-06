<?php

	$domain = $_SERVER['HTTP_HOST'];
	$page = $_SERVER['REQUEST_URI'];

	if ($domain == "localhost"){
		if (false !== ($pos = strpos($page, '?'))) {
			$page = substr($page, 0, $pos);
			$page = str_replace("/optic/", "", $page);
		}else{
			$page = str_replace("/optic/", "", $page);
		}
	}else{
		$page = str_replace("/", "", $page);
	}
?>

<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Angular">
	<meta name="author" content="Ryan Talks">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Angular</title>
	
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/unslider.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> 
	<script src="js/jquery.js"></script>
	<script src="angular/angular.js"></script>
	<script src="js/gradient_map.js"></script>
</head>