// Gulp Addons
const gulp = require("gulp"),
  clean = require('gulp-clean'),
  concat = require('gulp-concat'),
  uglify = require('gulp-uglify'),
  uglifycss = require('gulp-uglifycss'),
  gutil = require('gulp-util'),
  remoteSrc = require('gulp-remote-src')
;


/* =============================================================================
    Obliterate ./assets/bundles folder.
============================================================================= */
gulp.task("clean", function () {
  return gulp.src("./assets/bundles", {read: false})
    .pipe(clean());
});


/* =============================================================================
    CSS Files
============================================================================= */
gulp.task("styles", function() {
  remoteSrc(
    [
      // Web Fonts
      "https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic",
      "https://fonts.googleapis.com/css?family=Calibri:700,400,300",
      "https://fonts.googleapis.com/css?family=Open+Sans",

      // Bootstrap core CSS
      "https://d1qlu92qlflogk.cloudfront.net/template-durendal/bootstrap/css/bootstrap.css"
    ], { base: null }
  )
  .pipe(concat("styles.min.css"))
  .pipe(uglifycss({
    "maxLineLen": 80,
    "uglyComments": true
  })) // uglifycss
  .pipe(gulp.dest("./assets/bundles/"))
;});


/* =============================================================================
    JavaScript files placed at the end of the document so the pages load faster
============================================================================= */
gulp.task("scripts", function() {
  remoteSrc(
    [
      // Jquery and Bootstap core js files
      "https://d1qlu92qlflogk.cloudfront.net/template-durendal/bootstrap/js/bootstrap.js"
    ], { base: null }
  )
  .pipe(concat("scripts.min.js"))
  .pipe(uglify().on("error", gutil.log))
  .pipe(gulp.dest("./assets/bundles/"))
;});


/* =============================================================================
    Update S3 Assets
============================================================================= */
// Disabled since this a public repository.  Copy output to S3.


/* =============================================================================
    Start Tasks
============================================================================= */
gulp.task('default', [], function() {
  gulp.start("clean", "styles", "scripts");
});
