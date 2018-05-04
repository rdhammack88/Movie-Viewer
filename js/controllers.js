var movieControllers = angular.module('movieControllers', []);

movieControllers.controller('MovieSearchController', 
	function MovieController($scope, $http) {

		$scope.findMovie = function() {
			$http({
				method: 'GET',
				url: 'http://www.omdbapi.com/?apikey=a336cd51&s=' + $scope.movieQuery
			}).then(function(res) {
				$scope.movies = res.data.Search;
				console.log($scope.movies);
				console.log($scope.movieQuery);
	//			$scope.movieID = movie.imdbID.toString();
			});
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
	function MovieController($scope, $http) {
		$http({
			method: 'GET',
			url: 'http://www.omdbapi.com/?apikey=a336cd51&i=tt1436480'
		}).then(function(res) {
			$scope.movie = res.data;
			$scope.movieType = movie.Type[0].toUpperCase() + movie.Type.substr(1);
			$scope.movieTitle = movie.Title;
			$scope.moviePoster = movie.Poster;
			$scope.movieGenre = movie.Genre;
			$scope.movieReleaseDate = movie.Released;
			$scope.movieRating = movie.Rated;
			$scope.movieRuntime = movie.Runtime;
			$scope.movieImdbRating = movie.imdbRating;
			$scope.movieDirector = movie.Director;
			$scope.movieWriter = movie.Writer;
			$scope.movieActors = movie.Actors;
			$scope.moviePlot = movie.Plot;
			$scope.movieImdbLink = 'http://imdb.com/title/' + movie.imdbID;
		});
	}
);

