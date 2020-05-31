@extends('layouts.user')
@section('title','تسجيل الدخول')
@section('content')
    <div class="tasgilAldokhol">
                <div class="card border-secondary mb-3" style="max-width: 40rem ">
                    <div class="card-header"><span class="mdi mdi-account-tie"> تسجيل دخول الطالب للمدينه الجامعيه </span> </div>
                    <div class="card-body text-secondary" dir="rtl">
                        <form class="form">
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="inputPassword2" class="sr-only"> الرقم القومي </label>
                                <input type="password" class="form-control" id="inputPassword2" placeholder="الرقم القومي">
                            </div>
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="inputPassword2" class="sr-only"> كلمه المرور </label>
                                <input type="password" class="form-control" id="inputPassword2" placeholder="كلمه المرور">
                            
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">  دخول </button>
                        
                            <p><a href="#">نسيت كلمه السر ؟ </a></p>
                        </form>
                        </div>
                    </div>
                </div>
        
@endsection