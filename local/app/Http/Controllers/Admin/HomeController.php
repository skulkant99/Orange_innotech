<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

   
}
