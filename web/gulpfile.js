const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const del = require('del');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

gulp.task('styles', () => {
    return gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('./style.css'))
        .pipe(gulp.dest('./css'));
});

gulp.task('clean', () => {
    return del([
        'css/main.css',
    ]);
});

gulp.task('watch', () => {
    gulp.watch('sass/**/*.scss', (done) => {
        gulp.series(['clean', 'styles'])(done);
    });
});

gulp.task('js', () => {
    return gulp.src('sass/**/*.js')
        .pipe(uglify())
        .pipe(concat('./index.js'))
        .pipe(gulp.dest('./js'));
});

gulp.task('default', gulp.series(['clean', 'styles', 'watch']));