module.exports = function(grunt) {

// Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON( 'package.json' ),

// Clean the build folder
        clean: {
            build: {
                src: ['build/**', 'build-zip']
            }
        },
// Copy to build folder
        copy: {
            readme: {
                src: ['README.md'],
                dest: 'build/'
            },
            component: {
                expand: true,
                cwd: 'component/',
                src: ['**'],
                dest: 'build/'
            }
        },
// Compress the build folder into an upload-ready zip file
        compress: {
            component: {
                options: {
                    archive: 'build-zip/<%= pkg.name %>-<%= pkg.version %>.zip'
                },
                files: [
                    {expand: true, cwd: 'build/', src: ['**']}
                ]
            }
        }
    });

// Load all grunt plugins here
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-compress');

// Build task
    grunt.registerTask( 'build', [
        'clean:build',
        'copy:readme',
        'copy:component',
        'compress:component'
    ]);

};