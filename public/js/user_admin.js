//This script is needed to open the Datatable on the user Section 
$(document).ready(function() {
    var table = $('#table_user');
    table.DataTable({
        "sDom": "<'table-responsive'ft><'row'<p i>>",
        "destroy": true,
        "scrollCollapse": true,
        "oLanguage": {
            "sLengthMenu": "_MENU_ ",
            "sInfo": "Showing <b>_START_ to _END_</b> of _TOTAL_ entries"
        },
        "iDisplayLength": 5
    });


    //Redirect the user to the Show more info section
    $('#table_user tbody').on('click', 'tr', function() {
        var user_id = $(this).attr("data-send");
        window.location = "/admin/user/view/" + user_id;
    });
});