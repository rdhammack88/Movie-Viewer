var movieApp = angular.module('movieApp', ['ngRoute', 'movieControllers']);

movieApp.config(['$routeProvider', function($routeProvider) {
	$routeProvider.when('/', {
		templateUrl: 'js/partials/search_page.php',
		controller: 'MovieSearchController'
	})
	.when('/movie/:movieId', {
		templateUrl: 'js/partials/movie_details.php',
		controller: 'MovieDetailsController'
	})
}]);


//$(document).ready(function() {
//	$('#searchForm').on('submit', function(e) {
//		var searchText = $('#searchText').val();
//		getMovies(searchText);
//		e.preventDefault();
//	});
//	
//	var searchQuery = sessionStorage.getItem('searchQuery');
//	console.log(searchQuery);
//});
//
//function getMovies(searchText) {
//	console.log(searchText);
//	$.ajax({
//		method: 'GET',
//		url: 'http://www.omdbapi.com/?apikey=a336cd51&s=' + searchText,
//		success: function(res) {
//			var movies = res.Search;
//			var output = '';
//			$.each(movies, function(index, movie) {
//				var movieID = movie.imdbID.toString();
//				if(movie.Poster !== "N/A") {
//					output += '<div class="col-md-4 col-lg-3 col-sm-6 offset-sm-3';
//					if(index >= 1) {
////						output += ' order-md-4';
//					}					
//					output += '"><div class="well text-center"><img src="' + movie.Poster + '"><div class="details"><h5>' + movie.Title + '</h5><p class="details-btn"><a onclick="movieSelected(\'' + movieID + '\')" class="btn btn-primary" href="#">Movie Details</a></p></div></div></div>';
////					console.log(movie.Poster);
//					console.log(index);
//				} //<p class="text-center genre">' + movie.Type + '</p>
//			});
//			$('#movies').html(output);
//		}
//	})
//}
//
//
//function movieSelected(id) {
//	var searchText = $('#searchText').val();
//	sessionStorage.setItem('movieId', id);
//	sessionStorage.setItem('searchQuery', searchText);
//	window.location = 'movie.php';
//	return false;
//}
//
//function getMovie() {
//	var movieId = sessionStorage.getItem('movieId');
//	
//	$.ajax({
//		method: 'GET',
//		url: 'http://www.omdbapi.com/?apikey=a336cd51&i=' + movieId,
//		success: function(res) {
//			var movie = res;
//			var movieType = movie.Type[0].toUpperCase() + movie.Type.substr(1);
//			$('.movie-title').text(movie.Title);
//			$('.movie-poster').attr('src', movie.Poster);
//			$('.movie-genre').append(movie.Genre);
//			$('.movie-released').append(movie.Released);
//			$('.movie-rated').append(movie.Rated);
//			$('.movie-type').append(movieType);
//			$('.movie-runtime').append(movie.Runtime);
//			$('.movie-imdb-rating').append(movie.imdbRating);
//			$('.movie-director').append(movie.Director);
//			$('.movie-writer').append(movie.Writer);
//			$('.movie-actor-list').append(movie.Actors);
//			$('.movie-plot').append(movie.Plot);
//			$('.movie-imdb').attr('href', 'http://imdb.com/title/' + movie.imdbID);
//		}
//	});
//}

// http://www.omdbapi.com?
//	http://img.omdbapi.com/?apikey=a336cd51&