To run project ensure the following is installed:

The tutorial I followed was this: https://webdesign.tutsplus.com/tutorials/supercharge-your-local-wordpress-development--cms-28303

Install NODE if not already have https://nodejs.org/en/download/

Gitbash on theme folder
npm init
Go through the setup
This will generate the package.json
Install gulp gulp-sass browser-sync --save-dev
Saves modules as dependencies
Create gulpfile.js in the theme root
Add the below into the gulpfile.js

https://stackoverflow.com/questions/48085293/gulp-inject-css-in-wordpress




**TO RUN PROJECT, Bash on folder with command: gulp

Final Gulp File that worked is below:

var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');

// Init Browser-Sync
gulp.task('browser-sync', function() {

    browserSync.init({
      proxy: "http://localhost:8080/Yurrebilla-bones/wordpress-4.9.4/",
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
    gulp.watch('library/scss/**/*.scss', ['sass']);

    return gulp.src("library/scss/**/*.scss")     // Gets all files ending with .scss
        .pipe(sass())
        .pipe(gulp.dest("./"))    // save into same folder as gulpfile.js
});

/* Watch Files */
gulp.task('default', ['sass', 'browser-sync']);