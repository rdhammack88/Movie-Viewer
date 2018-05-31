<!--<div ng-include="'includes/search_bar.php'"></div>-->
<!--
<div class="container-fluid">
	<div class="jumbotron">
		<h3 class="text-center mb-3">Search For Any Movie</h3>
		<form id="searchForm" class="input-group container  mb-3">
			<input type="search" class="form-control" id="searchText" placeholder="Search Movies" aria-label="Search" ng-model="movieQuery">
			<div class="input-group-append">
				<button class="btn btn-primary" type="submit" ng-click="findMovie()">Search Movie</button>
			</div>
		</form>
	</div>
</div>
-->

<div class="container-fluid movie-info">
	
	<div class="text-danger movie-error" ng-hide="movieTitle">{{error}}</div>
	<div class="loading-results" ng-hide="movieTitle || error">
		{{loadResults}} 
		<span class="loading-dot1">.</span>
		<span class="loading-dot2">.</span>
		<span class="loading-dot3">.</span> 
	</div>
	
	<div id="movie" class="well">
		<div class="row m-auto">
			<h2 class="movie-title" ng-show="movieTitle">
			
				{{movieTitle | uppercase}}
				<button class="favorite-btn" ng-click="favMovie()">
					<span ng-if="!toggle"><i class="far fa-heart"></i></span>
      				<span ng-if="toggle" class="favheart"><i class="fas fa-heart"></i></span>
<!--					<i ng-class="{'fas' : toggle, 'far' : !toggle}" class="fa-heart"></i>-->
				</button> 
<!--				&nbsp;&nbsp; -->
			</h2> <!-- ng-class="toggle ? 'far' : 'fas'"    || {'fas' : toggle} -->
		</div>
		<div class="row" ng-show="movieTitle">

			<div class="col-xs-8 col-md-4">
			<!-- event.currentTarget   ng-class="{heart: heart}"   {{heart}}-->
			<!-- {'selected-class-name': $index == favorited'}  favMovie($index)-->
			<!-- {'fas': fullHeart, 'far': emptyHeart}   favMovie() toggle = !toggle-->
				
				<img ng-src="{{moviePoster}}" class="thumbnail movie-poster">
			</div>
			<div class="col-md-8">
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
		<div class="row movie-plot-container" ng-show="movieTitle">
			<div class="col-sm-10 col-md-8 offset-md-4 offset-sm-1">
				<div class="well">
					<h3>Plot</h3>
					<p class="movie-plot">{{moviePlot}}</p>
					<hr>
					<a href="{{movieImdbLink}}" target="_blank" class="btn btn-primary movie-imdb">View IMDB</a>
					<a href="./#/search/{{pageNumber}}" class="btn btn-default">Go Back to Search</a>
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