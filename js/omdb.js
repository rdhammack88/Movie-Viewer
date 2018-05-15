(function() {
	var omdb = function($http) {
		
		var getMovie = function(movie, pageNumber) {
			return $http.get('https://www.omdbapi.com/?apikey=a336cd51&s=' + movie + '&page=' + pageNumber)
						.then(function(res) {
							return res.data;
						});
		};
				
		var getMovieDetails = function(movieId) {
			return $http.get('https://www.omdbapi.com/?apikey=a336cd51&i=' + movieId)
						.then(function(res) {
							return res.data;
						})
		}
		
		return {
			getMovie: getMovie,
			getMovieDetails: getMovieDetails
		};		
	};
	
	var module = angular.module("movieApp");
	module.factory("omdb", omdb);	
}());