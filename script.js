$("#formaluno").on("submit", function(event){
    event.preventDefault();
    var dados=$(this).serialize();
    
    $.ajax({
        url: "controler/controlleraluno.php",
        type: "post",
        data: dados,
        success: function(response){
            console.log(response)
        }
    });
});