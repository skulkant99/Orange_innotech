<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['main_menu'] = 'GroupMenu';
        $data['sub_menu'] = 'Calendar';
        $data['title'] = 'ปฎิทินกิจกรรม';
        $data['title_page'] = 'ปฎิทินกิจกรรม';
        $data['menus'] = \App\Models\AdminMenu::ActiveMenu()->get();
        
        return view('Admin.calendar',$data);
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
        
        if(isset($input_all['seat'])){
            $input_all['seat'] = str_replace(',', '', $input_all['seat']);
        }

        $input_all['type'] = $request->input('type','D');
        $input_all['status'] = $request->input('status','2');
        $input_all['register_type'] = $request->input('register_type','T');

        if(isset($input_all['sort_id'])){
            $input_all['sort_id'] = str_replace(',', '', $input_all['sort_id']);
        }
        if(isset($input_all['photo'])&&isset($input_all['photo'][0])){
            $input_all['photo'] = $input_all['photo'][0];
            if(Storage::disk("uploads")->exists("temp/".$input_all['photo'])&&!Storage::disk("uploads")->exists("Calendar/".$input_all['photo'])){
                Storage::disk("uploads")->copy("temp/".$input_all['photo'],"Calendar/".$input_all['photo']);
                Storage::disk("uploads")->delete("temp/".$input_all['photo']);
            }
        }
        $input_all['created_at'] = date('Y-m-d H:i:s');
        $input_all['updated_at'] = date('Y-m-d H:i:s');

        $validator = Validator::make($request->all(), [
            
        ]);
        if (!$validator->fails()) {
            \DB::beginTransaction();
            try {
                $data_insert = $input_all;
                \App\Models\Calendar::insert($data_insert);
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
        $result = \App\Models\Calendar::find($id);
        if($result->photo){
                if(Storage::disk("uploads")->exists("Calendar/".$result->photo)){
                    if(Storage::disk("uploads")->exists("temp/".$result->photo)){
                        Storage::disk("uploads")->delete("temp/".$result->photo);
                    }
                    Storage::disk("uploads")->copy("Calendar/".$result->photo,"temp/".$result->photo);
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
      
        if(isset($input_all['seat'])){
            $input_all['seat'] = str_replace(',', '', $input_all['seat']);
        }
        $input_all['type'] = $request->input('type','D');
        $input_all['status'] = $request->input('status','2');
        $input_all['register_type'] = $request->input('register_type','T');

        if(isset($input_all['sort_id'])){
            $input_all['sort_id'] = str_replace(',', '', $input_all['sort_id']);
        }
        if(isset($input_all['photo'])&&isset($input_all['photo'][0])){
            $input_all['photo'] = $input_all['photo'][0];
            if(Storage::disk("uploads")->exists("temp/".$input_all['photo'])){
                if(Storage::disk("uploads")->exists("Calendar/".$input_all['photo'])){
                    Storage::disk("uploads")->delete("Calendar/".$input_all['photo']);
                }
                Storage::disk("uploads")->copy("temp/".$input_all['photo'],"Calendar/".$input_all['photo']);

            }
        }else{
            $input_all['photo'] = null;
        }
        if(isset($input_all['org_photo'])){
            Storage::disk("uploads")->delete("temp/".$input_all['org_photo']);
        }
        unset($input_all['org_photo']);
        
        $input_all['updated_at'] = date('Y-m-d H:i:s');
     
        $validator = Validator::make($request->all(), [
            
        ]);
        if (!$validator->fails()) {
            \DB::beginTransaction();
            try {
                $data_insert = $input_all;

                \App\Models\Calendar::where('id',$id)->update($data_insert);
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
            \App\Models\Calendar::where('id',$id)->delete();
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
        $result = \App\Models\Calendar::orderBy('sort_id','ASC')->select();
        return \Datatables::of($result)
        ->addIndexColumn()
        
        ->addColumn('seat',function($rec){
            if(is_numeric($rec->seat)){
                return number_format($rec->seat);
            }else{
                return $rec->seat;
            }
        })
        
        ->addColumn('sort_id',function($rec){
            if(is_numeric($rec->sort_id)){
                return number_format($rec->sort_id);
            }else{
                return $rec->sort_id;
            }
        })
        ->editColumn('seat',function($rec){
            return $seat = '<i class=\'fa fa-user-o \'><p>'.$rec->seat.'</p></i>';
        })
        ->editColumn('type',function($rec){
            if($rec->type == "M"){
                return $type = '<span class="label label-info">สำหรับสมาชิก</span>';
            }else {
                return $type = '<span class="label label-secondary">ทั่วไป</span>';
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
