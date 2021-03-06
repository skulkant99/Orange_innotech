@extends('Admin.layouts.layout')
@section('css_top')
@endsection
@section('css_bottom')

@endsection
@section('body')
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="content">
                            <h4 class="title">
                                {{$title_page}}
                                <button class="btn btn-success btn-add pull-right" >
                                    + เพิ่มข้อมูล
                                </button>
                            </h4>
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">
                                <div class="table-responsive">
                                    <table id="TableList" class="table" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                            <th>รูปภาพ</th>
                                            <th>หัวเรื่อง</th>
                                            <th>ไฟล์</th>
                                            <th>New</th>
                                            <th>ลำดับ</th>
                                            <th>สถานะ</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection
@section('modal')
<div class="modal" id="ModalAdd"  role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document"  style="max-width:70%;max-height:70%;">
            <div class="modal-content">
                <form id="FormAdd">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">เพิ่ม {{$title_page}}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">

                    <div class="form-group">
                        <label for="add_photo">รูปภาพ</label>
                        <div id="orak_add_photo">
                            <div id="add_photo" orakuploader="on"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="add_title">หัวเรื่อง(TH)</label>
                        <input id="add_title_th" name="title_th" class="form-control" placeholder="หัวเรื่อง">
                    </div>

                    <div class="form-group">
                        <label for="add_title">หัวเรื่อง(EN)</label>
                        <input id="add_title_en" name="title_en" class="form-control" placeholder="หัวเรื่อง">
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="add_file">ไฟล์</label>
                            <input type="file" class="upload_file" id="add_file">
                            <input type="text" class="value_name_file" name="file">
                            <div class="preview_file"></div>
                        </div>
                        <div class="form-check col-md-6">
                            <label for="add_status_pdf" class="checkbox form-check-label">
                                <input type="checkbox" class="form-check-input" data-toggle="checkbox" name="status_pdf" id="add_status_pdf"  value="1" checked="checked"> เปิดใช้งานไฟล์
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                            <label for="add_detail">รายละเอียด(TH)</label>
                            <textarea id="add_detail_th" name="detail_th" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                            <label for="add_detail">รายละเอียด(EN)</label>
                            <textarea id="add_detail_en" name="detail_en" class="form-control"></textarea>
                    </div>
            
                    <div class="form-group">
                            <label for="add_sort_id">ลำดับ</label>
                            <input type="text" class="form-control number-only" name="sort_id" id="add_sort_id"  placeholder="ลำดับ">
                    </div>
                    
                    <div class="form-check">
                        <label for="add_active" class="checkbox form-check-label">
                            <input type="checkbox" class="form-check-input" data-toggle="checkbox" name="active" id="add_active"  value="1" checked="checked"> NEW
                        </label>
                    </div>

                    <div class="form-check">
                        <label for="add_status" class="checkbox form-check-label">
                            <input type="checkbox" class="form-check-input" data-toggle="checkbox" name="status" id="add_status"  value="1" checked="checked"> เปิดใช้งาน
                        </label>
                    </div>
                 
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal" id="ModalEdit"  role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document"  style="max-width:70%;max-height:70%;">
                <div class="modal-content">
                    <input type="hidden" name="edit_id" id="edit_id">
                    <form id="FormEdit">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">แก้ไข {{$title_page}}</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                        
                        <input type="hidden" name="org_photo" id="org_photo">
                        <div class="form-group">
                            <label for="edit_photo">รูปภาพ</label>
                            <div id="orak_edit_photo">
                                <div id="edit_photo" orakuploader="on"></div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="edit_title">หัวเรื่อง(TH)</label>
                            <input id="edit_title_th" name="title_th" class="form-control" placeholder="หัวเรื่อง">
                        </div>

                        <div class="form-group">
                            <label for="edit_title">หัวเรื่อง(EN)</label>
                            <input id="edit_title_en" name="title_en" class="form-control" placeholder="หัวเรื่อง">
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="edit_file">ไฟล์</label>
                                <input type="file" class="upload_file" id="edit_file">
                                <input type="text" class="value_name_file edit_value_name_file_file" name="file">
                                <div class="preview_file preview_file_file"></div>
                            </div>
                            <div class="form-check col-md-6">
                                <label for="edit_status_pdf" class="checkbox form-check-label">
                                    <input type="checkbox" class="form-check-input" data-toggle="checkbox" name="status_pdf" id="edit_status_pdf"  value="1"> เปิดใช้งานไฟล์
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="edit_detail">รายละเอียด(TH)</label>
                            <textarea id="edit_detail_th" name="detail_th" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="edit_detail">รายละเอียด(EN)</label>
                            <textarea id="edit_detail_en" name="detail_en" class="form-control"></textarea>
                        </div>
                        
            
                        <div class="form-group">
                            <label for="add_sort_id">ลำดับ</label>
                            <input type="text" class="form-control number-only" name="sort_id" id="edit_sort_id"  placeholder="ลำดับ">
                        </div>

                        <div class="form-check">
                            <label for="edit_active" class="checkbox form-check-label">
                                <input type="checkbox" class="form-check-input" data-toggle="checkbox" name="active" id="edit_active"  value="1"> NEW
                            </label>
                        </div>
                      
                        <div class="form-check">
                            <label for="edit_status" class="checkbox form-check-label">
                                <input type="checkbox" class="form-check-input" data-toggle="checkbox" name="status" id="edit_status"  value="1"> เปิดใช้งาน
                            </label>
                        </div>
                      
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
@section('js_top')
@endsection
@section('js_bottom')
    <script src="{{asset('assets/global/plugins/orakuploader/orakuploader.js')}}"></script>
    <script>
         var TableList = $('#TableList').dataTable({
            "ajax": {
                "url": url_gb+"/admin/information/Lists",
                "data": function ( d ) {
                    //d.myKey = "myValue";
                    // d.custom = $('#myInput').val();
                    // etc
                }
            },
            "columns": [
                {"data" : "DT_RowIndex" , "className": "text-center", "searchable": false, "orderable": false},
                {"data" : "photo","width": "20%"},
                {"data" : "title_th"},
                {"data" : "file"},
                {"data" : "active"},
                {"data" : "sort_id","className": "text-center"},
                {"data" : "status"},
                { "data": "action","className":"action text-center","searchable" : false , "orderable" : false }
            ]
         });
         $('body').on('click','.btn-add',function(data){
             $('.select2').select2();
            ShowModal('ModalAdd');
        });
        $('body').on('click','.btn-edit',function(data){
            var btn = $(this);
            btn.button('loading');
            var id = $(this).data('id');
            $('#edit_id').val(id);
            $.ajax({
                method : "GET",
                url : url_gb+"/admin/information/show/"+id,
                dataType : 'json'
            }).done(function(rec){
                console.log(rec);
                
                $('#edit_photo').closest('#orak_edit_photo').html('<div id="edit_photo" orakuploader="on"></div>');
                $('#org_photo').val(rec.photo);
                if(rec.photo){
                    var max_file = 100;
                    var file = [];
                        file[0] = rec.photo;
                    var photo = $.parseJSON(rec.photo);
                    photo.reverse();
                }else{
                    var max_file = 100;
                    var file = [];
                    var photo = $.parseJSON(rec.photo);
                }  
                $('#edit_photo').orakuploader({
                    orakuploader_path               : url_gb+'/',
                    orakuploader_ckeditor           : false,
                    orakuploader_use_dragndrop      : true,
                    orakuploader_use_sortable       : true,
                    orakuploader_main_path          : 'uploads/temp/',
                    orakuploader_thumbnail_path     : 'uploads/temp/',
                    orakuploader_thumbnail_real_path: asset_gb+'uploads/temp/',
                    orakuploader_add_image          : asset_gb+'images/add.png',
                    orakuploader_loader_image       : asset_gb+'images/loader.gif',
                    orakuploader_no_image           : asset_gb+'images/no-image.jpg',
                    orakuploader_add_label          : 'เลือกรูปภาพ',
                    orakuploader_use_rotation       : false,
                    orakuploader_maximum_uploads    : max_file,
                    orakuploader_hide_on_exceed     : true,
                    orakuploader_attach_images      : photo,
                    orakuploader_field_name         : 'photo',
                    orakuploader_finished           : function(){
                        $(".file").addClass("multi_file");
                        centerModals();
                    }
                });

                $('#edit_title_th').val(rec.title_th);
                $('#edit_title_en').val(rec.title_en);
                $('.edit_value_name_file_file').val(rec.file);
                $('.preview_file_file').html('<img src="'+asset_gb+'uploads/pdf.png" class="preview-file">');
                CKEDITOR.instances['edit_detail_th'].setData(rec.detail_th);
                CKEDITOR.instances['edit_detail_en'].setData(rec.detail_en);
               ;

                if(rec.status_pdf=='1'){
                    $('#edit_status_pdf').prop('checked','checked').closest('label').addClass('checked');
                }else{
                    $('#edit_status_pdf').removeAttr('checked').closest('label').removeClass('checked');
                }

                if(rec.status=='1'){
                    $('#edit_status').prop('checked','checked').closest('label').addClass('checked');
                }else{
                    $('#edit_status').removeAttr('checked').closest('label').removeClass('checked');
                }

                if(rec.active=='1'){
                    $('#edit_active').prop('checked','checked').closest('label').addClass('checked');
                }else{
                    $('#edit_active').removeAttr('checked').closest('label').removeClass('checked');
                }

                $('#edit_sort_id').val(rec.sort_id);

         
                btn.button("reset");
                ShowModal('ModalEdit');
            }).fail(function(){
                swal("system.system_alert","system.system_error","error");
                btn.button("reset");
            });
        });
        $('#FormAdd').validate({
            errorElement: 'div',
            errorClass: 'invalid-feedback',
            focusInvalid: false,
            rules: {

                name: {
                    required: true,
                },
            },
            messages: {

                name: {
                    required: "กรุณาระบุ",
                },
            },
            highlight: function (e) {
                validate_highlight(e);
            },
            success: function (e) {
                validate_success(e);
            },

            errorPlacement: function (error, element) {
                validate_errorplacement(error, element);
            },
            submitHandler: function (form) {

                if(CKEDITOR!==undefined){
                    for ( instance in CKEDITOR.instances ){
                        CKEDITOR.instances[instance].updateElement();
                    }
                }

                var btn = $(form).find('[type="submit"]');
                var data_ar = removePriceFormat(form,$(form).serializeArray());
                btn.button("loading");
                $.ajax({
                    method : "POST",
                    url : url_gb+"/admin/information",
                    dataType : 'json',
                    data : $(form).serialize()
                }).done(function(rec){
                    btn.button("reset");
                    if(rec.status==1){
                        TableList.api().ajax.reload();
                        resetFormCustom(form);
                        swal(rec.title,rec.content,"success");
                        $('#ModalAdd').modal('hide');
                    }else{
                        swal(rec.title,rec.content,"error");
                    }
                }).fail(function(){
                    swal("system.system_alert","system.system_error","error");
                    btn.button("reset");
                });
            },
            invalidHandler: function (form) {

            }
        });
        $('#FormEdit').validate({
            errorElement: 'div',
            errorClass: 'invalid-feedback',
            focusInvalid: false,
            rules: {

                name: {
                    required: true,
                },
            },
            messages: {

                name: {
                    required: "กรุณาระบุ",
                },
            },
            highlight: function (e) {
                validate_highlight(e);
            },
            success: function (e) {
                validate_success(e);
            },

            errorPlacement: function (error, element) {
                validate_errorplacement(error, element);
            },
            submitHandler: function (form) {

                if(CKEDITOR!==undefined){
                    for ( instance in CKEDITOR.instances ){
                        CKEDITOR.instances[instance].updateElement();
                    }
                }

                var btn = $(form).find('[type="submit"]');
                var id = $('#edit_id').val();
                btn.button("loading");
                $.ajax({
                    method : "POST",
                    url : url_gb+"/admin/information/"+id,
                    dataType : 'json',
                    data : $(form).serialize()
                }).done(function(rec){
                    btn.button("reset");
                    if(rec.status==1){
                        TableList.api().ajax.reload();
                        resetFormCustom(form);
                        swal(rec.title,rec.content,"success");
                        $('#ModalEdit').modal('hide');
                    }else{
                        swal(rec.title,rec.content,"error");
                    }
                }).fail(function(){
                    swal("system.system_alert","system.system_error","error");
                    btn.button("reset");
                });
            },
            invalidHandler: function (form) {

            }
        });
        $('body').on('click','.btn-delete',function(e){
            e.preventDefault();
            var btn = $(this);
            var id = btn.data('id');
            swal({
                title: "คุณต้องการลบใช่หรือไม่",
                text: "หากคุณลบจะไม่สามารถเรียกคืนข้อมูลกลับมาได้",
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                confirmButtonText: "ใช่ ฉันต้องการลบ",
                cancelButtonText: "ยกเลิก",
                showLoaderOnConfirm: true,
                buttonsStyling: false
            }).then(function() {
                $.ajax({
                    method : "POST",
                    url : url_gb+"/admin/information/Delete/"+id,
                    data : {ID : id}
                }).done(function(rec){
                    if(rec.status==1){
                        swal(rec.title,rec.content,"success");
                        TableList.api().ajax.reload();
                    }else{
                        swal("ระบบมีปัญหา","กรุณาติดต่อผู้ดูแล","error");
                    }
                }).fail(function(data){
                    swal("ระบบมีปัญหา","กรุณาติดต่อผู้ดูแล","error");
                });
            }).catch(function(e){
                //console.log(e);
            });
        });
        $('#add_photo').orakuploader({
            orakuploader_path               : url_gb+'/',
            orakuploader_ckeditor           : false,
            orakuploader_use_dragndrop      : true,
            orakuploader_use_sortable       : true,
            orakuploader_main_path          : 'uploads/temp/',
            orakuploader_thumbnail_path     : 'uploads/temp/',
            orakuploader_thumbnail_real_path: asset_gb+'uploads/temp/',
            orakuploader_add_image          : asset_gb+'images/add.png',
            orakuploader_loader_image       : asset_gb+'images/loader.gif',
            orakuploader_no_image           : asset_gb+'images/no-image.jpg',
            orakuploader_add_label          : 'เลือกรูปภาพ',
            orakuploader_use_rotation       : false,
            orakuploader_maximum_uploads    : 100,
            orakuploader_hide_on_exceed     : true,
            orakuploader_field_name         : 'photo',
            orakuploader_finished           : function(){
                $(".file").addClass("multi_file");
                centerModals();

            }
        });
        CKEDITOR.replace('add_detail_th');
        CKEDITOR.replace('edit_detail_th');

        CKEDITOR.replace('add_detail_en');
        CKEDITOR.replace('edit_detail_en');

 
    </script>
@endsection
