(function() {
	var app = angular.module("movieApp");
	
	var LoginController = function($scope, $http,  $log, om) {
		
		$scope.userEmail;
		$scope.userPw;		
		
		$http.get('./includes/admin/login.php');
	}
	
	app.controller("LoginController", LoginController);
	
})();