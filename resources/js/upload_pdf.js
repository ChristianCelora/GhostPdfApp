require('dropzone/index.js');

// var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
// // Dropzone.autoDiscover = false;
// var myDropzone = new Dropzone(".dropzone",{ 
//     acceptedFiles: ".pdf",
// });
// myDropzone.on("sending", function(file, xhr, formData) {
//     formData.append("_token", CSRF_TOKEN);
// }); 

Dropzone.options.myAwesomeDropzone = {
    accept: function(file, done) {
        console.log("uploaded");
        done();
    },
    init: function() {
        this.on("addedfile", function() {
            if (this.files[1]!=null){
                this.removeFile(this.files[0]);
            }
        });
    }
};