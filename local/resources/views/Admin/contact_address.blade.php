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
                                <div class="header">
                                        <h4 class="title"> {{$title_page}}
                                       
    
                                        </h4>
                                    </div>
                                    
                                    <div class="content">
                                        <div class="nav-tabs-navigation">
                                            
                                                <div class="nav-tabs-wrapper">
                                                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                                        <li class="nav-item">
                                                            <a href="#pill1" class="nav-link active" data-toggle="tab" aria-expanded="true">address</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#pill2" class="nav-link" data-toggle="tab" aria-expanded="false">location</a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            
                                        </div>
                                        
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="pill1" aria-expanded="true">
                                                    {!!($address->name_th)!!}
                                                    <button class="btn btn-danger btn-edit pull-right" data-id="{{$address->id}}">
                                                                แก้ไขข้อมูล
                                                    </button> 
                                                </div>
                                                <div class="tab-pane" id="pill2" aria-expanded="false">
                                                        <iframe src="{{$location->name_th}}" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                        <button class="btn btn-danger btn-location pull-right" data-id="{{$location->id}}">
                                                                แก้ไขข้อมูล
                                                        </button> 
                                                </div>
                                            </div>
                                        
                                        
                                    </div>
                            {{-- <h4 class="title">
                                {{$title_page}}
                                
                            </h4>
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                         
                            
                                <form id="FormAddAddres">
                                    <div class="modal-body">
                                        <div class="form-group">
                                                <label for="add_detail">รายละเอียด</label>
                                                    <input type="hidden" name="id" id="id_address" value="{{$address->id}}">
                                                    <textarea id="add_detail" name="name" class="form-control">{{$address->name}}</textarea>                                                       
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">บันทึก</button>
                                    </div>
                                </form>
                             
                                <form id="location">
                                        <div class="modal-body">
                                            <label for="add_name">Location</label>
                                            <div class="input-group mb-3">
                                                
                                                        <input type="hidden" name="id" id="id_location" value="{{$location->id}}">
                                                        <input type="text" class="form-control" placeholder="Location" name="name" id="location" value="{{$location->name}}">
                                                        <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="submit">submit</button>
                                                        </div>
                                                
                                            </div>
                                     </div>
                                </form> 
                                <div class="row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-8">                                         
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.6014016652352!2d100.58535702355938!3d13.742565639946354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29e4fe0372607%3A0xb9728f4227f24a0c!2z4Lit4Liy4LiE4Liy4Lij4Lil4Li04LmA4Lia4Lit4Lij4LmM4LiV4Li14LmJIOC4nuC4peC4suC4i-C5iOC4siDguYHguILguKfguIcg4LiE4Lil4Lit4LiH4LiV4Lix4LiZ4LmA4Lir4LiZ4Li34LitIOC5gOC4guC4lSDguKfguLHguJLguJnguLIg4LiB4Lij4Li44LiH4LmA4LiX4Lie4Lih4Lir4Liy4LiZ4LiE4LijIDEwMTEw!5e0!3m2!1sth!2sth!4v1556525855786!5m2!1sth!2sth" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                 </div> --}}
                       
                                 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection
@section('modal')


    <div class="modal" id="ModalEditAddress"  role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document"  style="max-width:70%;max-height:70%;">
                <div class="modal-content">
                    <input type="hidden" name="edit_id" id="edit_id">
                    <form id="FormEdit">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">แก้ไข {{$title_page}}</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">

                        <div class="form-group">
                                <label for="edit_name_th">รายละเอียด(th)</label>
                                <textarea id="edit_name_th" name="name_th" class="form-control"></textarea>                                                       
                        </div>

                        <div class="form-group">
                                <label for="edit_name_en">รายละเอียด(en)</label>
                                <textarea id="edit_name_en" name="name_en" class="form-control"></textarea>                                                       
                        </div>
                        
                        {{-- <div class="form-group">
                            <label for="edit_name">ชื่อ</label>
                            <input id="edit_name" name="name" class="form-control" placeholder="ชื่อ">
                        </div>

                        <input type="hidden" name="org_photo" id="org_photo">
                        <div class="form-group">
                            <label for="edit_photo">รูปภาพ</label>
                            <div id="orak_edit_photo">
                                <div id="edit_photo" orakuploader="on"></div>
                            </div>
                        </div>  
                        
                        <div class="form-group">
                            <label for="edit_link">ลิงค์</label>
                            <input id="edit_link" name="link" class="form-control" placeholder="ลิงค์">
                        </div>
 
                        <div class="form-group">
                            <label for="add_sort_id">ลำดับ</label>
                            <input type="text" class="form-control number-only" name="sort_id" id="edit_sort_id"  placeholder="ลำดับ">
                        </div>

                        <div class="form-group">
                            <label for="add_status">สถานะ</label>
                            <select  class="form-control number-only select2" name="status" id="edit_status" tabindex="-1" data-placeholder="เลือก สถานะ">
                                <option value="">เลือก</option>
                                <option value="1">ใช้งาน</option>
                                <option value="2">ไม่ใช้งาน</option>
                            </select>
                        </div> --}}

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal" id="ModalEditLocation"  role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document"  style="max-width:70%;max-height:70%;">
                    <div class="modal-content">
                        <input type="hidden" name="edit_id" id="edit_id">
                        <form id="FormEditLocation">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">แก้ไข {{$title_page}}</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
    
                            <div class="form-group">
                                    <label for="edit_location">location</label>
                                    <input id="edit_location" name="name_th" class="form-control">                                                  
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
                "url": url_gb+"/admin/contact/Lists",
                "data": function ( d ) {
                    //d.myKey = "myValue";
                    // d.custom = $('#myInput').val();
                    // etc
                }
            },
            "columns": [
                {"data" : "DT_RowIndex" , "className": "text-center", "searchable": false, "orderable": false},
                {"data" : "name"},
                {"data" : "photo"},
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
                url : url_gb+"/admin/contact/show/"+id,
                dataType : 'json'
            }).done(function(rec){
                console.log(rec);
                
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
                // $('#edit_photo').orakuploader({
                //     orakuploader_path               : url_gb+'/',
                //     orakuploader_ckeditor           : false,
                //     orakuploader_use_dragndrop      : true,
                //     orakuploader_main_path          : 'uploads/temp/',
                //     orakuploader_thumbnail_path     : 'uploads/temp/',
                //     orakuploader_thumbnail_real_path: asset_gb+'uploads/temp/',
                //     orakuploader_add_image          : asset_gb+'images/add.png',
                //     orakuploader_loader_image       : asset_gb+'images/loader.gif',
                //     orakuploader_no_image           : asset_gb+'images/no-image.jpg',
                //     orakuploader_add_label          : 'เลือกรูปภาพ',
                //     orakuploader_use_rotation       : false,
                //     orakuploader_maximum_uploads    : max_file,
                //     orakuploader_hide_on_exceed     : true,
                //     orakuploader_attach_images      : file,
                //     orakuploader_field_name         : 'photo',
                //     orakuploader_finished           : function(){

                //     }
                // });

                CKEDITOR.instances['edit_name_th'].setData(rec.name_th);
                CKEDITOR.instances['edit_name_en'].setData(rec.name_en);
                $('#edit_status').val(rec.status);
                $('#edit_sort_id').val(rec.sort_id);
                $('.select2').select2();
                btn.button("reset");
                ShowModal('ModalEditAddress');
            }).fail(function(){
                swal("system.system_alert","system.system_error","error");
                btn.button("reset");
            });
        });
        $('body').on('click','.btn-location',function(data){
            var btn = $(this);
            btn.button('loading');
            var id = $(this).data('id');
            $('#edit_id').val(id);
            $.ajax({
                method : "GET",
                url : url_gb+"/admin/contact/show/"+id,
                dataType : 'json'
            }).done(function(rec){
                console.log(rec);

                $('#edit_location').val(rec.name_th);
        
                btn.button("reset");
                ShowModal('ModalEditLocation');
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
                    url : url_gb+"/admin/contact",
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
                    url : url_gb+"/admin/contact/"+id,
                    dataType : 'json',
                    data : $(form).serialize()
                }).done(function(rec){
                    btn.button("reset");
                    if(rec.status==1){
                        TableList.api().ajax.reload();
                        resetFormCustom(form);
                       
                        swal({
                            text: rec.title,
                            title: rec.content,
                            type: "success",
                            icon: "success",
                        }).then(function() {
                            // Redirect
                            window.location.href =  "{{url('admin/address')}}";	
                        });
                        $('#ModalEditAddress').modal('hide');
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
        $('#FormEditLocation').validate({
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
                    url : url_gb+"/admin/contact/"+id,
                    dataType : 'json',
                    data : $(form).serialize()
                }).done(function(rec){
                    btn.button("reset");
                    if(rec.status==1){
                        TableList.api().ajax.reload();
                        resetFormCustom(form);
                        swal(rec.title,rec.content,"success");
                        $('#ModalEditLocation').modal('hide');
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
                    url : url_gb+"/admin/contact/Delete/"+id,
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
        
        CKEDITOR.replace('edit_name_th');
        CKEDITOR.replace('edit_name_en');
        $('#add_status').select2();
        $('#edit_status').select2();
    </script>
@endsection
