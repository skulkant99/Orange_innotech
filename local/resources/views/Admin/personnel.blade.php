@extends('Admin.layouts.layout')
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
                                <table id="TableList" class="table table-striped table-no-bordered table-hover" style="width:100%;cellspacing:0">
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                        <th>ชือ(ไทย)</th>
                                        <th>ตำแหน่ง(ไทย)</th>
                                        <th>แผนก</th>
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
    <div class="modal-dialog" role="document" style="max-width:70%;max-height:70%;">
        <div class="modal-content">
            <form id="FormAdd">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">เพิ่ม {{$title_page}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                
                <div class="form-group">
                    <label for="add_photo">โปรไฟล์</label>
                    <div id="orak_add_photo">
                        <div id="add_photo" orakuploader="on"></div>
                    </div>
                </div>
                    
                <div class="form-group">
                    <label for="add_name_th">ชื่อ(ไทย)</label>
                    <input type="text" class="form-control" name="name_th" id="add_name_th" required="" placeholder="ชื่อ(ไทย)">
                </div>
        
                <div class="form-group">
                    <label for="add_name_en">ชื่อ(อังกฤษ)</label>
                    <input type="text" class="form-control" name="name_en" id="add_name_en"  placeholder="ชื่อ(อังกฤษ)">
                </div>
        
                <div class="form-group">
                    <label for="add_position_th">ตำแหน่ง(ไทย)</label>
                    <input type="text" class="form-control" name="position_th" id="add_position_th"  placeholder="ตำแหน่ง(ไทย)">
                </div>
        
                <div class="form-group">
                    <label for="add_position_en">ตำแหน่ง(อังกฤษ)</label>
                    <input type="text" class="form-control" name="position_en" id="add_position_en"  placeholder="ตำแหน่ง(อังกฤษ)">
                </div>
        
                <div class="form-group">
                    <label for="add_detail_th">รายละเอียด(ไทย)</label>
                    <textarea id="add_detail_th" name="detail_th" class="form-control"></textarea>
                </div>
        
                <div class="form-group">
                    <label for="add_detail_en">รายละเอียด(อังกฤษ)</label>
                    <textarea id="add_detail_en" name="detail_en" class="form-control"></textarea>
                </div>
        
                <div class="form-check">
                        {{-- <input type="checkbox" class="form-check-input" data-toggle="checkbox" name="type" id="add_type"  value="1" checked="checked"> type --}}
                        <label for="edit_status">แผนก</label>
                        <select  class="form-control number-only select2" name="type" id="add_type" tabindex="-1" data-placeholder="เลือก type">
                            <option value="">เลือก</option>
                            <option value="1">คณะกรรมการบริษัท</option>
                            <option value="2">คณะผู้บริหาร</option>
                            <option value="3">ผู้จัดการกองทุน</option>
                        </select>
                    </label>
                </div>
        
                <div class="form-group">
                    <label for="add_sort_id">ลำดับ</label>
                    <input type="text" class="form-control number-only" name="sort_id" id="add_sort_id"  placeholder="ลำดับ">
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
    <div class="modal-dialog" role="document" style="max-width:70%;max-height:70%;">
        <div class="modal-content">
            <input type="hidden" name="edit_id" id="edit_id">
            <form id="FormEdit">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">แก้ไขข้อมูล {{$title_page}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                
                <input type="hidden" name="org_photo" id="org_photo">
                <div class="form-group">
                    <label for="edit_photo">โปรไฟล์</label>
                    <div id="orak_edit_photo">
                        <div id="edit_photo" orakuploader="on"></div>
                    </div>
                </div>
                    
                <div class="form-group">
                    <label for="edit_name_th">ชื่อ(ไทย)</label>
                    <input type="text" class="form-control" name="name_th" id="edit_name_th" required="" placeholder="ชื่อ(ไทย)">
                </div>
        
                <div class="form-group">
                    <label for="edit_name_en">ชื่อ(อังกฤษ)</label>
                    <input type="text" class="form-control" name="name_en" id="edit_name_en"  placeholder="ชื่อ(อังกฤษ)">
                </div>
        
                <div class="form-group">
                    <label for="edit_position_th">ตำแหน่ง(ไทย)</label>
                    <input type="text" class="form-control" name="position_th" id="edit_position_th"  placeholder="ตำแหน่ง(ไทย)">
                </div>
        
                <div class="form-group">
                    <label for="edit_position_en">ตำแหน่ง(อังกฤษ)</label>
                    <input type="text" class="form-control" name="position_en" id="edit_position_en"  placeholder="ตำแหน่ง(อังกฤษ)">
                </div>
        
                <div class="form-group">
                    <label for="edit_detail_th">รายละเอียด(ไทย)</label>
                    <textarea id="edit_detail_th" name="detail_th" class="form-control"></textarea>
                </div>
        
                <div class="form-group">
                    <label for="edit_detail_en">รายละเอียด(อังกฤษ)</label>
                    <textarea id="edit_detail_en" name="detail_en" class="form-control"></textarea>
                </div>
        
                <div class="form-check">
                    {{-- <label for="edit_type" class="checkbox form-check-label"> --}}
                        {{-- <input type="checkbox" class="form-check-input" data-toggle="checkbox" name="type" id="edit_type"  value="1"> type --}}
                        <label for="edit_status">แผนก</label>
                        <select  class="form-control number-only select2" name="type" id="edit_type" tabindex="-1" data-placeholder="เลือก type">
                            <option value="">เลือก</option>
                            <option value="1">คณะกรรมการบริษัท</option>
                            <option value="2">คณะผู้บริหาร</option>
                            <option value="3">ผู้จัดการกองทุน</option>
                        </select>
                    </label>
                </div>
        
                <div class="form-group">
                    <label for="edit_sort_id">ลำดับ</label>
                    <input type="text" class="form-control number-only" name="sort_id" id="edit_sort_id"  placeholder="ลำดับ">
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
@section('js_bottom')
<script src="{{asset('assets/global/plugins/orakuploader/orakuploader.js')}}"></script>
<script>

     var TableList = $('#TableList').dataTable({
        "ajax": {
            "url": url_gb+"/admin/Personnel/Lists",
            "data": function ( d ) {
                //d.myKey = "myValue";
                // d.custom = $('#myInput').val();
                // etc
            }
        },
        "columns": [
            {"data" : "DT_RowIndex" , "className": "text-center", "searchable": false, "orderable": false},
            {"data" : "name_th"},
            {"data" : "position_th"},
            {"data" : "type"},
            {"data" : "sort_id"},
            {"data" : "status"},
            { "data": "action","className":"action text-center","searchable" : false , "orderable" : false }
        ]
    });
    $('body').on('click','.btn-add',function(data){
        ShowModal('ModalAdd');
    });
    $('body').on('click','.btn-edit',function(data){
        var btn = $(this);
        btn.button('loading');
        var id = $(this).data('id');
        $('#edit_id').val(id);
        $.ajax({
            method : "GET",
            url : url_gb+"/admin/Personnel/"+id,
            dataType : 'json'
        }).done(function(rec){
            $('#edit_photo').closest('#orak_edit_photo').html('<div id="edit_photo" orakuploader="on"></div>');
            $('#org_photo').val(rec.photo);
            if(rec.photo){
                var max_file = 0;
                var file = [];
                    file[0] = rec.photo;
                var photo = rec.photo;
            }else{
                var max_file = 1;
                var file = [];
                var photo = rec.photo;
            }
            $('#edit_photo').orakuploader({
                orakuploader_path               : url_gb+'/',
                orakuploader_ckeditor           : false,
                orakuploader_use_dragndrop      : true,
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
                orakuploader_attach_images      : file,
                orakuploader_field_name         : 'photo',
                orakuploader_finished           : function(){

                }
            });
            $('#edit_name_th').val(rec.name_th);
            $('#edit_name_en').val(rec.name_en);
            $('#edit_position_th').val(rec.position_th);
            $('#edit_position_en').val(rec.position_en);
            CKEDITOR.instances['edit_detail_th'].setData(rec.detail_th);
            CKEDITOR.instances['edit_detail_en'].setData(rec.detail_en);
            $('#edit_sort_id').val(rec.sort_id);
            if(rec.status=='1'){
                $('#edit_status').prop('checked','checked').closest('label').addClass('checked');
            }else{
                $('#edit_status').removeAttr('checked').closest('label').removeClass('checked');
            }
            $('#edit_type').val(rec.type);
            $('.select2').select2();                          
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
            
            name_th: {
                required: true,
            },
        },
        messages: {
            
            name_th: {
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
                url : url_gb+"/admin/Personnel",
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
            
            name_th: {
                required: true,
            },
        },
        messages: {
            
            name_th: {
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
                url : url_gb+"/admin/Personnel/"+id,
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
                url : url_gb+"/admin/Personnel/Delete/"+id,
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
    $('#add_type').select2();
    $('#edit_type').select2();

    $('#add_photo').orakuploader({
        orakuploader_path               : url_gb+'/',
        orakuploader_ckeditor           : false,
        orakuploader_use_dragndrop      : true,
        orakuploader_main_path          : 'uploads/temp/',
        orakuploader_thumbnail_path     : 'uploads/temp/',
        orakuploader_thumbnail_real_path: asset_gb+'uploads/temp/',
        orakuploader_add_image          : asset_gb+'images/add.png',
        orakuploader_loader_image       : asset_gb+'images/loader.gif',
        orakuploader_no_image           : asset_gb+'images/no-image.jpg',
        orakuploader_add_label          : 'เลือกรูปภาพ',
        orakuploader_use_rotation       : false,
        orakuploader_maximum_uploads    : 1,
        orakuploader_hide_on_exceed     : true,
        orakuploader_field_name         : 'photo',
        orakuploader_finished           : function(){

        }
    });

    CKEDITOR.replace('add_detail_th');
    CKEDITOR.replace('edit_detail_th');
    CKEDITOR.replace('add_detail_en');
    CKEDITOR.replace('edit_detail_en');

</script>
@endsection