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
		<div id="movie" class="well">
			<div class="row">
			
				<div class="col-xs-8 col-md-4">
					<h2 class="movie-title"></h2>
					<img src="" class="thumbnail movie-poster">
				</div>
				<div class="col-md-8">
					<h2></h2>
					<ul class="list-group">
						<li class="list-group-item movie-genre">
							<strong>Genre:</strong>
						</li>
						<li class="list-group-item movie-released">
							<strong>Released:</strong>
						</li>
						<li class="list-group-item movie-rated">
							<strong>Rated:</strong>
						</li>
						<li class="list-group-item movie-type">
							<strong>Media type:</strong>
						</li>
						<li class="list-group-item movie-runtime">
							<strong>Runtime:</strong>
						</li>
						<li class="list-group-item movie-imdb-rating">
							<strong>IMDB Rating:</strong>
						</li>
						<li class="list-group-item movie-director">
							<strong>Director:</strong>
						</li>
						<li class="list-group-item movie-writer">
							<strong>Writer:</strong>
						</li>
						<li class="list-group-item movie-actor-list">
							<strong>Actors:</strong>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 offset-mdd-2">
					<div class="well">
						<h3>Plot</h3>
						<p class="movie-plot"></p>
						<hr>
						<a href="http://imdb.com/title/	movie.imdbID 	" target="_blank" class="btn btn-primary movie-imdb">View IMDB</a>
						<a href="index.php" class="btn btn-default">Go Back to Search</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container-fluid movie-reviews">
		<form action="review.php" method="post">
			<input type="text">
		</form>
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