var gulp = require('gulp');
var less = require('gulp-less');
var minifiycss = require('gulp-minify-css');
var rename = require('gulp-rename');
var path = require('path');


gulp.task('less', function() {
    gulp.src(['./sandstone/bootstrap.less'])

    .pipe(less({
      paths: [ path.join(__dirname, 'vendor/bootstrap', 'less') ]
    }))
    .pipe(minifiycss())
    .pipe(rename('styles.css'))
    .pipe(gulp.dest('dist'));

});

gulp.task('default', ['less'], function() {

    gulp.watch(['vendor/**/*.less', './sandstone/*.less'], function() {
        gulp.run('less');
    });
});

