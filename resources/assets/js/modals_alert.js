$(function() {
    $.ajax({
            method: 'GET',
            url: 'forceModalOpen',
        })
        .done(function($data) {
            if (Object.keys($data).length > 0) {
                $("#button_accept").attr("data-send", $data.id);
                $('#myModalLabel').empty().append($data.subject);
                $('.modal-body').empty().append($data.body);
                $('#myModal').modal({ backdrop: "static" });
            };
        })

})