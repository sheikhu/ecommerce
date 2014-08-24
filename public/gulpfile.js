var gulp = require('gulp');
var less = require('gulp-less');
var minifiycss = require('gulp-minify-css');
var rename = require('gulp-rename');
var path = require('path');


gulp.task('less', function() {
    gulp.src(['./sandstone/bootstrap.less'])

    .pipe(less())
    .pipe(minifiycss())
    .pipe(rename('styles.css'))
    .pipe(gulp.dest('dist/css'));

});


gulp.task('images', function() {

    gulp.src(['images/*'])
    .pipe(gulp.dest('dist/images'));
});

gulp.task('default', ['less', 'images'], function() {

    gulp.watch(['vendor/**/*.less', './sandstone/*.less'], function() {
        gulp.run('less');
    });
});

