'use strict';

module.exports = function(grunt) {

  require('load-grunt-tasks')(grunt);

  var folders = {
    lib: 'lib',
    pub: 'public'
  };

  grunt.initConfig({
    folders: folders,
    watch: {
      stylus: {
        files: '<%= folders.lib %>/styles/**/*.styl',
        tasks: ['stylus']
      },
      coffee: {
        files: '<%= folders.lib %>/scripts/**/*.coffee',
        tasks: ['coffee']
      },
      server: {
        options: {
          livereload: true
        },
        files: [
          '<%= folders.pub %>/styles/**/*.css',
          '<%= folders.pub %>/js/**/*.js',
          '<%= folders.pub %>/images/**/*.{png,jpg,jpeg,gif,webp,svg}',
          '*.php',
        ]
      },
    },
    stylus: {
      compile: {
        files: [{
          expand: true,
          cwd: '<%= folders.lib %>/styles',
          src: ['{,*/}*.styl', '!**/_*'],
          dest: '<%= folders.pub %>/styles',
          ext: '.css'
        }]
      }
    },
    coffee: {
      compile: {
        expand: true,
        flatten: true,
        src: '<%= folders.lib %>/scripts/**/*.coffee',
        dest: '<%= folders.pub %>/js/',
        ext: '.js'
      }
    }
  });

  grunt.registerTask('default', ['watch']);

};
