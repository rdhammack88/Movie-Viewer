<div ng-include="'includes/search_bar.php'"></div>

<div class="container-fluid movie-info">
	<div id="movie" class="well">
		<div class="row">

			<div class="col-xs-8 col-md-4">
			<!-- event.currentTarget   ng-class="{heart: heart}"   {{heart}}-->
			<!-- {'selected-class-name': $index == favorited'}  favMovie($index)-->
			<!-- {'fas': fullHeart, 'far': emptyHeart}   favMovie() toggle = !toggle-->
				<h2 class="movie-title">{{movieTitle}} &nbsp;&nbsp; <span ng-click="favMovie()"><i ng-class="toggle ? 'fas' : 'far'" class="fa-heart"></i></span> </h2>
				<img ng-src="{{moviePoster}}" class="thumbnail movie-poster">
			</div>
			<div class="col-md-8">
				<h2></h2>
				<ul class="list-group">
					<li class="list-group-item movie-genre">
						<strong>Genre:</strong>
						{{movieGenre}}
					</li>
					<li class="list-group-item movie-released">
						<strong>Released:</strong>
						{{movieReleaseDate}}
					</li>
					<li class="list-group-item movie-rated">
						<strong>Rated:</strong>
						{{movieRating}}
					</li>
					<li class="list-group-item movie-type">
						<strong>Media type:</strong>
						{{movieType}}
					</li>
					<li class="list-group-item movie-runtime">
						<strong>Runtime:</strong>
						{{movieRuntime}}
					</li>
					<li class="list-group-item movie-imdb-rating">
						<strong>IMDB Rating:</strong>
						{{movieImdbRating}}
					</li>
					<li class="list-group-item movie-director">
						<strong>Director:</strong>
						{{movieDirector}}
					</li>
					<li class="list-group-item movie-writer">
						<strong>Writer:</strong>
						{{movieWriter}}
					</li>
					<li class="list-group-item movie-actor-list">
						<strong>Actors:</strong>
						{{movieActors}}
					</li>
				</ul>
			</div>
		</div>
		<div class="row movie-plot-container">
			<div class="col-sm-6 col-md-7 offset-md-4">
				<div class="well">
					<h3>Plot</h3>
					<p class="movie-plot">{{moviePlot}}</p>
					<hr>
					<a href="{{movieImdbLink}}" target="_blank" class="btn btn-primary movie-imdb">View IMDB</a>
					<a href="./#/" class="btn btn-default">Go Back to Search</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid movie-reviews">
<!--
	<form action="review.php" method="post">
		<input type="text">
	</form>
-->
</div>
	
<footer></footer>