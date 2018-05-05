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

<div class="container-fluid movie-info">
	<div id="movie" class="well">
		<div class="row">

			<div class="col-xs-8 col-md-4">
				<h2 class="movie-title">{{movieTitle}}</h2>
				<img ng-src="{{moviePoster}}" class="thumbnail movie-poster">
			</div>
			<div class="col-md-8">
				<h2></h2>
				<ul class="list-group">
					<li class="list-group-item movie-genre">
						<strong>Genre: {{movieGenre}}</strong>
					</li>
					<li class="list-group-item movie-released">
						<strong>Released: {{movieReleaseDate}}</strong>
					</li>
					<li class="list-group-item movie-rated">
						<strong>Rated: {{movieRating}}</strong>
					</li>
					<li class="list-group-item movie-type">
						<strong>Media type: {{movieType}}</strong>
					</li>
					<li class="list-group-item movie-runtime">
						<strong>Runtime: {{movieRuntime}}</strong>
					</li>
					<li class="list-group-item movie-imdb-rating">
						<strong>IMDB Rating: {{movieImdbRating}}</strong>
					</li>
					<li class="list-group-item movie-director">
						<strong>Director: {{movieDirector}}</strong>
					</li>
					<li class="list-group-item movie-writer">
						<strong>Writer: {{movieWriter}}</strong>
					</li>
					<li class="list-group-item movie-actor-list">
						<strong>Actors: {{movieActors}}</strong>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 offset-mdd-2">
				<div class="well">
					<h3>Plot</h3>
					<p class="movie-plot">{{moviePlot}}</p>
					<hr>
					<a href="{{movieImdbLink}}" target="_blank" class="btn btn-primary movie-imdb">View IMDB</a>
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
	
<!--
	<script>
		getMovie();
	</script>
-->
