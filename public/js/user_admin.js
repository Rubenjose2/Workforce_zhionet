//This script is needed to open the Datatable on the user Section 
$(document).ready(function() {
    var table = $('#table_user');
    table.DataTable({
        "sDom": "<'table-responsive'flt><'row'<p i>>",
        "sPaginationType": "bootstrap",
        "destroy": true,
        "scrollCollapse": true,
        "oLanguage": {
            // "sLengthMenu": "_MENU_ ",
            "sInfo": "Showing <b>_START_ to _END_</b> of _TOTAL_ entries"
        },
        "iDisplayLength": 5,
        "order": [
            [0, "desc"]
        ],
    });


    //Redirect the user to the Show more info section
    $('#table_user tbody').on('click', 'tr', function() {
        var user_id = $(this).attr("data-send");
        window.location = "/admin/user/view/" + user_id;
    });

    //Redirect the user to the Show more info section
    $('#new_users tbody').on('click', 'tr', function() {
        var user_id = $(this).attr("data-send");
        window.location = "/admin/user/view/" + user_id;
    });
});