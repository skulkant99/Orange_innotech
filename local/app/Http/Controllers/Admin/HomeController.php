<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['main_menu'] = 'dashboard';
    	$data['sub_menu'] = '';
    	$data['title'] = 'Dashboard';
    	$data['title_page'] = 'หน้าแรก';
    	// $data['permission'] = Permission::CheckPermission($data['main_menu'],$data['sub_menu']);
    	$data['menus'] = \App\Models\AdminMenu::ActiveMenu()->get();
    	return view('Admin.dashboard',$data);
    }
    public function introduction()
    {
        $data['main_menu'] = 'content';
    	$data['sub_menu'] = 'introduction';
    	$data['title'] = 'introduction';
    	$data['title_page'] = 'introduction';
    	$data['menus'] = \App\Models\AdminMenu::ActiveMenu()->get();
    	return view('Admin.introduction',$data);
    }
    public function premonition()
    {
        $data['main_menu'] = 'content';
    	$data['sub_menu'] = 'premonition';
    	$data['title'] = 'premonition';
    	$data['title_page'] = 'premonition';
        $data['menus'] = \App\Models\AdminMenu::ActiveMenu()->get();
        $data['warring'] = \App\Models\Introduction::where('type','=','W')->select()->first();
    	return view('Admin.premonition',$data);
    }
    public function store_intro(Request $request)
    {
        $input_all = $request->all();
        $input_all['created_at'] = date('Y-m-d H:i:s');
        $input_all['updated_at'] = date('Y-m-d H:i:s');
        $validator = Validator::make($request->all(), [
            // 'detail' => 'required',

        ]);
        if (!$validator->fails()) {
            \DB::beginTransaction();
            try {
                $data_insert = $input_all;
                \App\Models\Introduction::insert($data_insert);
                \DB::commit();
                $return['status'] = 1;
                $return['content'] = 'สำเร็จ';
            } catch (Exception $e) {
                \DB::rollBack();
                $return['status'] = 0;
                $return['content'] = 'ไม่สำเร็จ'.$e->getMessage();
            }
        }else{
            $return['status'] = 0;
        }
        $return['title'] = 'เพิ่มข้อมูล';
        return json_encode($return);
    }
    public function edit_intro($id)
    {
        $result = \App\Models\Introduction::find($id);
        return json_encode($result);
    }
    public function update(Request $request, $id)
    {
        $input_all = $request->all();
        $input_all['updated_at'] = date('Y-m-d H:i:s');

        $validator = Validator::make($request->all(), [
            // 'detail' => 'required',

        ]);
        if (!$validator->fails()) {
            \DB::beginTransaction();
            try {
                $data_insert = $input_all;
                \App\Models\Introduction::where('id',$id)->update($data_insert);
                \DB::commit();
                $return['status'] = 1;
                $return['content'] = 'สำเร็จ';
            } catch (Exception $e) {
                \DB::rollBack();
                $return['status'] = 0;
                $return['content'] = 'ไม่สำเร็จ'.$e->getMessage();
            }
        }else{
            $return['status'] = 0;
        }
        $return['title'] = 'แก้ไขข้อมูล';
        return json_encode($return);
    }
    public function destroy($id)
    {
        \DB::beginTransaction();
        try {
            \App\Models\Introduction::where('id',$id)->delete();
            \DB::commit();
            $return['status'] = 1;
            $return['content'] = 'สำเร็จ';
        } catch (Exception $e) {
            \DB::rollBack();
            $return['status'] = 0;
            $return['content'] = 'ไม่สำเร็จ'.$e->getMessage();
        }
        $return['title'] = 'ลบข้อมูล';
        return $return;
    }
    public function list_introduction()
    {
        $result = \App\Models\Introduction::where('type','=','I')
            ->select('introductions.*');
        return \Datatables::of($result)
        ->addIndexColumn()
        ->editColumn('status',function($rec){
            if($rec->status == 1){
                return $status = '<span class="badge badge-success">เปิดใช้งาน</span>';
            }else {
                return $status = '<span class="badge badge-danger">ปิดใช้งาน</span>';
            }
        })
        ->addColumn('action',function($rec){
            $str='
            <a href="#" class="btn btn-simple btn-warning btn-icon edit btn-edit btn-tooltip" data-rel="tooltip" data-id="'.$rec->id.'" title="แก้ไข"><i class="ti-pencil-alt"></i></a>
            <a href="#" class="btn btn-simple btn-danger btn-icon remove  btn-delete btn-tooltip"  data-id="'.$rec->id.'" data-rel="tooltip" title="ลบ"><i class="ti-close"></i></a>
            ';
            return $str;
        })->make(true);
    }
    public function list_premonition()
    {
        $result = \App\Models\Introduction::where('type','=','W')
            ->select('introductions.*');
        return \Datatables::of($result)
        ->addIndexColumn()
        ->editColumn('status',function($rec){
            if($rec->status == 1){
                return $status = '<span class="badge badge-success">เปิดใช้งาน</span>';
            }else {
                return $status = '<span class="badge badge-danger">ปิดใช้งาน</span>';
            }
        })
        ->addColumn('action',function($rec){
            $str='
            <a href="#" class="btn btn-simple btn-warning btn-icon edit btn-edit btn-tooltip" data-rel="tooltip" data-id="'.$rec->id.'" title="แก้ไข"><i class="ti-pencil-alt"></i></a>
            <a href="#" class="btn btn-simple btn-danger btn-icon remove  btn-delete btn-tooltip"  data-id="'.$rec->id.'" data-rel="tooltip" title="ลบ"><i class="ti-close"></i></a>
            ';
            return $str;
        })->make(true);
    }

   
}
