(function() {
	var app = angular.module("movieApp");
	
	var DetailsController = function($scope, omdb, $routeParams, $log) {
		
		var movieDetailsError = function() {
			$scope.error = "Sorry, it took longer than expected to load the movie details. Please refresh and try again.";
		}
		
		$scope.loadResults = 'Loading';
		$scope.toggle = false;
		
		var getMovieDetails = function(data) {
			$scope.movie = data;
			$scope.movieType = $scope.movie.Type[0].toUpperCase() + $scope.movie.Type.substr(1);
			$scope.movieTitle = $scope.movie.Title;
			$scope.moviePoster = $scope.movie.Poster;
			$scope.movieGenre = $scope.movie.Genre;
			$scope.movieReleaseDate = $scope.movie.Released;
			$scope.movieRating = $scope.movie.Rated;
			$scope.movieRuntime = $scope.movie.Runtime;
			$scope.movieImdbRating = $scope.movie.imdbRating;
			$scope.movieDirector = $scope.movie.Director;
			$scope.movieWriter = $scope.movie.Writer;
			$scope.movieActors = $scope.movie.Actors;
			$scope.moviePlot = $scope.movie.Plot;
			$scope.movieImdbLink = 'https://imdb.com/title/' + $scope.movie.imdbID;
//			$log.log($scope.movie);
		}
		
		$scope.favMovie = function() {
			$scope.toggle = !$scope.toggle;
		}
		
//		$scope.movieQuery = movieSearch.movieQuery;
		$scope.movieId = $routeParams.movieId;
		omdb.getMovieDetails($scope.movieId).then(getMovieDetails, movieDetailsError);
		
	};
	
	app.controller("DetailsController", DetailsController);
	
}());