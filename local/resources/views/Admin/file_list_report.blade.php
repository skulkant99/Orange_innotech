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
                                        <th>ชื่อ</th>
                                        <th>เดือน</th>
                                        <th>ปี</th>
                                        <th>ไฟล์</th>
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
    <div class="modal-dialog" role="document" style="max-width:50%;max-height:50%;">
        <div class="modal-content">
            <form id="FormAdd">
                <input type="hidden" name="file_type_id" value="{{$id}}" >
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">เพิ่ม {{$title_page}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    
                <div class="form-group">
                    <label for="add_name_th">ชื่อ(TH)</label>
                    <input type="text" class="form-control" name="name_th" id="add_name_th" required="" placeholder="ชื่อ(TH)">
                </div>
        
                <div class="form-group">
                    <label for="add_name_en">ชื่อ(EN)</label>
                    <input type="text" class="form-control" name="name_en" id="add_name_en"  placeholder="ชื่อ(EN)">
                </div>
        
                <div class="form-group">
                    <label for="add_file">ไฟล์</label>
                    <input type="file" class="upload_file" id="add_file">
                    <input type="text" class="value_name_file" name="file">
                    <div class="preview_file"></div>
                </div>
        
                <div class="form-group">
                    <label for="add_year_no">ปี</label>
                    <select name="year_no" class="select2 form-control" tabindex="-1" data-placeholder="Select year_no" id="add_year_no"  >
                        <option value="">Select ปี</option>
                        @foreach($Years as $Year)
                        <option value="{{$Year->year_no}}">{{$Year->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                        <label for="add_month_no">เดือน</label>
                        <select name="month_no" class="select2 form-control" tabindex="-1" data-placeholder="Select month_no" id="add_month_no"  >
                            <option value="">Select เดือน</option>
                            @foreach($Months as $Month)
                            <option value="{{$Month->month_no}}">{{$Month->name}}</option>
                            @endforeach
                        </select>
                </div>
        
                <div class="form-group">
                    <label for="add_sort_id">ลำดับ</label>
                    <input type="text" class="form-control number-only" name="sort_id" id="add_sort_id"  placeholder="sort_id">
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
    <div class="modal-dialog" role="document" style="max-width:50%;max-height:50%;">
        <div class="modal-content">
            <input type="hidden" name="edit_id" id="edit_id">
            <form id="FormEdit">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">แก้ไขข้อมูล {{$title_page}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    
                <div class="form-group">
                    <label for="edit_name_th">ชื่อ(TH)</label>
                    <input type="text" class="form-control" name="name_th" id="edit_name_th" required="" placeholder="ชื่อ(TH)">
                </div>
        
                <div class="form-group">
                    <label for="edit_name_en">ชื่อ(EN)</label>
                    <input type="text" class="form-control" name="name_en" id="edit_name_en"  placeholder="ชื่อ(EN)">
                </div>
        
                <div class="form-group">
                    <label for="edit_file">ไฟล์</label>
                    <input type="file" class="upload_file" id="edit_file">
                    <input type="text" class="value_name_file edit_value_name_file_file" name="file">
                    <div class="preview_file preview_file_file"></div>
                </div>
        
                <div class="form-group">
                    <label for="edit_year_no">ปี</label>
                    <select name="year_no" data-placeholder="Select year_no" tabindex="-1" class="select2 form-control" id="edit_year_no"  >
                        <option value="">Select year_no</option>
                        @foreach($Years as $Year)
                        <option value="{{$Year->year_no}}">{{$Year->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="edit_month_no">เดือน</label>
                    <select name="month_no" class="select2 form-control" tabindex="-1" data-placeholder="Select month_no" id="edit_month_no"  >
                        <option value="">Select เดือน</option>
                        @foreach($Months as $Month)
                        <option value="{{$Month->month_no}}">{{$Month->name}}</option>
                        @endforeach
                    </select>
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
            "url": url_gb+"/admin/FileListReport/Lists",
            "data": function ( d ) {
                d.file_type_id = {{$id}}
                // d.custom = $('#myInput').val();
                // etc
            }
        },
        "columns": [
            {"data" : "DT_RowIndex" , "className": "text-center", "searchable": false, "orderable": false},
            {"data" : "name_th"},
            {"data" : "years_name"},
            {"data" : "months_name"},
            {"data" : "file"},
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
            url : url_gb+"/admin/FileListReport/"+id,
            dataType : 'json'
        }).done(function(rec){
            $('#edit_name_th').val(rec.name_th);
            $('#edit_name_en').val(rec.name_en);
            $('.edit_value_name_file_file').val(rec.file);$('.preview_file_file').html('<img src="'+asset_gb+'uploads/'+rec.file+'" class="preview-file">');$('#edit_year_no').val(rec.year_no).trigger('change');
            $('#edit_sort_id').val(rec.sort_id);
            if(rec.status=='1'){
                $('#edit_status').prop('checked','checked').closest('label').addClass('checked');
            }else{
                $('#edit_status').removeAttr('checked').closest('label').removeClass('checked');
            }
                                        
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
            /*
            if(CKEDITOR!==undefined){
                for ( instance in CKEDITOR.instances ){
                    CKEDITOR.instances[instance].updateElement();
                }
            }
            */
            var btn = $(form).find('[type="submit"]');
            var data_ar = removePriceFormat(form,$(form).serializeArray());
            btn.button("loading");
            $.ajax({
                method : "POST",
                url : url_gb+"/admin/FileListReport",
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
            /*
            if(CKEDITOR!==undefined){
                for ( instance in CKEDITOR.instances ){
                    CKEDITOR.instances[instance].updateElement();
                }
            }
            */
            var btn = $(form).find('[type="submit"]');
            var id = $('#edit_id').val();
            btn.button("loading");
            $.ajax({
                method : "POST",
                url : url_gb+"/admin/FileListReport/"+id,
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
                url : url_gb+"/admin/FileListReport/Delete/"+id,
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

    

        $('#add_year_no').select2();
        $('#edit_year_no').select2();
        $('#add_month_no').select2();
        $('#edit_month_no').select2()

</script>
@endsection