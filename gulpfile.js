var gulp = require("gulp"),
    sass = require("gulp-sass"),
    include = require("gulp-include"),
    uglify = require("gulp-uglify"),
    cssnano = require("gulp-cssnano"),
    imagemin = require("gulp-imagemin"),
    del = require("del"),
    babel = require("gulp-babel"),
    sftp = require("gulp-sftp"),
    pump = require("pump");

// front end

gulp.task("front_js", function(cb) {
  pump([
        gulp.src("assets/js/scripts.js"),
        include(),
        uglify(),
        gulp.dest("js/")
    ],
    cb
  );
});

gulp.task("front_sass", function(cb){
    pump([
        gulp.src("assets/css/style.scss"),
        sass(),
        cssnano(),
        gulp.dest("/")
    ],
    cb
  );
});

gulp.task("front_images", function(){
  return gulp.src("assets/images/**/*.+(png|jpg|gif|svg)")
    .pipe(imagemin())
    .pipe(gulp.dest("public/images"))
});

gulp.task("front_clean", function() {
  return del.sync("public");
});

gulp.task("watch", function(){
  gulp.watch("assets/css/**/*.scss", gulp.series("front_sass"));
  gulp.watch("assets/js/**/*.js", gulp.series("front_js"));
});