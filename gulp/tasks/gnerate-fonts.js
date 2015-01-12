// Generate fonts task requirements
var config        = require('../config');
var gulp          = require('gulp');
var fontgen       = require("gulp-fontgen");

// Generate fonts task
gulp.task('generate-fonts', function() {
    return gulp.src(config.paths.src.fonts.all)
        .pipe(fontgen({
            dest: config.paths.dist.fonts.path,
            css_fontpath: config.fontgen.css_fontpath
        }))
        .pipe(gulp.dest(config.paths.dist.css.path));
});
