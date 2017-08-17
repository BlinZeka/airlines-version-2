<div class="frmsigup">
	<h2>Join Task today.</h2>
	<form ng-submit="signup(user)">
		<input type="text" class="signupInput" placeholder="Username" ng-model="user.username">

		<input type="password" class="txtInputLogin" placeholder="Password" ng-model="user.password" > <span ng-model="validPassword">{{validPassword}}</span> 
		<input type="password" class="signupInput" placeholder="Confirm Password" ng-model="user.ConfirmPassword"><p ng-model="validConfPassword">{{validConfPassword}}</p>

		<input class="btnSingup" type="submit" name="submit" value="Sign up" >
	</form>
</div>