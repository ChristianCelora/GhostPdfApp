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
            // Add addtional form data
            var additional_data = $('#additionaFormData input').serializeArray();
            var required = 0;
            $.each(additional_data, function(key, el) {
                console.log(el.value);
                if(el.value != null && el.value != "")
                    required = 1;
                formData.append(el.name, el.value);
            });
            if(required == 0){
                myDropzone.removeFile(file);
                alert("Select a range before continue");
                return;
            }
            $("#loading-gif").show();
            $("#submit").hide();
        });
        //complete
        myDropzone.on("complete", function(file){
            myDropzone.removeFile(file);
        })
    },
    success: function(file, response){
        console.log(response);
        if("file" in response && "name" in response){
            url = "download/" + response["file"] + "/" + response["name"];
            document.location.href = url;
        }
        $("#loading-gif").hide();
        $("#submit").show();
    },
    error: function(file, errorMessage, xhr){
        console.log(errorMessage);
    }
};


$(".add-range").click(function(){
    console.log("add range");
    let elem = $(this).parent(); // Container div
    cloned_elem = elem.clone(true);
    // Reset values
    cloned_elem.find("input").each(function(){
        $(this).val("")
    });
    // Hide button in clonable element
    elem.find(".add-range").hide();
    $("#ranges-container").append(cloned_elem);
});