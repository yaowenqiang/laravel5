<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index()
    {
//        return "Pages";
        $name = "<span style='color:red'>jack</span>";
//        return view('pages')->with('name',$name);
        $data = [];
        $data['name'] = $name;
        $data['last'] = 'yao';
//        return view('pages')->with([
//                'name'=> $name,
//                'last'=> 'yao'
//            ]
//        );
        $last =  'yao';
//        return view('pages',$data);
        return view('pages',compact('name','last'));
    }
}
