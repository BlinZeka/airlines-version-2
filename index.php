<!DOCTYPE html>
<html  >
<head>

    <!-- CSS (load bootstrap) -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <style>
        .navbar { border-radius:0; }
        input {
            text-align: center;
        }
    </style>

    <link rel="stylesheet" href="../frontend/css/main.css">
    <!-- JS (load angular, ui-router, and our custom js file) -->
    <!--  <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.8/angular-ui-router.min.js"></script> -->

    <script src="//cdn.jsdelivr.net/hammerjs/2.0.4/hammer.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-route.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.8/angular-animate.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.8/angular-aria.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> -->
    <script src="../node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.css">
    <link rel="stylesheet" href="https://rawgit.com/angular/bower-material/master/angular-material.min.css">


    
</head>
<!-- apply our angular app to our site -->
<body ng-app="Task" >

<!-- NAVIGATION -->
<nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="#/index">AngularUI Router</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="#/home">Home</a></li>
        <li><a href="#/admin">Admin View</a></li>
    </ul>
    <ul class="nav navbar-nav" style="float: right;">
        <li ><a href="#/login">Log in</a></li>
        <li ng-show="showLogOut"><a href="#/logout">Log out</a></li>
    </ul>
</nav>

<!-- MAIN CONTENT -->
<!-- THIS IS WHERE WE WILL INJECT OUR CONTENT ============================== -->
<div class="container" >
    <div ng-view >

    </div>
</div>



<div class="text-center">
    <p>A tutorial by <a href="http://scotch.io" target="_blank">scotch.io</a></p>
    <p>View the tutorial: <a href="http://scotch.io/tutorials/javascript/angular-routing-using-ui-router" target="_blank">AngularJS Routing using UI-Router</a></p>
</div>

<script src="../frontend/javascript/modules/app.js"></script>
<script src="../frontend/javascript/modules/home.js"></script>
<script src="../frontend/javascript/modules/login.js"></script>   
<script src="../frontend/javascript/modules/admin.js"></script>  
    
</body>
</html>
