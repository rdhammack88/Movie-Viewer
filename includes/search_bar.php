<div class="container-fluid" ng-controller="MovieSearchController">
	<div class="jumbotron">
		<h3 class="text-center mb-3">Search For Any Movie</h3>
		<form id="searchForm" class="input-group container  mb-3">
			<input type="search" class="form-control" id="searchText" placeholder="Search Movies" aria-label="Search" ng-model="movieQuery" enter-click="findMovie()" autofocus autocomplete="on">
			<div class="input-group-append">
				<a href="./#/" class="btn btn-primary" type="submit" ng-click="storeMovieSession()">Search Movie</a>
			</div>
		</form>
	</div>
</div>