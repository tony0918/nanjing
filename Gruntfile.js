module.exports = function (grunt) {
  'use strict';
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
        //        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      production: {
        src: 'src/js/*.js',
        dest: 'dist/js/main.min.js'
      }
    },
    watch: {
      files: ['src/less/**/*.less'],
      tasks: ['less', 'autoprefixer']
    },
    less: {
      development: {
        options: {
          paths: ["src/less/parts"]
        },
        files: {
          'dist/css/main.css': 'src/less/main.less'
        }
      },
      production: {
        options: {
          paths: ["src/less/parts"]
        },
        files: {
          'tmp/main.css': 'src/less/main.less'
        }
      }
    },
    copy: {
      development: {
        files: [
          {
            expand: true,
            cwd: 'src',
            src: ['libs/**'],
            dest: 'dist/'
          }
        ]
      },
      production: {
        files: [
          {
            expand: true,
            cwd: 'src',
            src: ['libs/**'],
            dest: 'dist/'
          }, {
            expand: true,
            cwd: 'bower_components',
            src: ['**/{dist,dest}/**/*.min.{js,css}', '**/dist/**/fonts/*', '!**/src/**/*'],
            dest: 'dist/libs'
          }
        ]
      }
    },
    autoprefixer: {
      options: {
        browsers: ['last 8 versions']
      },
      production: {
        src: 'tmp/main.css'
      },
      development: {
        src: 'dist/css/main.css'
      }
    },
    clean: {
      development: ['dist', 'tmp']
    },
    cssmin: {
      production: {
        files: {
          'dist/css/main.css': 'tmp/main.css'
        }
      }
    },
    imagemin: {
      production: {
        files: [
          {
            expand: true,
            cwd: 'src/',
            src: ['images/**/*', 'assets/**/*'],
            dest: 'dist'
          }
        ]
      }
    },
    cdnify: {
      production: {
        options: {
          rewriter: function (url) {
            if (url.indexOf('../bower_components/') === 0) {
              return url.replace('../bower_components/', 'libs/');
            } else if (url.indexOf('../dist/') === 0) {
              return url.replace('../dist/', '');
            } else {
              return url;
            }
          },
          html: {
            'img[data-src]': false,
            'img[src]': false,
            'link[rel="]': false,
            'link[rel="shortcut icon"]': 'href',
            'link[rel=icon]': 'href',
            'link[rel=stylesheet]': 'href',
            'script[src]': 'src',
            'source[src]': 'src',
            'video[poster]': false
          }
        },
        files: [{
          src: ['*.html'],
          dest: 'dist',
          expand: true,
          cwd: 'src'
        }]
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-newer');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-cdnify');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Default task(s).
  grunt.registerTask('default', ['clean', 'less:development', 'autoprefixer:development', 'copy:development', 'watch']);
  grunt.registerTask('imgmin', ['newer:imagemin']);
  grunt.registerTask('deploy', ['clean', 'less:production', 'autoprefixer:production', 'uglify', 'cssmin', 'copy:production', 'newer:imagemin', 'cdnify']);

};