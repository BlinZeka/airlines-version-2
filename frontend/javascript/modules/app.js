 angular.module("Task",['ngRoute','Task.home','Task.login','Task.admin'])

.config(['$routeProvider',function($routeProvider){
    $routeProvider.otherwise({redirectTo:"/login"})
}]);
