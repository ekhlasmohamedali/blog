@extends('layouts.user')
@section('title','شكاوي ومقترحات')
@section('content')
  <form  class="shakawy">
        
       <div class="hh"><label>اكتب شكوى او اقتراح </label>
        <br><br>
      <textarea rows="20" cols="100"></textarea></div>
     <div> <button type="submit" class="btn btn-primary mb-2">  ارسال </button></div>
       </form>
@endsection