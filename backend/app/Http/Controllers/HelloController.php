<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $req)
    {
        $data = [
            'msg' => 'これはコントローラーから渡されたテキストです',
            'page' => $req->p,
        ];
        
        return view('hello.index', $data);
    }


    /**
     * フォーム画面
     * 
     */
    public function add(Request $req)
    {
        $data = [
            'msg'  => 'お名前を入力してください',
        ];
 
        return view('hello.add', $data);
    }
 
 
    /**
     * 結果画面
     * 
     */
    public function result(Request $req)
    {
        $message = $req->message;
        $data = [
            'msg'  => 'ようこそ、' . $message . ' さん！',
        ];
 
        return view('hello.result', $data);
    }
}
