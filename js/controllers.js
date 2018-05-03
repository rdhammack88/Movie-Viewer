var movieControllers = angular.module('movieControllers', []);

movieControllers.controller('MovieSearchController', 
	function MovieController($scope, $http) {
//		if($scope.movieQuery) {
			$http({
				method: 'GET',
				url: 'http://www.omdbapi.com/?apikey=a336cd51&s=' + $scope.movieQuery
			}).then(function(res) {
				$scope.movies = res.data.Search;
	//			$scope.movie = res.data;
				console.log($scope.movies);
				console.log($scope.movieQuery);
	//			$scope.movieID = movie.imdbID.toString();
			});
//		}
	}
);

movieControllers.controller('MovieDetailsController', 
	function MovieController($scope, $http) {
		$http({
			method: 'GET',
			url: 'http://www.omdbapi.com/?apikey=a336cd51&i=tt1436480'
		}).then(function(res) {
			
		});
	}
);