<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use DB;
use Excel;
use Storage;
use Datatables;
use File;
use App\Http\Controllers\Controller;



class PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['main_menu'] = 'Performance';
        $data['sub_menu'] = 'Performance';
        $data['title'] = 'Performance';
        $data['title_page'] = 'Performance';
        $data['menus'] = \App\Models\AdminMenu::ActiveMenu()->get();
        
        return view('Admin.performance',$data);
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
        if($request->file != null)
        {
            $file = $request->file('file');
            $real_name = $file->getClientOriginalName();
            $type_file = File::extension($real_name);
         
            if($type_file == 'csv' || $type_file == 'jpg')
            {
                return  response()->json(['success' => false]);
            }
            
            Excel::load($file, function($reader) {
                $rows = $reader->toArray();
               
                $i = 1;
                foreach ($rows as $key => $value) 
                {
    
                    $name                =   isset($value['name']) ? (string)$value['name'] : '' ;
                    $fund                =   isset($value['fund']) ? (string)$value['fund'] : '' ;
                    $gain                =   isset($value['gain']) ? (string)$value['gain'] : '' ;
                    $result              =   isset($value['result']) ? (string)$value['result'] : '' ;
                    $indicator           =   isset($value['indicator']) ? (string)$value['indicator'] : '' ;
                    $type                =   $_POST['type'];
                    $date                =   $_POST['date'];
                    $sort_id             =   $i++;
                  
                    \App\Models\Performance::insert([
                        'name' => $name,
                        'fund' => $fund,
                        'gain' => $gain,
                        'result' => $result,
                        'indicator' => $indicator,
                        'result' => $result,
                        'type' => $type,
                        'sort_id' => $sort_id, 
                        'date' => $date,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                        
                    ]);
                }
            })->get();
            return redirect('admin/Performance');
        }
    
        $input_all['created_at'] = date('Y-m-d H:i:s');
        $input_all['updated_at'] = date('Y-m-d H:i:s');

        $validator = Validator::make($request->all(), [
            
        ]);
        if (!$validator->fails()) {
            \DB::beginTransaction();
            try {
                $data_insert = $input_all;
                \App\Models\Performance::insert($data_insert);
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
        $result = \App\Models\Performance::find($id);
        
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
        
            if(isset($input_all['fund'])){
                $input_all['fund'] = str_replace(',', '', $input_all['fund']);
            }
        
            if(isset($input_all['gain'])){
                $input_all['gain'] = str_replace(',', '', $input_all['gain']);
            }
        
            if(isset($input_all['result'])){
                $input_all['result'] = str_replace(',', '', $input_all['result']);
            }
        
            if(isset($input_all['Indicator'])){
                $input_all['Indicator'] = str_replace(',', '', $input_all['Indicator']);
            }
        
            if(isset($input_all['type'])){
                $input_all['type'] = str_replace(',', '', $input_all['type']);
            }
        
        $input_all['updated_at'] = date('Y-m-d H:i:s');

        $validator = Validator::make($request->all(), [
            
        ]);
        if (!$validator->fails()) {
            \DB::beginTransaction();
            try {
                $data_insert = $input_all;
                \App\Models\Performance::where('id',$id)->update($data_insert);
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
            \App\Models\Performance::where('id',$id)->delete();
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
        $result = \App\Models\Performance::select();
        return \Datatables::of($result)
        ->addIndexColumn()
        
        ->addColumn('fund',function($rec){
            if(is_numeric($rec->fund)){
                return number_format($rec->fund);
            }else{
                return $rec->fund;
            }
        })
        
        ->addColumn('gain',function($rec){
            if(is_numeric($rec->gain)){
                return number_format($rec->gain);
            }else{
                return $rec->gain;
            }
        })
        
        ->addColumn('result',function($rec){
            if(is_numeric($rec->result)){
                return number_format($rec->result);
            }else{
                return $rec->result;
            }
        })
        
        ->addColumn('Indicator',function($rec){
            if(is_numeric($rec->Indicator)){
                return number_format($rec->Indicator);
            }else{
                return $rec->Indicator;
            }
        })
        
        ->addColumn('type',function($rec){
            if(is_numeric($rec->type)){
                return number_format($rec->type);
            }else{
                return $rec->type;
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
