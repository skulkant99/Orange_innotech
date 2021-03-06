﻿@extends('Admin.layouts.layout')
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
                                <table id="TableList" class="table table-striped table-no-bordered table-hover" style="width:100%;cellspacing:0">
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                        <th>name</th>
                                        <th>fund</th>
                                        <th>gain</th>
                                        <th>result</th>
                                        <th>Indicator</th>
                                        <th>type</th>
                                        <th>date</th>
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
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ url('admin/Performance') }}" method="POST" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">เพิ่ม {{$title_page}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <label for="add_file">ไฟล์</label>
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="file" name="file" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <div class="preview_file"></div>                                    
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="type" id="type" value="{{$fund_short_name}}"> 
                        <div class="form-group">
                            <label for="add_date">ข้อมูล ณ วันที่</label>
                            <div class="input-group" >
                                <input type="text" class="form-control" name="date" id="add_start_at"  placeholder="start_at">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                        </div>
  
                {{-- <div class="form-group">
                    <label for="add_name">name</label>
                    <input type="text" class="form-control" name="name" id="add_name"  placeholder="name">
                </div> --}}
        
                {{-- <div class="form-group">
                    <label for="add_fund">fund</label>
                    <input type="text" class="form-control number-only" name="fund" id="add_fund"  placeholder="fund">
                </div>
        
                <div class="form-group">
                    <label for="add_gain">gain</label>
                    <input type="text" class="form-control number-only" name="gain" id="add_gain"  placeholder="gain">
                </div>
        
                <div class="form-group">
                    <label for="add_result">result</label>
                    <input type="text" class="form-control number-only" name="result" id="add_result"  placeholder="result">
                </div>
        
                <div class="form-group">
                    <label for="add_Indicator">Indicator</label>
                    <input type="text" class="form-control number-only" name="Indicator" id="add_Indicator"  placeholder="Indicator">
                </div>
        
                <div class="form-group">
                    <label for="add_type">type</label>
                    <input type="text" class="form-control number-only" name="type" id="add_type"  placeholder="type">
                </div>
        
                <div class="form-group">
                    <label for="add_date">date</label>
                    <input type="text" class="form-control" name="date" id="add_date"  placeholder="date">
                </div>
         --}}
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Import File</button>
                    </div>
               
            </form>
        </div>
    </div>
</div>


<div class="modal" id="ModalEdit"  role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <input type="hidden" name="edit_id" id="edit_id">
            <form id="FormEdit">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">แก้ไขข้อมูล {{$title_page}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    
                <div class="form-group">
                    <label for="edit_name">name</label>
                    <input type="text" class="form-control" name="name" id="edit_name"  placeholder="name">
                </div>
        
                <div class="form-group">
                    <label for="edit_fund">fund</label>
                    <input type="text" class="form-control number-only" name="fund" id="edit_fund"  placeholder="fund">
                </div>
        
                <div class="form-group">
                    <label for="edit_gain">gain</label>
                    <input type="text" class="form-control number-only" name="gain" id="edit_gain"  placeholder="gain">
                </div>
        
                <div class="form-group">
                    <label for="edit_result">result</label>
                    <input type="text" class="form-control number-only" name="result" id="edit_result"  placeholder="result">
                </div>
        
                <div class="form-group">
                    <label for="edit_Indicator">Indicator</label>
                    <input type="text" class="form-control number-only" name="Indicator" id="edit_Indicator"  placeholder="Indicator">
                </div>
        
                <div class="form-group">
                    <label for="edit_type">type</label>
                    <input type="text" class="form-control number-only" name="type" id="edit_type"  placeholder="type">
                </div>
        
                <div class="form-group">
                    <label for="edit_date">date</label>
                    <input type="text" class="form-control" name="date" id="edit_date"  placeholder="date">
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
            "url": url_gb+"/admin/Performance/Lists",
            "data": function ( d ) {
                d.type = $('#type').val();
                // d.custom = $('#myInput').val();
                // etc
            }
        },
        "columns": [
            {"data" : "DT_RowIndex" , "className": "text-center", "searchable": false, "orderable": false},
            {"data" : "name"},
            {"data" : "fund"},
            {"data" : "gain"},
            {"data" : "result"},
            {"data" : "Indicator"},
            {"data" : "type"},
            {"data" : "date"},
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
            url : url_gb+"/admin/Performance/"+id,
            dataType : 'json'
        }).done(function(rec){
            $('#edit_name').val(rec.name);
            $('#edit_fund').val(rec.fund);
            $('#edit_gain').val(rec.gain);
            $('#edit_result').val(rec.result);
            $('#edit_Indicator').val(rec.Indicator);
            $('#edit_type').val(rec.type);
            $('#edit_date').val(rec.date);
            
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
                url : url_gb+"/admin/Performance",
                dataType : 'json',
                enctype: 'multipart/form-data',
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
                url : url_gb+"/admin/Performance/"+id,
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
                url : url_gb+"/admin/Performance/Delete/"+id,
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
  
    
</script>
<script src="{{asset('assets/admin/js/jquery.datetimepicker.full.js')}}"></script>
<script type="text/javascript">   
    $(function(){
         
        $.datetimepicker.setLocale('th'); // ต้องกำหนดเสมอถ้าใช้ภาษาไทย และ เป็นปี พ.ศ.
   
        // กรณีใช้แบบ input
        $("#add_start_at").datetimepicker({
            timepicker:true,
            format:'Y-m-d',  // กำหนดรูปแบบวันที่ ที่ใช้ เป็น 00-00-0000            
            lang:'th',  // ต้องกำหนดเสมอถ้าใช้ภาษาไทย และ เป็นปี พ.ศ.
          
        });    
    });
</script>

@endsection