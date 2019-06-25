<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        $data['banner'] = \App\Models\Banner::select('banners.*')->get();
        $data['category'] = \App\Models\Category::where('status','=','1')
            ->select('categories.*')
            ->orderBy('sort_id','ASC')
            ->get();
        $data['contact'] = \App\Models\Contact::where('status','=','1')
            ->select('contacts.*')
            ->get();
        $data['faq'] = \App\Models\Question::leftJoin('answers','answers.question_id','=','questions.id')
        ->select('questions.*','answers.answer_th','answers.answer_en')
        ->orderBy('sort_id','ASC')
        ->get();
        return view('faq',$data);
    }
}