<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class HelloController extends Controller
{
    // 
    // public function index(Request $request){
    //     $data = [
    //         "msg" => $request->hello,
    //     ];

    //     return view("hello.index", $data);
    // }
    
    // public function other(Request $request){
    //     $data = [
    //         "msg" => $request->bye,
    //     ];
    //     return view("hello.index", $data);
    // }

    // 1-17
    // public function index($person){
    //     $data = [
    //         "msg" => $person,
    //     ];

    //     return view("hello.index", $data);
    // }

    // 1-23
    public function index(){
        $sample_msg = config("sample.message");
        $sample_data = config("sample.data");
        $data = [
            "msg" => $sample_msg,
            "data" => $sample_data,
        ];

        return view("hello.index", $data);
    }
}
