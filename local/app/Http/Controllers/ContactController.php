<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $data['banner'] = \App\Models\Banner::select('banners.*')->get();
        $data['category'] = \App\Models\Category::where('status','=','1')
            ->select('categories.*')
            ->orderBy('sort_id','ASC')
            ->get();

        $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->where('type','=','S')
            ->select('contacts.*')
            ->get();
        $data['address'] = \App\Models\Contact::where('status','=','1')
            ->where('type','=','A')
            ->select('contacts.*')
            ->first();
        $data['location'] = \App\Models\Contact::where('status','=','1')
            ->where('type','=','L')
            ->select('contacts.*')
            ->first();
        $data['career'] = \App\Models\Career::where('status','=','1')
            ->select('careers.*')
            ->orderBy('sort_id','ASC')
            ->get();
     
        return view('contact',$data);
    }
    public function store(Request $request){
        $input_all['name'] = $request->input('name');
        $input_all['email'] = $request->input('email');
        $input_all['title'] = $request->input('title');
        $input_all['detail'] = $request->input('detail');
        $input_all['status'] =  2;

        $input_all['created_at'] = date('Y-m-d H:i:s');
        $input_all['updated_at'] = date('Y-m-d H:i:s');

        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);
        if (!$validator->fails()) {
            \DB::beginTransaction();
            try {
                $data_insert = $input_all;
                \App\Models\UserContact::insert($data_insert);
                $email = $input_all['email'];
                $token = base64_encode($email.'#'.\Hash::make(20));
                \Mail::send('emails.contact_email', $input_all, function ($m) use($token , $input_all){
                    $m->from($input_all['email'], 'contact');
                    $m->to('customercare@innotechasset.com', $input_all['name'])->subject('contact innotech');
                });
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
            $return['content'] = 'Invalid email format';
        }
        $return['title'] = 'Warning';
        return json_encode($return);
       
    }
}