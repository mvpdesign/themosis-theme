// Default task requirements
var gulp        = require('gulp');
var runSequence = require('run-sequence');

// Default task
gulp.task('default',  function() {
    runSequence(
        'styles',
        'scripts',
        'images',
        function() {
        }
    );
});
