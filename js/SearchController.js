(function() {
	var app = angular.module("movieApp");
	
	var SearchController = function($scope, omdb, $location, $routeParams, $log) {
		
		$scope.pageNumber =  $routeParams.pageNumber ? parseInt($routeParams.pageNumber) : 1;
		
//		$scope.pageNumber =  parseInt($routeParams.pageNumber);
		
		var findMovieError = function() {
			$scope.error = "Sorry, I could not find that movie.";
		}
		
		$scope.findMovie = function(movie) {
			$scope.storeMovieSession();
//			$scope.movies = movie;
			$location.path("/search/" + $scope.pageNumber);
			
			omdb.getMovie($scope.movieQuery, $scope.pageNumber).then(function(data) {
//				$location.path("js/partials/search_page.php");
				$scope.movies = data.Search;
				
				$scope.totalResults = data.totalResults % 10 === 0 ?data.totalResults / 10 : Math.floor(data.totalResults / 10);
								
				$log.log(data);
				
				if(data.Response === "False") {
					findMovieError();
				}
			}, findMovieError);
												  
			$log.log($scope.movies);
		}
		
		$scope.nextPage = function() {
			$scope.pageNumber += 1;
			$scope.findMovie($scope.movieQuery);
		};
		
		$scope.prevPage = function() {
			$scope.pageNumber -= 1;
			$scope.findMovie($scope.movieQuery);
		};
		
		$scope.storeMovieSession = function() {
			sessionStorage.setItem('storedMovie', $scope.movieQuery);
		}

		if(sessionStorage.getItem('storedMovie')) {
			$scope.movieQuery = sessionStorage.getItem('storedMovie');
			$scope.findMovie($scope.movieQuery);
		}
	};
	
	app.controller("SearchController", SearchController);
	
}());