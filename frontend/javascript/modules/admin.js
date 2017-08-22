 angular.module("Task.admin",['ngRoute'])

.config(['$routeProvider',function($routeProvider){
	$routeProvider.
		when('/admin',{
			templateUrl:"frontend/views/admin/admin.php",
			controller:"AdminIndexCtrl"
		});
}])
.animation('.slide-animation', function () {
        return {
            beforeAddClass: function (element, className, done) {
                var scope = element.scope();

                if (className == 'ng-hide') {
                    var finishPoint = element.parent().width();
                    if(scope.direction !== 'right') {
                        finishPoint = -finishPoint;
                    }
                    TweenMax.to(element, 0.5, {left: finishPoint, onComplete: done });
                }
                else {
                    done();
                }
            },
            removeClass: function (element, className, done) {
                var scope = element.scope();

                if (className == 'ng-hide') {
                    element.removeClass('ng-hide');

                    var startPoint = element.parent().width();
                    if(scope.direction === 'right') {
                        startPoint = -startPoint;
                    }

                    TweenMax.fromTo(element, 0.5, { left: startPoint }, {left: 0, onComplete: done });
                }
                else {
                    done();
                }
            }
        };
    })



.controller('AdminIndexCtrl',['$scope',function($scope){
	$scope.slides = [
            {image: 'http://legacy.clutterfairyhouston.com/wp-content/uploads/2013/08/Depositphotos_25224381-dry-erase-board-to-do-list-everything-frown-face-1024x1024.jpg', description: 'Image 00'},
            {image: 'https://jobs.viktre.com/wp-content/uploads/2017/05/Task-Management.jpg',description: 'Image 01'},
            {image: 'https://i2.wp.com/mobtreal.com/wp-content/uploads/2017/06/1-1.jpg?resize=400%2C250', description: 'Image 02'},
            {image: 'https://us.123rf.com/450wm/faithie/faithie1505/faithie150502627/40358108-organizing-and-collaborating-laptops-and-office-objects-on-shared-desk.jpg?ver=6', description: 'Image 03'},
            {image: 'http://organize365.com/wp-content/uploads/2016/01/conversational-task-clips.jpg', description: 'Image 04'}
        ];

        $scope.direction = 'left';
        $scope.currentIndex = 0;

        $scope.setCurrentSlideIndex = function (index) {
            $scope.direction = (index > $scope.currentIndex) ? 'left' : 'right';
            $scope.currentIndex = index;
        };

        $scope.isCurrentSlideIndex = function (index) {
            return $scope.currentIndex === index;
        };

        $scope.prevSlide = function () {
            $scope.direction = 'left';
            $scope.currentIndex = ($scope.currentIndex < $scope.slides.length - 1) ? ++$scope.currentIndex : 0;

        };

        $scope.nextSlide = function () {
            $scope.direction = 'right';
            $scope.currentIndex = ($scope.currentIndex > 0) ? --$scope.currentIndex : $scope.slides.length - 1;


        };

       
        	$scope.prevSlide();
        

}]);
