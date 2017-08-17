<div class="frmLogin" ng-show="showFrmLogin">
  <h2>Log in to Task</h2>	
  <form ng-submit="btnLogin1(user)">
    <label >Username</label><br>
    <input class="txtInputLogin" type="text" id="fname" placeholder="Username" ng-model="user.Username" ><br>

    <label >Password</label><br>
    <input class="txtInputLogin" type="password" id="lname" placeholder="Password" ng-model="user.Password"><br>
    <input   class="btnLogIn" type="submit"  value="Submit">
 <!-- 	 <input  class="btnLogIn" type="submit" value="Submit"> -->
  </form><br>

  <label>New to Task ? <button ng-click="showSignupFrm()" class="signup btn"> Sign up new</button></label>
</div>

<div class="frmsigup" ng-show="showFrmSignup">
	<h2>Join Task today.</h2>
	<form ng-submit="signup(user)">
		<input type="text" class="txtInputLogin" placeholder="Username" ng-model="user.username"><br>

		<input type="password" class="txtInputLogin" placeholder="Password" ng-model="user.password" ><br> 
		<input type="password" class="txtInputLogin" placeholder="Confirm Password" ng-model="user.ConfirmPassword"><br><span ng-model="error">{{error}}</span>
		<br> 

		<input class="btnSingup" type="submit" name="submit" value="Sign up" >
	</form>
</div>