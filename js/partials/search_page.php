<div class="container-fluid">
	<div class="jumbotron">
		<h3 class="text-center  mb-3">Search For Any Movie</h3>
		<form id="searchForm" class="input-group container  mb-3">
			<input type="search" class="form-control" id="searchText" placeholder="Search Movies" aria-label="Search" ng-model="movieQuery">
			<div class="input-group-append">
				<button class="btn btn-primary" type="submit" ng-click="findMovie()">Search Movie</button>
			</div>
		</form>
	</div>
</div>

<div class="container movie-search-info">
	<div id="movies" class="row" ng-if="movieQuery">
<!--	<p>{{movieQuery}}</p>-->
	
		<div class="col-md-4 col-lg-3 col-sm-6 offset-sm-3"
			 ng-repeat="movie in movies" ng-if="movie.Poster !== 'N/A'">
<!--		 ng-repeat="movie in movies"-->
			<div class="well text-center">
				<img ng-src="{{movie.Poster}}">
				<div class="details">
					<h5> {{movie.Title}} </h5>
					<p class="details-btn">
						<a class="btn btn-primary" href="./#/movie/{{movie.imdbID.toString()}}">Movie Details</a>
					</p>
					<p>{{movie.imdbID.toString()}}</p>
				</div>
			</div>
		</div>
		
	</div>
</div>