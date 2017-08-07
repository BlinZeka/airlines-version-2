<div class="frmLogin" ng-controller="LogInCtrl">
  <h3>Log in to Task</h3>	
  <form ng-submit="btnLogin(user)">
    <label >Username</label><br>
    <input class="txtInputLogin" type="text" id="fname"	name="firstname" placeholder="Username" ng-model="username"><br>

    <label >Password</label><br>
    <input class="txtInputLogin" type="text" id="lname" name="lastname" placeholder="Password" ng-model="password"><br>
    <input class="btnLogIn" type="submit" value="Submit">
  </form>
</div>