@extends('layout.common')
 
@section('title', '投稿のページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '投稿ページの説明文です')
@section('pageCss')
<link href="/css/star/index.css" rel="stylesheet">
@endsection
 
@include('layout.header')
 
@section('content')
<h2>このページは投稿ページです。</h2>
<p>{{ $msg }}</p>
 
<form action="/board" method="post">
@csrf
<table>
@if ($errors->has('subject'))
<tr>
<th>ERROR</th>
<td>{{$errors->first('subject')}}</td>
</tr>
@endif
<tr>
<th>件名</th>
<td><input type="text" name="subject" value="{{old('subject')}}"></td>
</tr>
 
@if ($errors->has('email'))
<tr>
<th>ERROR</th>
<td>{{$errors->first('email')}}</td>
</tr>
@endif
<tr>
<th>メールアドレス</th>
<td><input type="text" name="email" value="{{old('email')}}"></td>
</tr>
 
@if ($errors->has('message'))
<tr>
<th>ERROR</th>
<td>{{$errors->first('message')}}</td>
</tr>
@endif
<tr>
<th>メッセージ</th>
<td><textarea name="message">{{old('message')}}</textarea></td>
</tr>
<tr>
<td colspan="2"><input type="submit" value="送信"></td>
</tr>
</table>
</form>
@endsection
 
@include('layout.submenu')
 
@include('layout.footer')