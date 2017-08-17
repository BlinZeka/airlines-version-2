 angular.module("Task.signup",['ngRoute'])

.config(['$routeProvider',function($routeProvider){
	$routeProvider.
		when('/signup',{
			templateUrl:"frontend/views/signup.php",
			controller:"SignUpCtrl"
		});
}])

.controller('SignUpCtrl',['$scope','$http','$location','ParamsFrom_Home',function($scope,$http,$location,ParamsFrom_Home){

	var a=ParamsFrom_Home.getProperty();
	console.log(a);
	$scope.signup=function(params)
	{
		// console.log(params.password.length);
		$scope.validPassword="";
		
		if (!(params) || !(params.username) || !(params.password) || !(params.ConfirmPassword))
		{
			
			swal(
  				'Please fill all inputs!',
  				'',
  				'warning'
			)
			
		}
		else if(params.password.length < 8)
			{
				$scope.validPassword="Password should have more then 8 characters!";			
			}

		else if(params.password != params.ConfirmPassword)
			{
				$scope.validConfPassword="Confirm password is not the same thet password !";
			}

		else
		{
			

			swal(
	  			'Success you join as User!',
	  			'',
	  			'success'
				)

			$http({
				method:'POST', //CHANGE THIS FROM GET TO POST
				url: 'Database/Function.php?f=addUser',
				params: { username:params.username, password:params.password }, //USE PROPER JAVASRIPT OBJECTS

				headers: {'Content-Type': 'application/x-www-form-urlencoded'}

				}).then(function (response) 
				{
				    
				})

				
				$location.path('/home');
		}
			
	}


}])