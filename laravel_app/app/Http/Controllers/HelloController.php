<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use Illuminate\Support\Facades\Storage;

class HelloController extends Controller
{
    private $fname;
    
    function __construct(){
        $this->fname = "hello.txt";
    }

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
    // public function index(){
    //     $sample_msg = config("sample.message");
    //     $sample_data = config("sample.data");
    //     $data = [
    //         "msg" => $sample_msg,
    //         "data" => $sample_data,
    //     ];

    //     return view("hello.index", $data);
    // }

    // 1-32
    // public function index(){
    //     $sample_msg = env("SAMPLE_MESSAGE");
    //     $sample_data = env("SAMPLE_DATA");
    //     $data = [
    //         "msg" => $sample_msg,
    //         "data" => explode(",", $sample_data),
    //     ];

    //     return view("hello.index", $data);
    // }

    // 1-33
    // public function index(){
    //     $sample_msg = $this->fname;
    //     $sample_data = Storage::get($this->fname);
    //     $data = [
    //         "msg" => $sample_msg,
    //         "data" => explode(PHP_EOL, $sample_data),
    //     ];

    //     return view("hello.index", $data);
    // }

    // public function other($msg){
    //     Storage::append($this->fname, $msg);
    //     return redirect()->route("hello");
    // }

    // 1-36
    // public function index(){
    //     $sample_msg = Storage::disk("public")->url($this->fname);
    //     $sample_data = Storage::disk("public")->get($this->fname);
    //     $data = [
    //         "msg" => $sample_msg,
    //         "data" => explode(PHP_EOL, $sample_data),
    //     ];

    //     return view("hello.index", $data);
    // }

    // 1-37
    // public function index(){
    //     $url = Storage::disk("public")->url($this->fname);
    //     $size = Storage::disk("public")->size($this->fname);
    //     $modified = Storage::disk("public")->lastModified($this->fname);
    //     $modified_time = date("y-m-d H:i:s", $modified);
    //     $sample_keys = ["url", "size", "modified"];
    //     $sample_meta = [$url, $size, $modified_time];
    //     $result = "
    //         <table>
    //             <tr>
    //                 <th>"
    //                     .implode("</th><th>", $sample_keys).
    //                 "</th>
    //             </tr>
    //     ";
    //     $result .= "
    //             <tr>
    //                 <td>"
    //                     .implode("</td><td>", $sample_meta).
    //                 "</td>
    //             </tr>  
    //         </table>
    //     ";
    //     $sample_data = Storage::disk("public")->get($this->fname);

    //     $data = [
    //         "msg" => $result,
    //         "data" => explode(PHP_EOL, $sample_data),
    //     ];

    //     return view("hello.index", $data);
    // }

    // 1-46
    public function index(){
        $dir = "/";
        $all = Storage::disk("local")->allfiles($dir);

        $data = [
            "msg" => "DIR: ". $dir,
            "data" => $all, 
        ];

        return view("hello.index", $data);
    }



    // public function other($msg){
    //     Storage::disk("public")->prepend($this->fname, $msg);
    //     return redirect()->route("hello");
    // }

    // 1-39
    // public function other($msg){
    //     if (Storage::disk("public")->exists("bk_". $this->fname)){
    //         Storage::disk("public")->delete("bk_". $this->fname);
    //     }
    //     Storage::disk("public")->copy($this->fname, "bk_". $this->fname);
    //     if (Storage::disk("local")->exists("bk_". $this->fname)){
    //         Storage::disk("local")->delete("bk_". $this->fname);
    //     }
    //     Storage::disk("local")->move("public/bk_". $this->fname, "bk_". $this->fname);

    //     return redirect()->route("hello");
    // }

    // 1-40
    // public function other($msg){
    //     return Storage::disk("public")->download($this->fname);
    // }

    // 1-44
    public function other(Request $request){
        $ext = ".". $request->file("file")->extension();
        Storage::disk("public")->putFileAs("files", $request->file("file"), "uploaded". $ext);
        return redirect()->route("hello");
    }
}
