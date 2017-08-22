<!DOCTYPE html>
<html  ng-app="Task"  >
<head>

    <script src="../frontend/build/script_build.js"></script> 
    <link rel="stylesheet" href="../frontend/build/script_app.css">
    <link rel="stylesheet" href="../frontend/build/script_build.css">
    <script src="../frontend/build/script_app.js"></script>  
    
</head>
<!-- apply our angular app to our site -->
<body  ng-controller="appCTRL" class="body">

<!-- NAVIGATION -->
<nav class="navbar menubar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Task</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="menuItem"><a ng-if="showLogOut" href="#!/home">Home</a></li>
        <li class="menuItem"><a ng-if="admin && showLogOut" href="#!/admin">Admin View</a></li>

        <li class="dropdown menuItem">
          <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action1</a></li>
            <li><a href="#">Action2</a></li>
            <li><a href="#">Action3</a></li>
            <li class="divider"></li>
            <li><a href="#">Action4</a></li>
            <li class="divider"></li>
            <li><a href="#">Action5</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li ng-if="!(showLogOut)"><a href="#/login" ng-click="showLogin()">Log in</a></li>
        <li ng-if="showLogOut" ng-click="LogOut()" ><a href="#/login">Log out</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- MAIN CONTENT -->
<div class="container" >
    <div ng-view >

    </div>
</div>



<footer ng-show="showFooter">
    <p>A tutorial by <a href="http://scotch.io" target="_blank">scotch.io</a></p>
    <p>View the tutorial: <a href="http://scotch.io/tutorials/javascript/angular-routing-using-ui-router" target="_blank">AngularJS Routing using UI-Router</a></p>
</footer>


    
</body>
</html>
