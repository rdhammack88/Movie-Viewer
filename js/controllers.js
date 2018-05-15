var movieControllers = angular.module('movieControllers', []);

movieControllers.controller('MovieSearchController', 
	function MovieController($scope, $http) {
	
		var onMovieFind = function(res) {
			$scope.movies = res.data.Search;
			
				console.log(res.data);
		}
	
		var onMovieFindError = function(reason) {
			$scope.error = "Sorry that movie could not be found. Please try again!";
			
				console.log(res.status);
		}
		

		$scope.findMovie = function() {
//			$scope.movies = "Loading...";
//			$http({
//				method: 'GET',
//				url: 'https://www.omdbapi.com/?apikey=a336cd51&s=' + $scope.movieQuery
//			}).then(function(res) {
////				console.log($http);
////				console.log($http.pendingRequests);
////			}).then(function(res) {
//				console.log(res.status);
//				$scope.movies = res.data.Search;
//				console.log(res.status);
////				console.log($http.pendingRequests.length);
////				console.log($scope.movies);
////				console.log($scope.movieQuery);
////				console.log($scope.movie.imdbID.toString())
//	//			$scope.movieID = movie.imdbID.toString();
//			},
//				   function(res) {
//				$scope.movies = "Sorry that movie could not be found. Please try again!";
//			});
			
			
			$http.get('https://www.omdbapi.com/?apikey=a336cd51&s=' + $scope.movieQuery).then(onMovieFind, onMovieFindError);
		}
		
		$scope.storeMovieSession = function() {
			sessionStorage.setItem('storedMovie', $scope.movieQuery);
		}
		
		if(sessionStorage.getItem('storedMovie')) {
			$scope.movieQuery = sessionStorage.getItem('storedMovie');
			$scope.findMovie();
//			$scope.movieQuery = '';
		}
	
//		document.querySelector('#searchText').on('keypress', function(e) {
//			if(e.keyCode === 13) {
//				$('.save-list').click();
//			}
//		});
	}
);

movieControllers.directive('enterClick', function() {
	return function(scope, element) {
		element.bind('keypress', function(e) {
			if(e.keyCode === 13) {
				scope.$apply(function() {
					$scope.findMovie();
				})
			}
		})
	}
})

movieControllers.controller('MovieDetailsController', 
	function MovieController($scope, $http, $routeParams) {
		$http({
			method: 'GET',
			url: 'https://www.omdbapi.com/?apikey=a336cd51&i=' + $routeParams.movieId
			//tt0099785
		}).then(function(res) {
			$scope.movie = res.data;//.data.Search;
			console.log($routeParams.movieId);
			console.log(res);
			console.log(res.data);
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
		});
	
		$scope.heart = ['far', 'fas'];
		$scope.favorited = 0;
							
		$scope.favMovie = function($index) {
			console.log('clicked');
			
			$scope.toggle = !$scope.toggle
			
//			if($scope.fullHeart) {
//				$scope.fullHeart = false;
//				$scope.emptyHeart = true;
//			} else if($scope.emptyHeart) {
//				$scope.fullHeart = true;
//				$scope.emptyHeart = false;
//			}
			
//			$scope.favorited = $index;
			
//			if($scope.heart === 'fas') {
//				$scope.heart = 'far';
//			} else {
//				$scope.heart = 'fas';
//			}
		}
	}
);

