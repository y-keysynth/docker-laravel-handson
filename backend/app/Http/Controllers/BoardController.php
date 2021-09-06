<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    /**
     * フォーム画面
     * 
     */
    public function index(Request $request)
    {
        $data = [
            'msg'  => '投稿内容を入力してください',
        ];

        return view('board.index', $data);
    }

    /**
     * バリデーション設定
     * 
     */
    public function add(Request $request)
    {
        $data = [
            'msg'  => '正しく入力されました！',
        ];

        $validate_rule = [
            'subject' => 'required|max:10',
            'email' => 'email',
            'message' => 'required|max:50',
        ];

         $this->validate($request, $validate_rule);

        return view('board.index', $data);
    }
}