<!DOCTYPE html>
<html lang="en" ng-app="movieApp">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">

	<title>Movie Info</title>
<!--	<link rel="stylesheet" href="https://bootswatch.com/4/slate/bootstrap.min.css">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0-beta.3/superhero/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	
	<script src="lib/angular/angular.min.js"></script>
	<script src="lib/angular/angular-route.min.js"></script>
	<script src="js/app.js"></script>
	<script src="js/controllers.js"></script>
</head>
<body ng-view>
		<!--<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand">MovieInfo</a>
				</div>
			</div>
		</nav>-->
	
<!--
	<div class="container-fluid">
		<div class="jumbotron">
			<h3 class="text-center">Search For Any Movie</h3>
			<form id="searchForm">
				<input type="text" class="form-control" id="searchText" placeholder="Search Movies">
			</form>
		</div>
	</div>
-->
	
		<!-- Future use for filter searching -->
		<!--<div class="container filter-search">
			<label for="genre-filter">Genre</label>
			<select name="genre-filter" id="genre-filter">

			</select>
			<label for="rated-filter">Rated</label>
			<select name="rated-filter" id="rated-filter">

			</select>
		</div>-->
	
<!--
	<div class="container movie-search-info">
		<div id="movies" class="row"></div>
	</div>
-->
	
<!--
	<script
	  src="https://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	  crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
-->
	<script>
//		var searchQuery = sessionStorage.getItem('searchQuery');
//		if(searchQuery != '' || searchQuery != null) {
//			$('#searchText').val(searchQuery);
//			getMovies(searchQuery);
//		}
	</script>
</body>
</html>