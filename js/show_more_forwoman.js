$(function () {
    $('#form').submit(function (e) {
        e.preventDefault();
        var data = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "show_more_forwoman.php",
            data: data,
            success: function (result) {
                $('#form').replaceWith(result);
            }
        });
        
        
    });
    

})