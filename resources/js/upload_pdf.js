const Dropzone = require('dropzone/index.js');

Dropzone.options.myDropzone = {
    maxFiles: 1,
    acceptedFiles: ".pdf",
    paramName: "file", // The name that will be used to transfer the file
    init: function() {
        console.log("dropzone init");
        this.on("maxfilesexceeded", function() {
            console.log("maxfilesexceeded");
            if (this.files[1]!=null){
                this.removeFile(this.files[0]);
            }
            console.log(this.files);
        });
    },
    accept: function(file, done) {
        console.log("uploaded");
        if (this.files[1]!=null){
            this.removeFile(this.files[0]);
        }
        done();
    }
};