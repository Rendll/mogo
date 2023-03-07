import dartSass from 'sass'
import gulpSass from 'gulp-sass'
import rename from 'gulp-rename'
import sourcemaps from 'gulp-sourcemaps'

import cleanCss from 'gulp-clean-css' // Сжатие CSS файла
import autoPrefixer from 'gulp-autoprefixer' // Добавление вендорных префиксов
import groupCssMediaQueries from 'gulp-group-css-media-queries' // Группировка медиа запросов

const sass = gulpSass(dartSass)

export const scss = () => {
  return app.gulp.src(app.path.src.scss)
    .pipe(app.plugins.plumber(
      app.plugins.notify.onError({
        title: 'SCSS',
        message: 'Error: <%= error.message %>'
      })))
    .pipe(app.plugins.if(app.isDev, sourcemaps.init()))
    .pipe(sass({ outputStyle: 'expanded' }).on('error', sass.logError))
    .pipe(groupCssMediaQueries())
    .pipe(autoPrefixer({
      grid: true,
      overrideBrowserslist: ['last 3 versions'],
      cascade: true
    }))
    .pipe(app.plugins.if(app.isBuild, cleanCss()))
    .pipe(rename({ extname: '.min.css' }))
    .pipe(app.plugins.if(app.isDev, sourcemaps.write()))
    .pipe(app.gulp.dest(app.path.build.css))
    .pipe(app.plugins.browserSync.stream())
}
