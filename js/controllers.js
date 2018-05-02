var movieControllers = angular.module('movieControllers', []);

movieControllers.controller('MovieSearchController', function MovieController($scope, $http) {
	
	$scope.movieQuery = null;
	
//	if($scope.movieQuery) {
		$http.get('http://www.omdbapi.com/?apikey=a336cd51&s=' + $scope.movieQuery)
		.then(function(res) {
			$scope.movies = res.data.Search;
//			$scope.movie = res.data;
			console.log($scope.movies);
			console.log($scope.movieQuery);
//			$scope.movieID = movie.imdbID.toString();
		});
//	}
	
});