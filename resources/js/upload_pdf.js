const Dropzone = require('dropzone/index.js');

Dropzone.options.myDropzone = {
    maxFiles: 1,
    acceptedFiles: ".pdf",
    autoProcessQueue: false,
    paramName: "file", // The name that will be used to transfer the file
    init: function() {
        console.log("dropzone init");
        myDropzone = this;
        myDropzone.on("maxfilesexceeded", function() {
            console.log("maxfilesexceeded");
            if (myDropzone.files[1]!=null){
                myDropzone.removeFile(myDropzone.files[0]);
            }
            console.log(myDropzone.files);
        });
        // Force to have 1 file uploaded
        $("#formSubmit").click(function (e) { 
            if(myDropzone.files[0] != null){
                myDropzone.processQueue();
            }else{
                console.log("Select a file before continue"); // ui message mock
            }
        });
    },
    accept: function(file, done) {
        console.log("uploaded");
        if (this.files[1] != null){
            this.removeFile(this.files[0]);
        }
        done();
    },
    sending: function(){
        console.log("sending files");
        if (this.files[0] == null){
            console.log("Select a file before continue");
        }
    }
};

// Dropzone.autoDiscover = false;
// var myDropzone = new Dropzone($("#myDropzone"), {
//     maxFiles: 1,
//     acceptedFiles: ".pdf",
//     autoProcessQueue: false,
//     paramName: "file", // The name that will be used to transfer the file
//     init: function() {
//         console.log("dropzone init");
//         this.on("maxfilesexceeded", function() {
//             console.log("maxfilesexceeded");
//             if (this.files[1]!=null){
//                 this.removeFile(this.files[0]);
//             }
//             console.log(this.files);
//         });
//     },
//     accept: function(file, done) {
//         console.log("uploaded");
//         if (this.files[1]!=null){
//             this.removeFile(this.files[0]);
//         }
//         done();
//     },
//     sending: function(){
//         console.log("sending files");
//         if (this.files[0]!=null){
//             console.log("Select a file before continue");
//         }
//     }
// });