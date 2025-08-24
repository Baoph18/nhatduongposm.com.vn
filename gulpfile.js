var gulp = require('gulp');
var bulkSass = require('gulp-sass-bulk-import');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var notify  = require('gulp-notify');
var uglify = require("gulp-uglify");
var rename = require('gulp-rename');
// New Module
var newer = require('gulp-newer');
//New connect
var browserSync = require("browser-sync");
var gulpRanInThisFolder = process.cwd();
var res = gulpRanInThisFolder.split("/");
var ProjectName = res[res.length - 1];
// url  = "longvn.test/"+ProjectName+"";
url  = "http://localhost/"+ProjectName+"";
var sourcemaps = require('gulp-sourcemaps')
// :nested
// :compact
// :expanded
// :compressed

// Common Settings
// ---------------------------------------------------------------------------
var srcDir = 'assets/';
// var srcDir = 'dist/';

gulp.task('sass', ['sass_common']);
gulp.task('sass_common', function () {
  return gulp.src([srcDir + 'css/style.scss'])
    .pipe(bulkSass())
    .pipe(sourcemaps.init())
    .pipe(sass({
      outputStyle: 'compressed',
      errLogToConsole: false,
      includePaths: [ srcDir, 'mod/' ],
    }))
    .on('error', function(err) {
      notify().write(err);
      this.emit('end');
    })
    .pipe(rename({suffix: ''}))
    .pipe(sourcemaps.write('/maps'))
    .pipe(gulp.dest( srcDir + 'css'))
    .pipe(browserSync.reload({
      stream: true
  }));
})



gulp.task('reload', function (){
  browserSync.reload();
});
gulp.task('reload_stream', function (){
  browserSync.reload({
    stream: true
  });
});

gulp.task('browser-sync', function() {
  var files = [
    '**/*.html',
    '**/*.{png,jpg,gif}'
  ];
  browserSync.init(files, {
    // Read here http://www.browsersync.io/docs/options/
    host: url,
    proxy: url,
    port: 10001,
    notify: false,
    open: 'external',
    // Inject CSS changes
    injectChanges: true,
    // Open the site in Chrome
  });
});
gulp.task('build', [
  'sass',
]);
gulp.task('watch', function () {
  gulp.watch(srcDir + "css/*.scss",["sass"]); //run compass
  gulp.watch(srcDir + "js/**/*.js",["js"]); //run compass
  gulp.watch(['**/*.css'], ["reload_stream"]);
  gulp.watch(['**/*.html'], ["reload"]);
});
gulp.task('watch', function () {
  gulp.watch(srcDir + "css/*.scss",["sass"]); //run compass
});

gulp.task('default', [ 'build', 'watch','browser-sync' ]);
