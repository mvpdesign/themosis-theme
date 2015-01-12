// Fonts task requirements
var Q             = require('q');
var config        = require('../config');
var handleSuccess = require('../util/handleSuccess');
var gulp          = require('gulp');
var runSequence   = require('run-sequence');
var concat        = require('gulp-concat');

// Fonts task
gulp.task('fonts', function() {
    var deferred = Q.defer();

    runSequence(
        'generate-fonts',
        function() {
            deferred.resolve();
            return gulp.src(config.paths.dist.fonts.css)
                .pipe(concat(config.concat.fonts))
                .pipe(gulp.dest(config.paths.dist.css.path))
                .pipe(handleSuccess(config.notify.messages.fonts));
        }
    );

    return deferred.promise;
});
