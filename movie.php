<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Movie Info</title>
<!--	<link rel="stylesheet" href="https://bootswatch.com/4/slate/bootstrap.min.css">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0-beta.3/superhero/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<!--
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand">MovieInfo</a>
			</div>
		</div>
	</nav>
-->
	<div class="container-fluid">
		<div class="jumbotron">
			<h3 class="text-center">Search For Any Movie</h3>
			<form id="searchForm">
				<input type="text" class="form-control" id="searchText" placeholder="Search Movies">
			</form>
		</div>
	</div>
	
	<div class="container-fluid movie-info">
		<div id="movie" class="well"></div>
	</div>
	
	<script
	  src="https://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	  crossorigin="anonymous"></script>
	<script src="js/scripts.js"></script>
	
	<script>
		getMovie();
	</script>
</body>
</html>