2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
@extends('layout.common')
 
@section('title', '月のページ')
@section('keywords', 'キーワード7,キーワード8,キーワード9')
@section('description', '月ページの説明文です')
@section('pageCss')
<link href="/css/star/moon.css" rel="stylesheet">
@endsection
 
@include('layout.header')
 
@section('content')
    <p>このページは月ページです。</p>
    <p><img src="/img/star/moon.png" width="100" alt="月画像"></p>
@endsection
 
@include('layout.submenu')
 
@include('layout.footer')