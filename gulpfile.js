let gulp = require('gulp');
let autoprefixer = require('gulp-autoprefixer');
let browserSync = require('browser-sync').create();
let concat = require('gulp-concat');
let sass = require('gulp-sass')(require('sass'));
let autoprefixBrowsers = ['> 1%', 'last 2 versions'];
let csso = require('gulp-csso');
let sourcemaps = require('gulp-sourcemaps');
let minify = require('gulp-minify');

// compile SASS
gulp.task('scss', gulp.series([], function () {
    return gulp.src(['src/scss/app.scss'])
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(concat('app.css'))
        .pipe(autoprefixer({ browsers: autoprefixBrowsers }))
        .pipe(csso())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('assets/css'))
        .pipe(browserSync.stream());
}));

// move js to dist
gulp.task('js', gulp.series([], function () {
    return gulp.src('src/js/*')
        .pipe(minify())
        .pipe(gulp.dest('assets/js'))
        .pipe(browserSync.stream());
}));

// watch sass & serve
gulp.task('serve', gulp.series(['scss', 'js'], function() {
    browserSync.init({
        // server: "./",
        proxy: "http://localhost:8888"
    });

    gulp.watch(['src/js/*.js'], gulp.series(['js']));
    gulp.watch(['src/scss/**/*.scss'], gulp.series(['scss']));
    gulp.watch('**/*.php').on('change', browserSync.reload);
}));



gulp.task('default', gulp.series(['scss', 'serve', 'js']));


