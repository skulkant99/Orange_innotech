@extends('Admin.layouts.layout')
@section('css_bottom')
@endsection
@section('body')
<style>
    .funds_table_perf {
        background-color: #f9f9f9;
        color: black;
    }
    .table-bordered {
        border: 1px solid #dee2e6;
    }
    .funds_table_perf thead {
        background-color: #eb6b2f;
        color: white;
        font-size: 1.1em;
    }
    
    .bgblue {
        background-color: #379494;
        color: white;
    }
    .risk_lower {
        background-color: #d7e4bc;
    }
    .risk_low {
        background-color: #92cf4e;
    }
    .risk_mid {
        background-color: #ffc100;
    }
    .risk_high {
        background-color: #ea0027;
        color: white;
    }
    .funds_table thead {
        background-color: #379494;
        color: white;
        font-size: 1.1em;
    }
    .funds_table.table-bordered th, .funds_table.table-bordered td {
        border: 1px solid #464646;
    }
   
</style>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="content">
                        <h4 class="title">
                            กองทุนเปิดเอคควิตี้โปร หุ้นระยะยาว 
                        </h4>
                        @foreach ($fund_info_l as $K_fund_info_l => $V_fund_info_l)
                                    @switch($V_fund_info_l->sort_id)
                                        @case(1)
                                            <div class="content">
                                                <div class="nav-tabs-navigation">
                                                    <div class="nav-tabs-wrapper">
                                                        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                                            <li class="nav-item">
                                                                <a href="#pill1" class="nav-link active" data-toggle="tab" aria-expanded="true">ไทย</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#pill2" class="nav-link" data-toggle="tab" aria-expanded="false">อังกฤษ</a>
                                                            </li>                                            
                                                        </ul>
                                                    </div>                                   
                                                </div> 
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="pill1" aria-expanded="true">
                                                        {!!($V_fund_info_l->detail_th)!!}
                                                        <button class="btn btn-danger btn-edit pull-right" data-id="{{$V_fund_info_l->id}}">
                                                                แก้ไขข้อมูล
                                                        </button> 
                                                    </div>
                                                    <div class="tab-pane" id="pill2" aria-expanded="false">
                                                        {!!($V_fund_info_l->detail_en)!!}
                                                        <button class="btn btn-danger btn-edit pull-right" data-id="{{$V_fund_info_l->id}}">
                                                                แก้ไขข้อมูล
                                                        </button> 
                                                    </div>
                                                </div> 
                                            </div>
                                            @break
                                        @case(2)
                                            <div class="content">
                                                <div class="nav-tabs-navigation">
                                                    <div class="nav-tabs-wrapper">
                                                        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                                            <li class="nav-item">
                                                                <a href="#pill3" class="nav-link active" data-toggle="tab" aria-expanded="true">ไทย</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#pill4" class="nav-link" data-toggle="tab" aria-expanded="false">อังกฤษ</a>
                                                            </li>                                            
                                                        </ul>
                                                    </div>                                   
                                                </div> 
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="pill3" aria-expanded="true">
                                                        {!!($V_fund_info_l->detail_th)!!}
                                                        <button class="btn btn-danger btn-edit pull-right" data-id="{{$V_fund_info_l->id}}">
                                                                แก้ไขข้อมูล
                                                        </button> 
                                                    </div>
                                                    <div class="tab-pane" id="pill4" aria-expanded="false">
                                                        {!!($V_fund_info_l->detail_en)!!}
                                                        <button class="btn btn-danger btn-edit pull-right" data-id="{{$V_fund_info_l->id}}">
                                                                แก้ไขข้อมูล
                                                        </button> 
                                                    </div>
                                                </div> 
                                            </div>
                                            @break
                                        @case(3)
                                            <div class="content">
                                                <div class="nav-tabs-navigation">
                                                    <div class="nav-tabs-wrapper">
                                                        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                                            <li class="nav-item">
                                                                <a href="#pill5" class="nav-link active" data-toggle="tab" aria-expanded="true">ไทย</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#pill6" class="nav-link" data-toggle="tab" aria-expanded="false">อังกฤษ</a>
                                                            </li>                                            
                                                        </ul>
                                                    </div>                                   
                                                </div> 
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="pill5" aria-expanded="true">
                                                        {!!($V_fund_info_l->detail_th)!!}
                                                        <button class="btn btn-danger btn-edit pull-right" data-id="{{$V_fund_info_l->id}}">
                                                                แก้ไขข้อมูล
                                                        </button> 
                                                    </div>
                                                    <div class="tab-pane" id="pill6" aria-expanded="false">
                                                        {!!($V_fund_info_l->detail_en)!!}
                                                        <button class="btn btn-danger btn-edit pull-right" data-id="{{$V_fund_info_l->id}}">
                                                                แก้ไขข้อมูล
                                                        </button> 
                                                    </div>
                                                </div> 
                                            </div>
                                            @break
                                      
                                        @default
                                            
                                    @endswitch
                                    
                        @endforeach
                        <div class="detail_content">
                                <h2><img src="http://localhost/innotech/images/funds_price_detail_12.png"> เอกสารข้อมูลกองทุน (ดาวน์โหลด)</h2>
                                <div class="list_download_ep">
                                        
                                 
                                </div>
                            </div>
                   
                    </div>
                </div>
                <div class="card">
                        <div class="content">
                            <h4 class="title">
                                กองทุนเปิดโซลาริสตราสารทุนเพื่อการเลี้ยงชีพ 
                            </h4>
                            @foreach ($fund_info_r as $K_fund_info_r => $V_fund_info_r)
                                        @switch($V_fund_info_r->sort_id)
                                            @case(1)
                                                <div class="content">
                                                    <div class="nav-tabs-navigation">
                                                        <div class="nav-tabs-wrapper">
                                                            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                                                <li class="nav-item">
                                                                    <a href="#pill7" class="nav-link active" data-toggle="tab" aria-expanded="true">ไทย</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="#pill8" class="nav-link" data-toggle="tab" aria-expanded="false">อังกฤษ</a>
                                                                </li>                                            
                                                            </ul>
                                                        </div>                                   
                                                    </div> 
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="pill7" aria-expanded="true">
                                                            {!!($V_fund_info_r->detail_th)!!}
                                                            <button class="btn btn-danger btn-edit pull-right" data-id="{{$V_fund_info_r->id}}">
                                                                    แก้ไขข้อมูล
                                                            </button> 
                                                        </div>
                                                        <div class="tab-pane" id="pill8" aria-expanded="false">
                                                            {!!($V_fund_info_r->detail_en)!!}
                                                            <button class="btn btn-danger btn-edit pull-right" data-id="{{$V_fund_info_r->id}}">
                                                                    แก้ไขข้อมูล
                                                            </button> 
                                                        </div>
                                                    </div> 
                                                </div>
                                                @break
                                            @case(2)
                                                <div class="content">
                                                    <div class="nav-tabs-navigation">
                                                        <div class="nav-tabs-wrapper">
                                                            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                                                <li class="nav-item">
                                                                    <a href="#pill9" class="nav-link active" data-toggle="tab" aria-expanded="true">ไทย</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="#pil20" class="nav-link" data-toggle="tab" aria-expanded="false">อังกฤษ</a>
                                                                </li>                                            
                                                            </ul>
                                                        </div>                                   
                                                    </div> 
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="pill9" aria-expanded="true">
                                                            {!!($V_fund_info_r->detail_th)!!}
                                                            <button class="btn btn-danger btn-edit pull-right" data-id="{{$V_fund_info_r->id}}">
                                                                    แก้ไขข้อมูล
                                                            </button> 
                                                        </div>
                                                        <div class="tab-pane" id="pil20" aria-expanded="false">
                                                            {!!($V_fund_info_r->detail_en)!!}
                                                            <button class="btn btn-danger btn-edit pull-right" data-id="{{$V_fund_info_r->id}}">
                                                                    แก้ไขข้อมูล
                                                            </button> 
                                                        </div>
                                                    </div> 
                                                </div>
                                                @break
                                            @case(3)
                                                <div class="content">
                                                    <div class="nav-tabs-navigation">
                                                        <div class="nav-tabs-wrapper">
                                                            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                                                <li class="nav-item">
                                                                    <a href="#pil21" class="nav-link active" data-toggle="tab" aria-expanded="true">ไทย</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="#pil22" class="nav-link" data-toggle="tab" aria-expanded="false">อังกฤษ</a>
                                                                </li>                                            
                                                            </ul>
                                                        </div>                                   
                                                    </div> 
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="pil21" aria-expanded="true">
                                                            {!!($V_fund_info_r->detail_th)!!}
                                                            <button class="btn btn-danger btn-edit pull-right" data-id="{{$V_fund_info_r->id}}">
                                                                    แก้ไขข้อมูล
                                                            </button> 
                                                        </div>
                                                        <div class="tab-pane" id="pil22" aria-expanded="false">
                                                            {!!($V_fund_info_r->detail_en)!!}
                                                            <button class="btn btn-danger btn-edit pull-right" data-id="{{$V_fund_info_r->id}}">
                                                                    แก้ไขข้อมูล
                                                            </button> 
                                                        </div>
                                                    </div> 
                                                </div>
                                                @break
                                            @default
                                                
                                        @endswitch
                            @endforeach
                            <div class="detail_content">
                                    <h2><img src="http://localhost/innotech/images/funds_price_detail_12.png"> เอกสารข้อมูลกองทุน (ดาวน์โหลด)</h2>
                                        <button class="btn btn-success btn-add pull-right" >
                                            + เพิ่มข้อมูล
                                        </button>
                                    <div class="list_download_ep">
                                            
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="text-primary">
                                                        <tr>
                                                            <th>ชื่อ</th>
                                                            <th>ไฟล์</th>
                                                            <th></th>
                                                        
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
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
<div class="modal" id="ModalAddFile"  role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document" >
            <div class="modal-content">
                <form id="FormAddFile">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">เพิ่มไฟล์</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        
                    <div class="form-group">
                        <label for="add_file">ไฟล์</label>
                        <input type="file" class="upload_file" id="add_file">
                        <input type="text" class="value_name_file" name="file">
                        <div class="preview_file"></div>
                    </div>
                    

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
                    <label for="add_detail_th">รายละเอียด(TH)</label>
                    <textarea id="add_detail_th" name="detail_th" class="form-control"></textarea>
                </div>
        
                <div class="form-group">
                    <label for="add_detail_en">รายละเอียด(EN)</label>
                    <textarea id="add_detail_en" name="detail_en" class="form-control"></textarea>
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
    <div class="modal-dialog" role="document" style="max-width:70%;max-height:70%;">
        <div class="modal-content">
            <input type="hidden" name="edit_id" id="edit_id">
            <form id="FormEdit">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">แก้ไขข้อมูล {{$title_page}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    
                <div class="form-group">
                    <label for="edit_detail_th">รายละเอียด(TH)</label>
                    <textarea id="edit_detail_th" name="detail_th" class="form-control"></textarea>
                </div>
        
                <div class="form-group">
                    <label for="edit_detail_en">รายละเอียด(EN)</label>
                    <textarea id="edit_detail_en" name="detail_en" class="form-control"></textarea>
                </div>
        
                <div class="form-group">
                    <label for="edit_sort_id">ลำดับ</label>
                    <input type="text" class="form-control number-only" name="sort_id" id="edit_sort_id"  placeholder="sort_id">
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
            "url": url_gb+"/admin/FundInformation/Lists",
            "data": function ( d ) {
                //d.myKey = "myValue";
                // d.custom = $('#myInput').val();
                // etc
            }
        },
        "columns": [
            {"data" : "DT_RowIndex" , "className": "text-center", "searchable": false, "orderable": false},
            {"data" : "detail_th"},
            {"data" : "detail_en"},
            {"data" : "sort_id"},
            {"data" : "status"},
            { "data": "action","className":"action text-center","searchable" : false , "orderable" : false }
        ]
    });
    $('body').on('click','.btn-add',function(data){
        ShowModal('ModalAddFile');
    });
    $('body').on('click','.btn-edit',function(data){
        var btn = $(this);
        btn.button('loading');
        var id = $(this).data('id');
        $('#edit_id').val(id);
        $.ajax({
            method : "GET",
            url : url_gb+"/admin/FundInformation/"+id,
            dataType : 'json'
        }).done(function(rec){
            CKEDITOR.instances['edit_detail_th'].setData(rec.detail_th);
            CKEDITOR.instances['edit_detail_en'].setData(rec.detail_en);
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
            
            detail_th: {
                required: true,
            },
        },
        messages: {
            
            detail_th: {
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
                url : url_gb+"/admin/FundInformation",
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
    $('#FormAddFile').validate({
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

            var btn = $(form).find('[type="submit"]');
            var data_ar = removePriceFormat(form,$(form).serializeArray());
            btn.button("loading");
            $.ajax({
                method : "POST",
                url : url_gb+"/admin/File/Mutual",
                dataType : 'json',
                data : $(form).serialize()
            }).done(function(rec){
                btn.button("reset");
                if(rec.status==1){
                    TableList.api().ajax.reload();
                    resetFormCustom(form);
                    swal(rec.title,rec.content,"success");
                    $('#ModalAddFile').modal('hide');
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
            
            detail_th: {
                required: true,
            },
        },
        messages: {
            
            detail_th: {
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
                url : url_gb+"/admin/FundInformation/"+id,
                dataType : 'json',
                data : $(form).serialize()
            }).done(function(rec){
                btn.button("reset");
                if(rec.status==1){
                    TableList.api().ajax.reload();
                    resetFormCustom(form);
                    swal(rec.title,rec.content,"success");
                    swal({
                        text: rec.title,
                        title: rec.content,
                        type: "success",
                        icon: "success",
                    }).then(function() {
                        // Redirect
                        window.location.href =  "{{url('admin/Mutual')}}";	
                    });
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
                url : url_gb+"/admin/FundInformation/Delete/"+id,
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

    CKEDITOR.replace('add_detail_th');
    CKEDITOR.replace('edit_detail_th');
CKEDITOR.replace('add_detail_en');
    CKEDITOR.replace('edit_detail_en');

</script>
@endsection