"use strict";
module.exports = function(grunt) {
	grunt.initConfig({
		watch : {
			src : {
				files : ['**/*.scss', '**/*.php'],
				tasks : ['compass']
			},
			options : {
				//livereload : true,
			},
		},
		compass : {
			dist : {
				options : {
					sourcemap : true,
					sassDir : 'custom_sass',
					cssDir : 'css',
					imagesPath : 'images',
					noLineComments : false,
					outputStyle : 'compressed'
				}
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
};
