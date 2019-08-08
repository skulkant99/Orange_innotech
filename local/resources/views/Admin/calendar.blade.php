@extends('Admin.layouts.layout')
@section('css_bottom')
@endsection
@section('body')
<link href="{{asset('assets/admin/css/datepicker.css')}}" rel="stylesheet">
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
                                <table id="TableList" class="table" style="width:100%;cellspacing:0">
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                        <th>หัวเรื่อง</th>
                                        <th>วัน/เวลา/เริ่ม</th>
                                        <th>วัน/เวลา/สิ้นสุด</th>
                                        <th>สถานที่</th>
                                        <th>ที่นั่ง</th>
                                        <th style="width:10%">ประเภท</th>
                                        <th>สถานะ</th>
                                        <th>ลำดับ</th>
                                        <th style="width:10%"></th>
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
                    <label for="add_photo">แบนเนอร์</label>
                    <div id="orak_add_photo">
                        <div id="add_photo" orakuploader="on"></div>
                    </div>
                </div>
                    
                <div class="form-group">
                    <label for="add_name_th">หัวเรื่อง(TH)</label>
                    <input type="text" class="form-control" name="name_th" id="add_name_th"  placeholder="name_th">
                </div>
        
                <div class="form-group">
                    <label for="add_name_en">หัวเรื่อง(EN)</label>
                    <input type="text" class="form-control" name="name_en" id="add_name_en"  placeholder="name_en">
                </div>
               

                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="label-control">วัน/เวลา/เริ่ม</label>
                        <div class="input-group" >
                            <input type="text" class="form-control" name="start_at" id="add_start_at"  placeholder="start_at">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="label-control">วัน/เวลา/สิ้นสุด</label>
                        <div class="input-group" >
                            <input type="text" class="form-control " name="end_at" id="add_end_at"  placeholder="end_at">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
                   
        
                <div class="form-group">
                    <label for="add_location_th">สถานที่(TH)</label>
                    <input type="text" class="form-control" name="location_th" id="add_location_th"  placeholder="location_th">
                </div>
        
                <div class="form-group">
                    <label for="add_location_en">สถานที่(EN)</label>
                    <input type="text" class="form-control" name="location_en" id="add_location_en"  placeholder="location_en">
                </div>
        
                <div class="form-group">
                    <label for="add_seat">ที่นั่ง</label>
                    <input type="text" class="form-control number-only" name="seat" id="add_seat"  placeholder="seat">
                </div>

                <div class="form-group">
                    <label for="add_link">ลิงค์</label>
                    <input type="text" class="form-control number-only" name="link" id="add_link"  placeholder="ลิงค์">
                </div>

                <div class="form-group">
                        <label for="add_sort_id">ลำดับ</label>
                        <input type="text" class="form-control" name="sort_id" id="add_sort_id"  placeholder="sort_id">
                </div>
                
                <div class="form-check">
                    <label for="add_register_type" class="checkbox form-check-label">
                        <input type="checkbox" class="form-check-input" data-toggle="checkbox" name="register_type" id="add_register_type"  value="F" checked="checked"> ปิดลงทะเบียน
                    </label>
                </div>
        
                <div class="form-check">
                    <label for="add_type" class="checkbox form-check-label">
                        <input type="checkbox" class="form-check-input" data-toggle="checkbox" name="type" id="add_type"  value="M" checked="checked"> สำหรับสมาชิก
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
                    <label for="edit_photo">แบนเนอร์(desktop)</label>
                    <div id="orak_edit_photo">
                        <div id="edit_photo" orakuploader="on"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_name_th">หัวเรื่อง(TH)</label>
                    <input type="text" class="form-control" name="name_th" id="edit_name_th"  placeholder="name_th">
                </div>
        
                <div class="form-group">
                    <label for="edit_name_en">หัวเรื่อง(EN)</label>
                    <input type="text" class="form-control" name="name_en" id="edit_name_en"  placeholder="name_en">
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="label-control">วัน/เวลา/เริ่ม</label>
                        <div class="input-group" >
                            <input type="text" class="form-control " name="start_at" id="edit_start_at"  placeholder="start_at">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                            <label class="label-control">วัน/เวลา/สิ้นสุด</label>
                            <div class="input-group" >
                                <input type="text" class="form-control " name="end_at" id="edit_end_at"  placeholder="end_at">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                    </div>
                </div>
                        
                <div class="form-group">
                    <label for="edit_location_th">สถานที่(TH)</label>
                    <input type="text" class="form-control" name="location_th" id="edit_location_th"  placeholder="location_th">
                </div>
        
                <div class="form-group">
                    <label for="edit_location_en">สถานที่(EN)</label>
                    <input type="text" class="form-control" name="location_en" id="edit_location_en"  placeholder="location_en">
                </div>
        
                <div class="form-group">
                    <label for="edit_seat">ที่นั่ง</label>
                    <input type="text" class="form-control number-only" name="seat" id="edit_seat"  placeholder="seat">
                </div>

                <div class="form-group">
                    <label for="edit_link">ลิงค์</label>
                    <input type="text" class="form-control" name="link" id="edit_link"  placeholder="ลิงค์">
                </div>

                <div class="form-group">
                        <label for="edit_sort_id">ลำดับ</label>
                        <input type="text" class="form-control" name="sort_id" id="edit_sort_id"  placeholder="sort_id">
                </div>

                <div class="form-check">
                        <label for="edit_register_type" class="checkbox form-check-label">
                            <input type="checkbox" class="form-check-input" data-toggle="checkbox" name="register_type" id="edit_register_type"  value="F" checked="checked"> ปิดลงทะเบียน
                        </label>
                </div>

                <div class="form-check">
                    <label for="edit_type" class="checkbox form-check-label">
                        <input type="checkbox" class="form-check-input" data-toggle="checkbox" name="type" id="edit_type"  value="M"> สำหรับสมาชิก
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
@section('js_bottom')
<script src="{{asset('assets/global/plugins/orakuploader/orakuploader.js')}}"></script>
<script>

     var TableList = $('#TableList').dataTable({
        "ajax": {
            "url": url_gb+"/admin/Calendar/Lists",
            "data": function ( d ) {
                //d.myKey = "myValue";
                // d.custom = $('#myInput').val();
                // etc
            }
        },
        "columns": [
            {"data" : "DT_RowIndex" , "className": "text-center", "searchable": false, "orderable": false},
            {"data" : "name_th"},
            {"data" : "start_at"},
            {"data" : "end_at"},
            {"data" : "location_th"},
            {"data" : "seat", "className": "text-center"},
            {"data" : "type"},
            {"data" : "status"},
            {"data" : "sort_id"},
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
            url : url_gb+"/admin/Calendar/"+id,
            dataType : 'json'
        }).done(function(rec){
            $('#edit_name_th').val(rec.name_th);
            $('#edit_name_en').val(rec.name_en);
            $('#edit_start_at').val(rec.start_at);
            $('#edit_end_at').val(rec.end_at);
            $('#edit_location_th').val(rec.location_th);
            $('#edit_location_en').val(rec.location_en);
            $('#edit_seat').val(rec.seat);
            $('#edit_link').val(rec.link);
            if(rec.type=='M'){
                $('#edit_type').prop('checked','checked').closest('label').addClass('checked');
            }else{
                $('#edit_type').removeAttr('checked').closest('label').removeClass('checked');
            }
            if(rec.status=='1'){
                $('#edit_status').prop('checked','checked').closest('label').addClass('checked');
            }else{
                $('#edit_status').removeAttr('checked').closest('label').removeClass('checked');
            }
            if(rec.register_type=='F'){
                $('#edit_register_type').prop('checked','checked').closest('label').addClass('checked');
            }else{
                $('#edit_register_type').removeAttr('checked').closest('label').removeClass('checked');
            }
            $('#edit_sort_id').val(rec.sort_id);
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
            
        },
        messages: {
            
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
                url : url_gb+"/admin/Calendar",
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
            
        },
        messages: {
            
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
                url : url_gb+"/admin/Calendar/"+id,
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
                url : url_gb+"/admin/Calendar/Delete/"+id,
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

    
</script>
 <script src="{{asset('assets/admin/js/jquery.datetimepicker.full.js')}}"></script>
<script type="text/javascript">   
    $(function(){
         
        $.datetimepicker.setLocale('th'); // ต้องกำหนดเสมอถ้าใช้ภาษาไทย และ เป็นปี พ.ศ.
         
        // กรณีใช้แบบ inline
      /*  $("#testdate4").datetimepicker({
            timepicker:false,
            format:'d-m-Y',  // กำหนดรูปแบบวันที่ ที่ใช้ เป็น 00-00-0000            
            lang:'th',  // ต้องกำหนดเสมอถ้าใช้ภาษาไทย และ เป็นปี พ.ศ.
            inline:true  
        });    */   
         
         
        // กรณีใช้แบบ input
        $("#add_start_at").datetimepicker({
            timepicker:true,
            format:'d-m-Y : H:i',  // กำหนดรูปแบบวันที่ ที่ใช้ เป็น 00-00-0000            
            lang:'th',  // ต้องกำหนดเสมอถ้าใช้ภาษาไทย และ เป็นปี พ.ศ.
            onSelectDate:function(dp,$input){
                var yearT=new Date(dp).getFullYear();  
                var yearTH=yearT+543;
                var fulldate=$input.val();
                var fulldateTH=fulldate.replace(yearT,yearTH);
                $input.val(fulldateTH);
            },
        });    
        $("#edit_start_at").datetimepicker({
            timepicker:true,
            format:'d-m-Y : H:i',  // กำหนดรูปแบบวันที่ ที่ใช้ เป็น 00-00-0000            
            lang:'th',  // ต้องกำหนดเสมอถ้าใช้ภาษาไทย และ เป็นปี พ.ศ.
            onSelectDate:function(dp,$input){
                var yearT=new Date(dp).getFullYear();  
                var yearTH=yearT+543;
                var fulldate=$input.val();
                var fulldateTH=fulldate.replace(yearT,yearTH);
                $input.val(fulldateTH);
            },
        });          

        $("#add_end_at").datetimepicker({
            timepicker:true,
            format:'d-m-Y : H:i',  // กำหนดรูปแบบวันที่ ที่ใช้ เป็น 00-00-0000            
            lang:'th',  // ต้องกำหนดเสมอถ้าใช้ภาษาไทย และ เป็นปี พ.ศ.
            onSelectDate:function(dp,$input){
                var yearT=new Date(dp).getFullYear();  
                var yearTH=yearT+543;
                var fulldate=$input.val();
                var fulldateTH=fulldate.replace(yearT,yearTH);
                $input.val(fulldateTH);
            },
        });   
        $("#edit_end_at").datetimepicker({
            timepicker:true,
            format:'d-m-Y : H:i',  // กำหนดรูปแบบวันที่ ที่ใช้ เป็น 00-00-0000            
            lang:'th',  // ต้องกำหนดเสมอถ้าใช้ภาษาไทย และ เป็นปี พ.ศ.
            onSelectDate:function(dp,$input){
                var yearT=new Date(dp).getFullYear();  
                var yearTH=yearT+543;
                var fulldate=$input.val();
                var fulldateTH=fulldate.replace(yearT,yearTH);
                $input.val(fulldateTH);
            },
        });       
        // กรณีใช้กับ input ต้องกำหนดส่วนนี้ด้วยเสมอ เพื่อปรับปีให้เป็น ค.ศ. ก่อนแสดงปฏิทิน
        $("#add_start_at").on("mouseenter mouseleave",function(e){
            var dateValue=$(this).val();
            if(dateValue!=""){
                    var arr_date=dateValue.split("-"); // ถ้าใช้ตัวแบ่งรูปแบบอื่น ให้เปลี่ยนเป็นตามรูปแบบนั้น
                    // ในที่นี้อยู่ในรูปแบบ 00-00-0000 เป็น d-m-Y  แบ่งด่วย - ดังนั้น ตัวแปรที่เป็นปี จะอยู่ใน array
                    //  ตัวที่สอง arr_date[2] โดยเริ่มนับจาก 0 
                    if(e.type=="mouseenter"){
                        var yearT=arr_date[2]-543;
                    }       
                    if(e.type=="mouseleave"){
                        var yearT=parseInt(arr_date[2])+543;
                    }   
                    dateValue=dateValue.replace(arr_date[2],yearT);
                    $(this).val(dateValue);                                                 
            }       
        });
        $("#add_end_at").on("mouseenter mouseleave",function(e){
            var dateValue=$(this).val();
            if(dateValue!=""){
                    var arr_date=dateValue.split("-"); // ถ้าใช้ตัวแบ่งรูปแบบอื่น ให้เปลี่ยนเป็นตามรูปแบบนั้น
                    // ในที่นี้อยู่ในรูปแบบ 00-00-0000 เป็น d-m-Y  แบ่งด่วย - ดังนั้น ตัวแปรที่เป็นปี จะอยู่ใน array
                    //  ตัวที่สอง arr_date[2] โดยเริ่มนับจาก 0 
                    if(e.type=="mouseenter"){
                        var yearT=arr_date[2]-543;
                    }       
                    if(e.type=="mouseleave"){
                        var yearT=parseInt(arr_date[2])+543;
                    }   
                    dateValue=dateValue.replace(arr_date[2],yearT);
                    $(this).val(dateValue);                                                 
            }       
        });
         
         
    });
    </script>
@endsection