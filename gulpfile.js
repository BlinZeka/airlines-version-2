var gulp= require('gulp');
var uglify=require('gulp-uglify');
var concat=require('gulp-concat');
var minifyCss=require('gulp-minify-css');
var browserSync= require('browser-sync').create();
var php = require('gulp-connect-php');

var reload=browserSync.reload;


gulp.task('php', function () {
	php.server({
		base: './',
		port: 88,
		keepalive: true
	})
});


gulp.task('serve',['minify-app-css', 'php'],function()
{
	browserSync.init({
					host:'localhost',
					proxy:'127.0.0.1:88',
					port:88,
					open:true
				});

	//If CSS file change
	gulp.watch('frontend/css/*.css',['minify-app-css']);
    gulp.watch('frontend/css/*.css').on('change', reload);

	// If JS file change->this part not work
    gulp.watch('frontend/javascript/modules/*.js',['minify-app-js']);
    gulp.watch('frontend/javascript/modules/*.js').on('change', reload);
    
	//If PHP file change


});


gulp.task('minify-app-js',function()
{
	gulp.src('frontend/javascript/modules/*.js')
			.pipe(uglify())
			.pipe(concat('script_app.js'))
			.pipe(gulp.dest('frontend/build'))
			.pipe(browserSync.reload({stream:true}));
	
});

gulp.task('minify-app-css',function()
{
	 gulp.src('frontend/css/*.css')
			.pipe(minifyCss())
			.pipe(concat('script_app.css'))
			.pipe(gulp.dest('frontend/build'))
			.pipe(browserSync.reload({stream:true}));

});


gulp.task('minify-build-js',function()
{
	gulp.src(['bower_components/jquery/dist/jquery.min.js',
			  'bower_components/bootstrap/dist/js/bootstrap.min.js',
			  'bower_components/angular/angular.min.js',
			  'bower_components/angular-route/angular-route.js',
			  'bower_components/angular-animate/angular-animate.min.js',
			  'bower_components/angular-aria/angular-aria.min.js',
			  'node_modules/sweetalert2/dist/sweetalert2.min.js'])
			.pipe(uglify())
			.pipe(concat('script_build.js'))
			.pipe(gulp.dest('frontend/build'))
	
});


gulp.task('minify-build-css',function()
{
	 gulp.src(['node_modules/sweetalert2/dist/sweetalert2.css',
	 		'bower_components/bootstrap/dist/css/bootstrap.min.css'])
			.pipe(minifyCss())
			.pipe(concat('script_build.css'))
			.pipe(gulp.dest('frontend/build'))
});


gulp.task('watchChange',function()
{
	 gulp.watch('frontend/css/*.css',['minify-app-css']);
	 gulp.watch('frontend/javascript/modules/*.js',['minify-app-js']);
});

gulp.task('default',['serve']);
