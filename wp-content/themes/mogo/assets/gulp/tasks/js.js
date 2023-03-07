import babel from 'gulp-babel'
import uglify from 'gulp-uglify'
import webpack from 'webpack-stream'
import sourcemaps from "gulp-sourcemaps";

export const js = () => {
  return app.gulp.src(app.path.src.js)
    .pipe(app.plugins.plumber(
      app.plugins.notify.onError({
        title: 'JS',
        message: 'Error: <%= error.message %>',
      })
    ))
    .pipe(app.plugins.if(app.isDev, sourcemaps.init()))
    .pipe(babel())
    .pipe(webpack({
      mode: app.isBuild ? 'production' : 'development',
      output: { filename: 'app.min.js' }
    }))
    .pipe(app.plugins.if(app.isBuild, uglify()))
    .pipe(app.plugins.if(app.isDev, sourcemaps.write()))
    .pipe(app.gulp.dest(app.path.build.js))
    .pipe(app.plugins.browserSync.stream())
}