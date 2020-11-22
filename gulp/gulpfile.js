const { watch, series, parallel, src, dest } = require("gulp");

const sass = require("@selfisekai/gulp-sass");
const cssmin = require("gulp-cssmin");
const rename = require("gulp-rename");
const deletefiles = require("gulp-remove-files");
const autoprefixer = require("gulp-autoprefixer");
const minify = require("gulp-babel-minify");
const concat = require("gulp-concat");
const rev = require("gulp-rev-all");

const settings = {
  domain: "http://amandaaugustmusic.local/",
  root: "../assets/",
  sassInput: "../assets/**/*.scss",
  sassOutput: "../assets/css/",
  cssmin: "../assets/css/styles.css",

  cssFiles: ["../assets/css/site.main.css"],

  // Include JS Libraries here to be compiled
  jsFiles: [
    "../assets/js/lib/modernizr.js",
    "../assets/js/lib/anime.js",
    "../assets/js/site.js",
  ],
};

function cssClean() {
  return src(settings.sassOutput + "styles*.css").pipe(deletefiles());
}

function sassCompile() {
  return src(settings.sassInput, { sourcemaps: true })
    .pipe(sass({ outputStyle: "compact" }))
    .pipe(rename({ dirname: settings.sassOutput }))
    .pipe(dest(settings.root, { sourcemaps: true }));
}

function cssConcat() {
  return src(settings.cssFiles)
    .pipe(
      autoprefixer({
        cascade: false,
      })
    )
    .pipe(concat("styles.css"))
    .pipe(dest(settings.root + "css"));
}

function cssMinify() {
  return src(settings.cssmin)
    .pipe(cssmin({ keepSpecialComments: 0 }))
    .pipe(rename("styles.min.css"))
    .pipe(dest(settings.root + "css"))
    .pipe(rev.revision())
    .pipe(dest(settings.root + "css"));
}

function jsClean() {
  return src(settings.root + "js/scripts*.js").pipe(deletefiles());
}

function jsMinify() {
  return src(settings.jsFiles)
    .pipe(concat("scripts.js"))
    .pipe(dest(settings.root + "js"))
    .pipe(minify())
    .pipe(rename("scripts.min.js"))
    .pipe(dest(settings.root + "js"))
    .pipe(rev.revision())
    .pipe(dest(settings.root + "js"));
}

exports.default = function () {
  watch(
    settings.sassInput,
    series(cssClean, sassCompile, cssConcat, cssMinify)
  );
  watch(settings.jsFiles, series(jsClean, jsMinify));
};
