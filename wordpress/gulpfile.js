var gulp = require("gulp");
var sass = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");
var browserSync = require("browser-sync");
// var frontnote = require("gulp-frontnote");
var uglify = require("gulp-uglify");
var plumber = require("gulp-plumber");

gulp.task("sass", function () {
  gulp.src("wp-content/themes/opentown/assets/sass/**/*scss")
      .pipe(plumber())
      .pipe(sass())
      .pipe(autoprefixer())
      .pipe(gulp.dest("wp-content/themes/opentown/assets/css"));
});

gulp.task("js", function () {
  gulp.src(["wp-content/themes/opentown/assets/js/**/*.js", "!wp-content/themes/opentown/assets/js/min/**/*.js"])
      .pipe(plumber())
      .pipe(uglify())
      .pipe(gulp.dest("wp-content/themes/opentown/assets/js/min"));
});

gulp.task('browserSync', function () {
    browserSync({
        proxy: 'localhost',
        files: [
            "wp-content/themes/opentown/assets/css/**/*.css",
            "wp-content/themes/opentown/assets/js/**/*.js",
            "./**/*.php"
        ]
    });
});

gulp.task('watch', function () {
    gulp.watch('./wp-content/themes/opentown/assets/sass/**/*.scss', ['sass']);
});

gulp.task("default", ['browserSync', 'sass', 'watch']);
