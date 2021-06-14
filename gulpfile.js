// const { settings } = require("cluster");
var gulp = require("gulp"),
  watch = require("gulp-watch"),
  postcss = require("gulp-postcss"),
  cssImport = require("postcss-import"),
autoprefixer = require("autoprefixer"),
nested = require("postcss-nested"),
  cssVars = require("postcss-simple-vars"),
  mixins = require("postcss-mixins"),
  hexrgba = require("postcss-hexrgba"),
  browserSync = require("browser-sync").create(),
  settings = require('./settings');

gulp.task("watch", function () {
  browserSync.init({
    notify: false,
    proxy: settings.urlToPreview,
    ghostMode: false,
  })

  watch(`${settings.themeLocation}assets/css/**/*.css`, function () {
    return gulp
      .src(`${settings.themeLocation}assets/css/style.css`)
      .pipe(
        postcss([cssImport, mixins, cssVars, autoprefixer, nested, hexrgba])
      )
      .on("error", function (error) {
        console.log(error.toString())
        this.emit("end")
      })
      .pipe(gulp.dest(`${settings.themeLocation}`))
      .pipe(browserSync.stream())
  })

})
