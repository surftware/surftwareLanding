module.exports = function (grunt) {
    // Grunt Configuration
    grunt.initConfig({
       less: {
          app: {
             files: {"css/design.css": "less/design.less"}
          }
       }
  });
  // Load plugins
  grunt.loadNpmTasks("grunt-contrib-less");
  };