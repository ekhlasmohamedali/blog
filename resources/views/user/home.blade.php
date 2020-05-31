@extends('layouts.user')
@section('title','الرئيسية')
@section('content')
<div class="container marketing">

<!-- Three columns of text below the carousel -->

<div class="row">
  <div class="col-lg-4 text-center">
<img class="img  rounded-circle " src="{{asset('img/ee.png')}}">
   
    <p><a class="btn btn-secondary" href="/ershadat" role="button">الارشادات  &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
<img class="img rounded-circle " src="{{asset('img/HH.png')}}">
    <p><a class="btn btn-secondary" href="/mawaidAltaqdim " role="button">مواعيد التقديم  للمدينه &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
 <img class="img  rounded-circle " src="{{asset('img/tt.png')}}">
    <p><a class="btn btn-secondary" href="/gadwelAltaskin" role="button">جدول التسكين  &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
</div>


 <div class="row">
  <div class="col-lg-4">
   
<img class="img  rounded-circle" src="{{asset('img/BB.jpg')}} ">
   
    <p><a class="btn btn-secondary" href="/tasgilDkholAltalep" role="button">تسجيل دخول الطلاب   &raquo;</a></p>
    
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
<img class="img  rounded-circle " src="{{asset('img/CC.png')}}">
 <p><a class="btn btn-secondary" href="/eltmas" role="button">الالتماسات  &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
  <img class="img rounded-circle " src="{{asset('img/zz.png')}}">
 <p> <a class="btn btn-secondary" href="/shakawyAndMoktarahat" role="button">شكاوي ومقترحات   &raquo;</a></p>
  </div><!-- /.col-lg-4 -->

 </div>
@endsection