<?php
//	include('includes/init.php');
?>

<!DOCTYPE html>
<html lang="en" ng-app="movieApp">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Movie Info</title>
	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0-beta.3/superhero/bootstrap.min.css">
	
	<script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<link rel="stylesheet" href="css/styles.css">
	
	<script src="lib/angular/angular.min.js"></script>
	<script src="lib/angular/angular-route.min.js"></script>
	
<!--
<script data-require="angular.js@1.3.0-beta.5" data-semver="1.3.0-beta.5" src="https://code.angularjs.org/1.3.0-beta.5/angular.js"></script>
    <script data-require="angular-route@1.2.14" data-semver="1.2.14" src="https://code.angularjs.org/1.2.14/angular-route.js"></script>
-->
    
	<script src="js/app.js"></script>
	<script src="js/services.js"></script>
	<script src="js/SearchController.js"></script>
	<script src="js/DetailsController.js"></script>
	<script src="js/LoginController.js"></script>
	<script src="js/SignupController.js"></script>
	<script src="js/omdb.js"></script>
<!--	<script src="js/controllers.js"></script>-->
</head>
<body>

	<header ng-controller="SearchController">
		
		<div class="container-fluid">
			<nav class="navbar navbar-expand-md navbar-dark">
				<h2 class="brand-logo"><a href="./#/" class="navbar-brand"><i class="fas fa-film"></i> Movie Reviewer </a></h2>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarColor01">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a href="./#/login" class="nav-link btn">Login</a></li>
						<li class="nav-item active"><a href="./#/signup" class="nav-link ml-3 btn btn-outline-primary">Signup</a></li>
					</ul>
				</div>
			</nav>
		</div>
			
		<div class="container-fluid">
			<div class="jumbotron">
				<h3 class="text-center mb-3">Search For Any Movie</h3>
				<form id="searchForm" class="input-group container mb-3" ng-submit="findMovie(movieQuery)">
					<input type="search" class="form-control" id="searchText" placeholder="Search Movies" aria-label="Search" ng-model="movieQuery">
					<div class="input-group-append">
						<input class="btn btn-primary" type="submit" value="Search Movie" /> <!--  ng-click="findMovie(movieQuery)" -->
					</div>
				</form>
			</div>
		</div>
	</header>
	
	<div ng-view></div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	
</body>
</html>