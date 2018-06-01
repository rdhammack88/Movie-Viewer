(function() {
	var app = angular.module("movieApp");
	
	var SearchController = function($scope, omdb, movieSearch, $location, $routeParams, $log) {
		
//		$scope.movieQuery = movieSearch.movieQuery;
		
		$scope.pageNumber =  $routeParams.pageNumber ? parseInt($routeParams.pageNumber) : 1;
		
//		$scope.pageNumber =  parseInt($routeParams.pageNumber);
		
		var findMovieError = function() {
			$scope.error = "Sorry, I could not find that movie.";
		}
		
		$scope.findMovie = function(movie) {
			$scope.storeMovieSession();
//			$scope.movies = movie;
			$scope.loadResults = 'Loading';
			
			omdb.getMovie($scope.movieQuery, $scope.pageNumber).then(function(data) {
//				$location.path("js/partials/search_page.php");
				$scope.movies = data.Search;
				
				$scope.totalResults = data.totalResults % 10 === 0 ?data.totalResults / 10 : Math.floor(data.totalResults / 10) + 1;
				$scope.totalResults = $scope.totalResults === 1 ? 1 : $scope.totalResults;
				
				console.log('find movie clicked');
				$log.log(data);
				
				if(data.Response === "False") {
					findMovieError();
				}
			}, findMovieError);
												  
			$log.log($scope.movies);
			$location.path('/search/' + $scope.pageNumber);
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
			sessionStorage.removeItem('storedMovie');
			sessionStorage.setItem('storedMovie', $scope.movieQuery);
//			$scope.movieQuery = movieSearch.movieQuery;
//			
//			$scope.watch('movieQuery', function() {
//				movieSearch.movieQuery = $scope.movieQuery;
//			})
		}
//
		if(sessionStorage.getItem('storedMovie')) {
			$scope.movieQuery = sessionStorage.getItem('storedMovie');
			$scope.findMovie($scope.movieQuery);
		}
	};
	
	app.controller("SearchController", SearchController);
	
}());