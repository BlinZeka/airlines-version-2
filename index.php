<!DOCTYPE html>
<html>
<head>

    <!-- CSS (load bootstrap) -->
    <link rel="stylesheet" href="script.css">
    <style>
        .navbar { border-radius:0; }
    </style>

    <script src="script.js"></script>


</head>

<!-- apply our angular app to our site -->
<body ng-app="routerApp">

<!-- NAVIGATION -->
<nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" ui-sref="#">AngularUI Router</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a ui-sref="home">Home</a></li>
        <li><a ui-sref="admin-fluturimet">Admin View</a></li>
    </ul>
</nav>

<!-- MAIN CONTENT -->
<!-- THIS IS WHERE WE WILL INJECT OUR CONTENT ============================== -->
<div class="container">
    <div ui-view></div>
</div>

<div class="text-center">
    <p>A tutorial by <a href="http://scotch.io" target="_blank">scotch.io</a></p>
    <p>View the tutorial: <a href="http://scotch.io/tutorials/javascript/angular-routing-using-ui-router" target="_blank">AngularJS Routing using UI-Router</a></p>
</div>

</body>
</html>
