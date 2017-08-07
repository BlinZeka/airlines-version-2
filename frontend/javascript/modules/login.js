 angular.module("Task.login",['ngRoute'])

.config(['$routeProvider',function($routeProvider){
	$routeProvider.
		when('/login',{
			templateUrl:"frontend/views/Login.php",
			controller:"LogInCtrl"
		});
}])

.controller('LogInCtrl',['$scope','$http','ParamsFrom_Home',function ($scope,$http,ParamsFrom_Home){  

	$scope.showLogOut=true;

	console.log($scope.showLogOut);

	$scope.btnLogin=function()
	{
		// console.log(12);
		// $scope.showLogOut=true;
		// console.log($scope.showLogOut);

		$http({
			method: 'GET', //CHANGE THIS FROM GET TO POST
			url: 'Database/Function.php?f=getUser',
			params: { userN : $scope.username , passW:$scope.password }, //USE PROPER JAVASRIPT OBJECTS

			headers: {'Content-Type': 'application/x-www-form-urlencoded'}

			}).then(function (response) 
			{
				if(response.data == false)
				{
					//sweet alert warning ->you heve fill in wrong way fields
				}
				else
				{
					//send to home 
				}
			   console.log(response.data);
			
			})
	}
  
    
}]);