const Dropzone = require('dropzone/index.js');

Dropzone.options.myAwesomeDropzone = {
    maxFiles: 1,
    acceptedFiles: ".pdf",
    accept: function(file, done) {
        console.log("uploaded");
        done();
    }
};