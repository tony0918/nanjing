module.exports = function (grunt) {
	'use strict';
	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		//    uglify: {
		//      options: {
		//        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
		//      },
		//      build: {
		//        src: 'src/<%= pkg.name %>.js',
		//        dest: 'build/<%= pkg.name %>.min.js'
		//      }
		//    }
		watch: {
			files: ['src/less/**/*.less'],
			tasks: ['less']
		},
		less: {
			development: {
				options: {
					paths: ["src/less/parts"]
				},
				files: {
					'dist/css/main.css': 'src/less/main.less'
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');
	// Load the plugin that provides the "uglify" task.
	//  grunt.loadNpmTasks('grunt-contrib-uglify');

	// Default task(s).
	grunt.registerTask('default', ['less', 'watch']);

};