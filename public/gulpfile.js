var gulp = require('gulp');
var less = require('gulp-less');
var minifiycss = require('gulp-minify-css');
var rename = require('gulp-rename');
var path = require('path');


gulp.task('styles', function() {
    gulp.src(['ecomm/css/*.css'])
    .pipe(minifiycss())
    .pipe(rename('styles.css'))
    .pipe(gulp.dest('dist/css'));

});


gulp.task('images', function() {

    gulp.src(['ecomm/images/*'])
    .pipe(gulp.dest('dist/images'));
});

gulp.task('scripts', function() {

    gulp.src([
        'ecomm/js/jquery-1.9.0.min.js',
        'ecomm/js/jquery.openCarousel.js',
        'ecomm/js/easin.js',
        'ecomm/js/move-top.js'
        ])
    .pipe(rename('scripts.js'))
    .pipe(gulp.dest('dist/js'));
});

gulp.task('default', ['styles', 'images'], function() {

    gulp.watch(['ecomm/'], function() {
        gulp.run(['styles', 'images']);
    });
});

