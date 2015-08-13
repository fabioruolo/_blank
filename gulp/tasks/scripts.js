var config = require('../config');
var gulp = require('gulp');
var plugins = require('gulp-load-plugins')();
var browserify = require('browserify');
var babelify = require('babelify');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');

// dev: source maps, debug
gulp.task('js-dev', function () {
  return browserify(config.index.js, { debug: true })
    .transform(babelify.configure({
      sourceMaps: true
    }))
    .bundle()
    .pipe(source('index.js'))
    .pipe(buffer())
    .pipe(gulp.dest(config.dir.dist));
});

// prd: uglified
gulp.task('js-prd', function () {
  return browserify(config.index.js)
    .transform(babelify)
    .bundle()
    .pipe(source('index.js'))
    .pipe(buffer())
    .pipe(plugins.uglify())
    .pipe(gulp.dest(config.dir.dist));
});
