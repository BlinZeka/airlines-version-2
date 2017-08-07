var gulp= require('gulp');

var uglify=require('gulp-uglify');
var concat=require('gulp-concat');
var gulpCss=require('gulp-minify-css');


gulp.task('cd',function()
{
	// gulp.src('frontend/javascript/modules/*.js')
	// 		.pipe(uglify())
	// 		.pipe(concat('script1.js'))
	// 		.pipe(gulp.dest('frontend/bulid'))
	console.log("eee");
});cd

// gulp.task('sass',function()
// {
// 	return gulp.src('ARV_Beta/scss/style.scss')
// 			.pipe(sass())
// 			.pipe(gulp.dest('ARV_Beta/css'))
// }
// );

// gulp.task('sass',function()
// {
// 	return gulp.src('ARV_Beta/scss/style.scss')
// 			.pipe(sass())
// 			.pipe(gulp.dest('ARV_Beta/css'))
// }
// );


// gulp.task('default',function (callback) {
// 	runSequence(['scripts'],callback)

// });
