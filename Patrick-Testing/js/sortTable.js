$(document).ready(function() {
    $("#facilities-table").DataTable({
        "table-layout": 'fixed',
        "bAutoWidth": false,
        "paging"   : false,
        "info"     : false,
        "searching" : false
    });
    $(".dataTables_length").addClass('bs-select');

});

//search btn filter
$(document).ready(function (){
    $("#searchByName").on("keyup", function (){
        let value = $(this).val().toLowerCase();
        $("#facility-table-body tr").filter(function (){
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});


