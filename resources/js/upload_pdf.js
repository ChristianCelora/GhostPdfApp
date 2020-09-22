const Dropzone = require('dropzone/index.js');

var token = "{{ Session::getToken() }}";

Dropzone.options.myDropzone = {
    maxFiles: 1,
    maxFilesize: 300, // MB
    acceptedFiles: ".pdf",
    autoProcessQueue: false,    // Do not send files automatically
    paramName: "file", // The name that will be used to transfer the file
    init: function() {
        console.log("dropzone init");
        myDropzone = this;
        myDropzone.on("maxfilesexceeded", function() {
            if (myDropzone.files[1]!=null){
                myDropzone.removeFile(myDropzone.files[0]);
            }
        });
        // Force to have 1 file uploaded
        $("#formSubmit").on("click", function(e) { 
            e.preventDefault();
            if(myDropzone.files[0] != null){
                myDropzone.processQueue();
            }else{
                alert("Select a file before continue"); // ui message mock
            }
        });
        // Sending
        this.on("sending", function(file, xhr, formData) {
            // Append all form inputs to the formData Dropzone will POST
            var data = $('#myDropzone').serializeArray();
            $.each(data, function(key, el) {
                formData.append(el.name, el.value);
            });      
        });
        //complete
        myDropzone.on("complete", function(file){
            myDropzone.removeFile(file);
        })
    }
};