/**
 * Created by mauriciosuarez on 22/05/17.
 */
var gulp = require('gulp');
var critical = require('critical');

gulp.task('default', function (cb) {
    critical.generate({
        base: 'public/',
        src: 'index.html',
        css: [
            'public/css/app-home.css',
        ],
        dimensions: [{
            width: 320,
            height: 480
        }, {
            width: 768,
            height: 1024
        }, {
            width: 1280,
            height: 960
        }],
        dest: 'public/css/critical.css',
        minify: true,
        extract: false,
        ignore: ['font-face']
    });
});