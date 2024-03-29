<!--<div ng-include="'includes/search_bar.php'"></div>-->
<!--
<div class="container-fluid">
	<div class="jumbotron">
		<h3 class="text-center mb-3">Search For Any Movie</h3>
		<form id="searchForm" class="input-group container mb-3">
			<input type="search" class="form-control" id="searchText" placeholder="Search Movies" aria-label="Search" ng-model="movieQuery">
			<div class="input-group-append">
				<button class="btn btn-primary" type="submit" ng-click="findMovie()">Search Movie</button>
			</div>
		</form>
	</div>
</div>
-->


<div class="container movie-search-info" ng-controller="SearchController">
	<div id="movies" class="row" ng-if="movieQuery">
<!--	<p>{{movieQuery}}</p>-->

	<div class="text-danger movie-error" ng-hide="movies">{{error}}</div>
	<div class="loading-results" ng-hide="movies">
		{{loadResults}} 
		<span class="loading-dot1">.</span>
		<span class="loading-dot2">.</span>
		<span class="loading-dot3">.</span> 
	</div>
	
		<div class="col-md-4 col-lg-3 col-sm-6 offset-sm-3"
			 ng-repeat="movie in movies"> <!-- N/A -->
<!--		 ng-repeat="movie in movies"-->
			<div class="well text-center" >
				<img ng-if="movie.Poster === 'N/A'" src="imgs/unavailable.png">
				<img ng-if="movie.Poster !== 'N/A'" ng-src="{{movie.Poster}}">
				<div class="details">
					<h5> {{movie.Title}} </h5>
					<p class="details-btn">
						<a class="btn btn-primary" href="./#/movie/{{movie.imdbID.toString()}}" ng-click="storeMovieSession()">Movie Details</a>
					</p>
<!--					<p>{{movie.imdbID.toString()}}</p>-->
				</div>
			</div>
		</div>
<!--
		<div ng-repeat="movie in movies" ng-if="movie.Poster === 'N/A'">
		{{pageNumber + 1}}
		{{nextPage()}}
		</div>	
-->
	</div>
	
	<br/>
	<div class="pagination-links" ng-if="movies">
		<p><span> Showing page {{pageNumber}} of {{totalResults || 1}}</span> </p>
		<p><a ng-click="prevPage()" class="btn btn-primary" ng-show="pageNumber !== 1">Prev</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a ng-click="nextPage()" class="btn btn-primary" ng-show="pageNumber !== totalResults && totalResults !== 1">Next</a></p>
	</div>
</div>