(function() {
	var app = angular.module("movieApp");
	
	var SignupController = function($scope, $http,  $log, omdb) {
		$scope.userName;
		$scope.userEmail;
		$scope.userPw;
		$scope.userPwRepeat;
//		{name: name}
		
		
		$scope.userSignup = function() {
			
			console.log($scope.userName);
//			$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
//			$http.post('./includes/admin/user_signup.php', {'user_name': $scope.userName})
//				.then(function(res) {
//					console.log( res.data );
////					console.log(name);
//				});
			
//			{user_name: $scope.userName},
//			'user_name=' + $scope.userName + '&user_email=' + $scope.userEmail,
			
//			let user_name = $scope.userName;
//			let user_email = $scope.userEmail;
			var qdata = {user_name: 'user_name'};
			//, user_email: 'user_email'};
			
//			$http.post('./includes/admin/user_signup.php', qdata)
//				.then(function(data, status, headers, config) {
//					console.log( headers );
////					console.log(name);
//				});
			
			$http({
				method: 'POST',
				url: './includes/admin/user_signup.php',
//				dataType: 'json',
				data: qdata,
				headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			})
			.then(function(res) {
				console.log( res.data );
//					console.log(name);
			});
		}
		
	}
	
	app.controller("SignupController", SignupController);
	
})();