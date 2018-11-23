var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');

// task para o sass (função que grava alterações do sass para arquivos de css)
gulp.task('sass', function(){
    return gulp.src('sass/**/*.sass')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError)) //{outputStyle: 'compressed'}
    .pipe(gulp.dest('css'));
}) ;

// task para watch (função que monitora alterações em tempo de execução e grava direto usando a função 'sass')
gulp.task('watch', function(){
    gulp.watch('sass/**/*.sass', ['sass']);
});

// task default gulp
gulp.task('default', ['sass', 'watch']);



