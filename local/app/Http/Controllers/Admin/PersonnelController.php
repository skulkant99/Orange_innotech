<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['main_menu'] = 'contactAll';
        $data['sub_menu'] = 'บุคคลากร';
        $data['title'] = 'บุคคลากร';
        $data['title_page'] = 'บุคคลากร';
        $data['menus'] = \App\Models\AdminMenu::ActiveMenu()->get();
        
        return view('Admin.personnel',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input_all = $request->all();
        if(isset($input_all['photo'])&&isset($input_all['photo'][0])){
            $input_all['photo'] = $input_all['photo'][0];
            if(Storage::disk("uploads")->exists("temp/".$input_all['photo'])&&!Storage::disk("uploads")->exists("Personnel/".$input_all['photo'])){
                Storage::disk("uploads")->copy("temp/".$input_all['photo'],"Personnel/".$input_all['photo']);
                Storage::disk("uploads")->delete("temp/".$input_all['photo']);
            }
        }
        $input_all['type'] = $request->input('type','2');
        if(isset($input_all['sort_id'])){
            $input_all['sort_id'] = str_replace(',', '', $input_all['sort_id']);
        }
        $input_all['status'] = $request->input('status','2');
        $input_all['created_at'] = date('Y-m-d H:i:s');
        $input_all['updated_at'] = date('Y-m-d H:i:s');

        $validator = Validator::make($request->all(), [
            'name_th' => 'required',
             
        ]);
        if (!$validator->fails()) {
            \DB::beginTransaction();
            try {
                $data_insert = $input_all;
                \App\Models\Personnel::insert($data_insert);
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = \App\Models\Personnel::find($id);
        if($result){
            if($result->photo){
                if(Storage::disk("uploads")->exists("Personnel/".$result->photo)){
                    if(Storage::disk("uploads")->exists("temp/".$result->photo)){
                        Storage::disk("uploads")->delete("temp/".$result->photo);
                    }
                    Storage::disk("uploads")->copy("Personnel/".$result->photo,"temp/".$result->photo);
                }
            }
        }
        
        return json_encode($result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input_all = $request->all();
        if(isset($input_all['photo'])&&isset($input_all['photo'][0])){
            $input_all['photo'] = $input_all['photo'][0];
            if(Storage::disk("uploads")->exists("temp/".$input_all['photo'])){
                if(Storage::disk("uploads")->exists("Personnel/".$input_all['photo'])){
                    Storage::disk("uploads")->delete("Personnel/".$input_all['photo']);
                }
                Storage::disk("uploads")->copy("temp/".$input_all['photo'],"Personnel/".$input_all['photo']);

            }
        }else{
            $input_all['photo'] = null;
        }
        if(isset($input_all['org_photo'])){
            Storage::disk("uploads")->delete("temp/".$input_all['org_photo']);
        }
        unset($input_all['org_photo']);
        $input_all['type'] = $request->input('type','2');
            if(isset($input_all['sort_id'])){
                $input_all['sort_id'] = str_replace(',', '', $input_all['sort_id']);
            }
        $input_all['status'] = $request->input('status','2');
        $input_all['updated_at'] = date('Y-m-d H:i:s');

        $validator = Validator::make($request->all(), [
            'name_th' => 'required',
             
        ]);
        if (!$validator->fails()) {
            \DB::beginTransaction();
            try {
                $data_insert = $input_all;
                \App\Models\Personnel::where('id',$id)->update($data_insert);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::beginTransaction();
        try {
            \App\Models\Personnel::where('id',$id)->delete();
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

    public function Lists(){
        $result = \App\Models\Personnel::select();
        return \Datatables::of($result)
        ->addIndexColumn()
        
        ->addColumn('sort_id',function($rec){
            if(is_numeric($rec->sort_id)){
                return number_format($rec->sort_id);
            }else{
                return $rec->sort_id;
            }
        })
        ->editColumn('status',function($rec){
            if($rec->status == 1){
                return $status = '<span class="badge badge-success">เปิดใช้งาน</span>';
            }else {
                return $status = '<span class="badge badge-danger">ปิดใช้งาน</span>';
            }
        })
        ->editColumn('type',function($rec){
            if($rec->type == 1){
                return $status = '<span class="badge badge-success">คณะกรรมการบริษัท</span>';
            }elseif($rec->type == 2) {
                return $status = '<span class="badge badge-danger">คณะผู้บริหาร</span>';
            }else{
                return $status = '<span class="badge badge-warning">ผู้จัดการกองทุน</span>';
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
