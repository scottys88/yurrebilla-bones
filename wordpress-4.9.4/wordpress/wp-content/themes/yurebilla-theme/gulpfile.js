var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');

// Init Browser-Sync
gulp.task('browser-sync', function() {

    browserSync.init({
      proxy: "http://localhost:3000/Yurrebilla-bones/wordpress-4.9.4/wordpress/",
      notify: true,
      injectChanges: true,
    });

    // Inject CSS without page-reload
    browserSync.watch("*.css", function (event, file) {
        if (event === "change") {
            browserSync.reload("*.css");
        }
    });

    // reload entire page on file changes
    gulp.watch('*.php').on('change', browserSync.reload);

});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    gulp.watch('*.scss', ['sass']);

    return gulp.src("*.scss")     // Gets all files ending with .scss
        .pipe(sass())
        .pipe(gulp.dest("./library/css/"))    // save into same folder as gulpfile.js
});

/* Watch Files */
gulp.task('default', ['sass', 'browser-sync']);