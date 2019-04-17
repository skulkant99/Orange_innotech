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
                                {{$title_page or '' }}
                                <button class="btn btn-success btn-add pull-right" >
                                    + เพิ่มข้อมูล
                                </button>
                            </h4>
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">
                                <div class="table-responsive">
                                    <table id="TableList" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                            <th>รูป</th>
                                            <th>หัวเรื่องหลัก</th>
                                            <th>หัวเรื่องรอง</th>
                                            <!-- <th>detail</th> -->
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
@section('js_top')
@endsection
@section('js_bottom')
    <script>
         var TableList = $('#TableList').dataTable({
         });
    </script>
@endsection
