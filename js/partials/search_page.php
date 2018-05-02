<div class="container-fluid">
	<div class="jumbotron">
		<h3 class="text-center">Search For Any Movie</h3>
		<form id="searchForm">
			<input type="text" class="form-control" id="searchText" placeholder="Search Movies" ng-model="movieQuery">
			<button ng-click="MovieController()">Search Movie</button>
		</form>
	</div>
</div>

<div class="container movie-search-info">
	<div id="movies" class="row" ng-if="movieQuery">
<!--	<p>{{movieQuery}}</p>-->
	
		<div class="col-md-4 col-lg-3 col-sm-6 offset-sm-3"
			 ng-repeat="movie in movies">
<!--		 ng-repeat="movie in movies"-->
			<div class="well text-center">
				<img ng-src="{{movie.Poster}}">
				<div class="details">
					<h5> {{movie.Title}} </h5>
					<p class="details-btn">
						<a class="btn btn-primary" href="/movie/:{{movie.imdbID.toString()}}">Movie Details</a>
					</p>
				</div>
			</div>
		</div>
		
	</div>
</div>