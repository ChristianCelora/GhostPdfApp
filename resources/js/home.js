$(".div-link").click(function(){
    let url = $(this).data("location");
    if(typeof url !== "undefined"){
        window.location.href = url;
     }
});