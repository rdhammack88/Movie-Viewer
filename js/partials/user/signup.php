<div class="container-fluid">
	<form ng-submit="userSignup()">
		<fieldset>
			<div class="form-group">
				<label for="InputName">Name</label>
				<input type="text" class="form-control" id="InputName" placeholder="Enter name" ng-model="userName" name="user_name">
			</div>
			<div class="form-group">
				<label for="InputEmail1">Email address</label>
				<input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email" ng-model="userEmail" value="{{userEmail}}" name="user_email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
				<label for="InputPassword1">Password</label>
				<input type="password" class="form-control" id="InputPassword1" placeholder="Password" ng-model="userPassword" value="{{userPw}}" name="user_pw">
			</div>			
			<div class="form-group">
				<label for="RetypeInputPassword1">Retype Password</label>
				<input type="password" class="form-control" id="RetypeInputPassword1" placeholder="Retype Password" ng-model="userPasswordRepeat" value="{{userPwRepeat}}" name="user_pw_repeat">
			</div>
			<div class="form-group">
				<input type="submit" name="signup" value="Signup" class="btn btn-success">
			</div>
		</fieldset>
	</form>
</div>