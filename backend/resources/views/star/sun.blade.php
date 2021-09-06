@extends('layout.common')
 
@section('title', '太陽のページ')
@section('keywords', 'キーワード4,キーワード5,キーワード6')
@section('description', '太陽ページの説明文です')
@section('pageCss')
<link href="/css/star/sun.css" rel="stylesheet">
@endsection
 
@include('layout.header')
 
@section('content')
    <p>このページは太陽ページです。</p>
    <p><img src="/img/star/sun.png" width="100" alt="太陽画像"></p>
@endsection
 
@include('layout.submenu')
 
@include('layout.footer')