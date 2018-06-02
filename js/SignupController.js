(function() {
	var app = angular.module("movieApp");
	
	var SignupController = function($scope, $http,  $log, omdb) {
		$scope.userName;
		$scope.userEmail;
		$scope.userPw;
		$scope.userPwRepeat;
		
		$scope.userSignup = function() {
			$http.get('./includes/admin/user_signup.php')
				.then(function(res) {
					console.log( res.data );
				});
		}
		
	}
	
	app.controller("SignupController", SignupController);
	
})();