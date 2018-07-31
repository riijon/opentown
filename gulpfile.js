var gulp = require("gulp");
var sass = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");
var browserSync = require("browser-sync");
// var frontnote = require("gulp-frontnote");
var uglify = require("gulp-uglify");
var plumber = require("gulp-plumber");

gulp.task("sass", function () {
  gulp.src("dist/assets/sass/**/*scss")
      .pipe(plumber())
      .pipe(sass())
      .pipe(autoprefixer())
      .pipe(gulp.dest("dist/assets/css"));
});

gulp.task("js", function () {
  gulp.src(["dist/assets/js/**/*.js", "!dist/assets/js/min/**/*.js"])
      .pipe(plumber())
      .pipe(uglify())
      .pipe(gulp.dest("dist/assets/js/min"));
});

gulp.task("default", function () {
  gulp.watch('./dist/assets/sass/**/*.scss', ['sass']);
});
