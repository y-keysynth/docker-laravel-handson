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
}
