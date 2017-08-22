 angular.module("Task.login",['ngRoute'])

.config(['$routeProvider',function($routeProvider){
	$routeProvider.
		when('/login',{
			templateUrl:"frontend/views/Login.php",
			controller:"LogInCtrl"
		})
		
}])



.directive( 'goClick', function ( $location ) {
  return function ( scope, element, attrs ) {
    var path;

    attrs.$observe( 'goClick', function (val) {
      path = val;
    });

    element.bind( 'click', function () {
      scope.$apply( function () {
        $location.path( path );
      });
    });
  };
})

.service('SRV_app_signup', function () {

        var param = '';

        return {
            getPOne: function () {
                return param;
            },
            setPOne: function(value) {
                param = value;
                return param;
                
            }
        };
    })

.controller('LogInCtrl',['$scope','$http','$location',function ($scope,$http,$location){  
    
}])

.controller('SignUpCtrl',['$scope','$http','$location','SRV_app_signup',function($scope,$http,$location,SRV_app_signup){

}])

.controller('appCTRL',['$scope','$http','$location','SRV_app_signup',function ($scope,$http,$location,SRV_app_signup){

		$scope.showLogOut = false;
		$scope.showFrmLogin=true;
		$scope.showFooter=false;

			var a="";
	
	$scope.signup=function(params)
	{
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
				$scope.error="Password should have more then 8 characters!";			
			}

		else if(params.password != params.ConfirmPassword)
			{
				$scope.error="Confirm password is not the same thet password !";
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

				var a=SRV_app_signup.setPOne('ShowInputForUser');
				$location.path('/home');
				$scope.showLogOut = true;
				$scope.showFooter=true;

		}
			
	}

	$scope.showLogin=function()
	{
		$scope.showFrmSignup=false;
		$scope.showFrmLogin=true;
		$scope.showFooter=false;
	}

	$scope.showSignupFrm=function()
	{

		$scope.showFrmSignup=true;
		$scope.showFrmLogin=false;
		$scope.showFooter=false;
	}
	// 

	$scope.btnLogin1=function(params)
	{
	

	 		$http({
			method: 'POST', //CHANGE THIS FROM GET TO POST
			url: 'Database/Function.php?f=getUser',
			params: { userN : params.Username , passW:params.Password }, //USE PROPER JAVASRIPT OBJECTS

			headers: {'Content-Type': 'application/x-www-form-urlencoded'}

			}).then(function (response) 
			{
				if(response.data.length== 1)
				{
					//sweet alert warning ->you heve fill in wrong way fields

						$scope.showLogOut = true;

						if(response.data["0"].role_user == 'Admin'){
							$scope.admin = true;
						}

					$location.path('/home');

				}
				else
				{
						swal('Wrong this user not exist!');

				}

				 $scope.showFooter=true;
			
			})
	}

	$scope.LogOut=function()
	{
		$scope.showLogOut=false;

		$scope.showFrmSignup=false;
		$scope.showFrmLogin=true;
		$scope.showFooter=false;
		location.reload();
	}


}]);