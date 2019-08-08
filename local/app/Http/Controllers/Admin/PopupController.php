<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class PopupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['main_menu'] = 'Popup';
        $data['sub_menu'] = 'Popup';
        $data['title'] = 'Popup';
        $data['title_page'] = 'Popup';
        $data['menus'] = \App\Models\AdminMenu::ActiveMenu()->get();
        
        return view('Admin.popup',$data);
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
        
            if(isset($input_all['photo_desktop'])&&isset($input_all['photo_desktop'][0])){
                $input_all['photo_desktop'] = $input_all['photo_desktop'][0];
                if(Storage::disk("uploads")->exists("temp/".$input_all['photo_desktop'])&&!Storage::disk("uploads")->exists("Popup/".$input_all['photo_desktop'])){
                    Storage::disk("uploads")->copy("temp/".$input_all['photo_desktop'],"Popup/".$input_all['photo_desktop']);
                    Storage::disk("uploads")->delete("temp/".$input_all['photo_desktop']);
                }
            }
        
            if(isset($input_all['photo_ipad'])&&isset($input_all['photo_ipad'][0])){
                $input_all['photo_ipad'] = $input_all['photo_ipad'][0];
                if(Storage::disk("uploads")->exists("temp/".$input_all['photo_ipad'])&&!Storage::disk("uploads")->exists("Popup/".$input_all['photo_ipad'])){
                    Storage::disk("uploads")->copy("temp/".$input_all['photo_ipad'],"Popup/".$input_all['photo_ipad']);
                    Storage::disk("uploads")->delete("temp/".$input_all['photo_ipad']);
                }
            }
        
            if(isset($input_all['photo_mobile'])&&isset($input_all['photo_mobile'][0])){
                $input_all['photo_mobile'] = $input_all['photo_mobile'][0];
                if(Storage::disk("uploads")->exists("temp/".$input_all['photo_mobile'])&&!Storage::disk("uploads")->exists("Popup/".$input_all['photo_mobile'])){
                    Storage::disk("uploads")->copy("temp/".$input_all['photo_mobile'],"Popup/".$input_all['photo_mobile']);
                    Storage::disk("uploads")->delete("temp/".$input_all['photo_mobile']);
                }
            }
        
            if(isset($input_all['sort_id'])){
                $input_all['sort_id'] = str_replace(',', '', $input_all['sort_id']);
            }
        $input_all['status'] = $request->input('status','2');
        $input_all['created_at'] = date('Y-m-d H:i:s');
        $input_all['updated_at'] = date('Y-m-d H:i:s');

        $validator = Validator::make($request->all(), [
            'photo_desktop' => 'required',
             
        ]);
        if (!$validator->fails()) {
            \DB::beginTransaction();
            try {
                $data_insert = $input_all;
                \App\Models\Popup::insert($data_insert);
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
        $result = \App\Models\Popup::find($id);
        
            if($result){
                if($result->photo_desktop){
                    if(Storage::disk("uploads")->exists("Popup/".$result->photo_desktop)){
                        if(Storage::disk("uploads")->exists("temp/".$result->photo_desktop)){
                            Storage::disk("uploads")->delete("temp/".$result->photo_desktop);
                        }
                        Storage::disk("uploads")->copy("Popup/".$result->photo_desktop,"temp/".$result->photo_desktop);
                    }
                }
            }
        
            if($result){
                if($result->photo_ipad){
                    if(Storage::disk("uploads")->exists("Popup/".$result->photo_ipad)){
                        if(Storage::disk("uploads")->exists("temp/".$result->photo_ipad)){
                            Storage::disk("uploads")->delete("temp/".$result->photo_ipad);
                        }
                        Storage::disk("uploads")->copy("Popup/".$result->photo_ipad,"temp/".$result->photo_ipad);
                    }
                }
            }
        
            if($result){
                if($result->photo_mobile){
                    if(Storage::disk("uploads")->exists("Popup/".$result->photo_mobile)){
                        if(Storage::disk("uploads")->exists("temp/".$result->photo_mobile)){
                            Storage::disk("uploads")->delete("temp/".$result->photo_mobile);
                        }
                        Storage::disk("uploads")->copy("Popup/".$result->photo_mobile,"temp/".$result->photo_mobile);
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
        
            if(isset($input_all['photo_desktop'])&&isset($input_all['photo_desktop'][0])){
                $input_all['photo_desktop'] = $input_all['photo_desktop'][0];
                if(Storage::disk("uploads")->exists("temp/".$input_all['photo_desktop'])){
                    if(Storage::disk("uploads")->exists("Popup/".$input_all['photo_desktop'])){
                        Storage::disk("uploads")->delete("Popup/".$input_all['photo_desktop']);
                    }
                    Storage::disk("uploads")->copy("temp/".$input_all['photo_desktop'],"Popup/".$input_all['photo_desktop']);

                }
            }else{
                $input_all['photo_desktop'] = null;
            }
            if(isset($input_all['org_photo_desktop'])){
                Storage::disk("uploads")->delete("temp/".$input_all['org_photo_desktop']);
            }
            unset($input_all['org_photo_desktop']);
        
            if(isset($input_all['photo_ipad'])&&isset($input_all['photo_ipad'][0])){
                $input_all['photo_ipad'] = $input_all['photo_ipad'][0];
                if(Storage::disk("uploads")->exists("temp/".$input_all['photo_ipad'])){
                    if(Storage::disk("uploads")->exists("Popup/".$input_all['photo_ipad'])){
                        Storage::disk("uploads")->delete("Popup/".$input_all['photo_ipad']);
                    }
                    Storage::disk("uploads")->copy("temp/".$input_all['photo_ipad'],"Popup/".$input_all['photo_ipad']);

                }
            }else{
                $input_all['photo_ipad'] = null;
            }
            if(isset($input_all['org_photo_ipad'])){
                Storage::disk("uploads")->delete("temp/".$input_all['org_photo_ipad']);
            }
            unset($input_all['org_photo_ipad']);
        
            if(isset($input_all['photo_mobile'])&&isset($input_all['photo_mobile'][0])){
                $input_all['photo_mobile'] = $input_all['photo_mobile'][0];
                if(Storage::disk("uploads")->exists("temp/".$input_all['photo_mobile'])){
                    if(Storage::disk("uploads")->exists("Popup/".$input_all['photo_mobile'])){
                        Storage::disk("uploads")->delete("Popup/".$input_all['photo_mobile']);
                    }
                    Storage::disk("uploads")->copy("temp/".$input_all['photo_mobile'],"Popup/".$input_all['photo_mobile']);

                }
            }else{
                $input_all['photo_mobile'] = null;
            }
            if(isset($input_all['org_photo_mobile'])){
                Storage::disk("uploads")->delete("temp/".$input_all['org_photo_mobile']);
            }
            unset($input_all['org_photo_mobile']);
        
            if(isset($input_all['sort_id'])){
                $input_all['sort_id'] = str_replace(',', '', $input_all['sort_id']);
            }
        $input_all['status'] = $request->input('status','2');
        $input_all['updated_at'] = date('Y-m-d H:i:s');

        $validator = Validator::make($request->all(), [
            'photo_desktop' => 'required',
             
        ]);
        if (!$validator->fails()) {
            \DB::beginTransaction();
            try {
                $data_insert = $input_all;
                \App\Models\Popup::where('id',$id)->update($data_insert);
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
            \App\Models\Popup::where('id',$id)->delete();
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
        $result = \App\Models\Popup::select();
        return \Datatables::of($result)
        ->addIndexColumn()
        
        ->addColumn('sort_id',function($rec){
            if(is_numeric($rec->sort_id)){
                return number_format($rec->sort_id);
            }else{
                return $rec->sort_id;
            }
        })
        ->editColumn('photo_desktop',function($rec){
            if($rec->photo_desktop == null){
                return $photo_desktop = ' <img src="'.asset('uploads/Popup/nophoto.png').'" class="image-full image-btn" width="50%" height="50%" alt="innotech"/>';
            }else {
                return $photo_desktop = ' <img src="'.asset('uploads/Popup/'.$rec->photo_desktop).'" class="image-full image-btn" width="50%" height="50%" alt="innotech"/>';
            }
        })
        ->editColumn('photo_ipad',function($rec){
            if($rec->photo_ipad == null){
                return $photo_ipad = ' <img src="'.asset('uploads/Popup/nophoto.png').'" class="image-full image-btn" width="50%" height="50%" alt="innotech"/>';
            }else {
                return $photo_ipad = ' <img src="'.asset('uploads/Popup/'.$rec->photo_ipad).'" class="image-full image-btn" width="50%" height="50%" alt="innotech"/>';
            }
        })
        ->editColumn('photo_mobile',function($rec){
            if($rec->photo_mobile == null){
                return $photo_mobile = ' <img src="'.asset('uploads/Popup/nophoto.png').'" class="image-full image-btn" width="50%" height="50%" alt="innotech"/>';
            }else {
                return $photo_mobile = ' <img src="'.asset('uploads/Popup/'.$rec->photo_mobile).'" class="image-full image-btn" width="50%" height="50%" alt="innotech"/>';
            }
        })
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
