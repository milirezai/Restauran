$(document).ready(function () {
    var form= $("#search");
    form.submit(function(event){
        event.preventDefault();
        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function(response){

            },
        });
    });
});