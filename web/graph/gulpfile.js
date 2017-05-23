var gulp = require('gulp'),
  sass = require('gulp-sass'),
  postcss = require('gulp-postcss'),
  scssSyntax = require('postcss-scss'),
  stylelint = require('stylelint'),
  autoprefixer = require('autoprefixer'),
  cssnano = require('cssnano'),
  sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

//configs 

var nanoConfig = {
  safe:false,
  autoprefixer: false
};
var autoprefixerConfig = { browsers: ['> 1%', 'last 3 versions', 'Android >= 4', 'iOS >= 7'] };

gulp.task('server', function() {
  browserSync.init({
    server: './'
  })
});

// Styles
gulp.task('sass', function () {

  var preTransformations = [
    stylelint()
  ];
  var postTransformations = [
    autoprefixer(autoprefixerConfig),
    cssnano(nanoConfig)
  ];

  gulp.src('./src/scss/main.scss')
    .pipe(postcss(preTransformations, {syntax:scssSyntax}))
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(postcss(postTransformations))
    .pipe(sourcemaps.write('.'))//this path is relative to the outputed css file
    .pipe(gulp.dest('dist/css'))
    .pipe(browserSync.stream())
});

// Watch task
gulp.task('default', ['server'], function() {
  // run task initially, after that watch
  gulp.start('sass');
  gulp.watch('./src/scss/**/*.scss', ['sass']);
  gulp.watch('*.html').on('change', reload);
});

// Add a "help" task to output the available tasks
gulp.task('help', require('gulp-task-listing'));