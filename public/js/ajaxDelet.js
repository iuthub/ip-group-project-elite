$(document).ready(function() {
    $('#deleteButton').on('click', function() {
        var id = $(this).attr('jsId');
        req = $.ajax({
            url: 'reservation/delete/',
            type: 'GET',
            data: id,
            success: function(data) {
                $('#ajax' + id).fadeOut(500).fadeIn(500).remove();
            }
        });
        
    });
});