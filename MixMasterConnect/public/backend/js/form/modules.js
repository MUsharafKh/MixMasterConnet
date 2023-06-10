var dt;
var form            = $('#module_form');
var saveBtn         = $( "#btnSave" );
var updateBtn       = $("#btnUpdate");
var resetBtn        = $("#btnClose");
var addNewBtn       = $("#btn_new_module");
var modalTital      = $("#modal_title");
var target =document.querySelector('#modal_content');
var blockUI = new KTBlockUI(target);
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(function(){
    reloadDataTable();
    addNewBtn.click(function(){
        form[0].reset();
        modalTital.text("Add New Module");
        $('#id').val(null);
        saveBtn.show();
        resetBtn.show();
        updateBtn.hide();
    });
    $('#kt_modal_close').click(function(){
        closeModal('#kt_modal_module')
    });
    $('#kt_modal_discard').click(function(){
        closeModal('#kt_modal_module')
    });
});
//begin datatable
function reloadDataTable(){
   dt= $('#kt_modules_table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax":{
                 "headers": {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                 "url": `/api/module/all`,
                 "dataType": "json",
                 "type": "POST",
                 "data":{_module:CURRENT_MODULE,_user_id:WYSE_AUTH_ID }
               },
               "columns": [
                { "data": "id" },
                { "data": "module_code" },
                { "data": "module_name" },
                { "data": "display_order" },
                { "data": "is_active" },
                { "data": "action" }
            ]
    });
}
$('#dataTableSearch').on( 'keyup', function () {
    dt.search( this.value ).draw();
} );
//end datatable