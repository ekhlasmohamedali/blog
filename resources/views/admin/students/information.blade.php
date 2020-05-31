@extends('layouts.admin')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Students Mangment</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
              <li class="breadcrumb-item active">Students</li>
            </ol>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
<div class="content">
  <div class="container-fluid">
    <div class="row">


<div class="col-12">
<!--
        @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
        @endif-->
            <div class="card">
              <div class="card-header  bg-dark">
                <h3 class="card-title">StudentsList</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>جنسيه الطالب</th>
                      <th>نوع الطالب</th>
                      <th>الرقم القومي للطالب</th>
                      <th>كود الطالب</th>
                      <th>تاريخ الميلاد</th>
                      <th>محل الاقامه</th> 
                      <th>العنوان بالتفصيل</th>
                      <th>رقم موبيل الطالب</th>
                      <th>السنه الدراسيه</th>
                      <th>الكليه</th>
                      <th>الفرقه</th>
                      <th>الصوره الشخصيه للطالب</th>
                      <th>صوره بطاقه الطالب</th>
                      <th>كلمه المرور</th>
                      <th>تاكيد كلمه المرور</th>
                      <th>اسم ولي الامر</th>
                      <th>صله ولي الامر</th>
                      <th>الرقم القومي لولي الامر </th>
                      <th>وظيفه ولي الامر </th>
                      <th>رقم موبيل ولي الامر </th>
                      <th>صوره بطاقه ولي الامر</th>
                      <th>حاله الطالب</th>
                      <th>تقدير العام الماضي</th>
                      <th>نسبه التقدير</th>
                      <th>شعبه الثانويه الازهريه</th>
                      <th>مجموع الثانويه الازهريه</th>
                      <th>اسم الضامن</th>
                      <th>رقم موبيل  الضامن</th>
                      <th>رقم بطاقه الضامن</th>
                      <th>الوظيفه</th>
                      <th>صوره بطاقه الضامن</th>
                      <th>اسم ولي الامر </th>
                      <th>الرقم القومي</th>
                      <th>الوظيفه</th>
                      <th>الدخل</th>
                      <th>عدد افراد الاسره</th>
                      <th>اسم المبني</th>

                      <th>رقم الغرفه</th>
                      <th>مخالفه قانونيه </th>
                      <th>اقرار</th>
                      <th>Created At</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($students as $student)

                    <tr>
                    

                      <td>{{$student->gender}}</td>
                      <td>{{$student->student_type}}</td>
                      <td>{{$student->student_ssn}}</td>
                      <td>{{$student->code}}</td>
                      <td>{{$student->birthday}}</td>
                      <td>{{$student->residence}}</td>
                      <td>{{$student->address}}</td>
                      <td>{{$student->mobile}}</td>
                      <td>{{$student->study_year}}</td>
                      <td>{{$student->collegue}}</td>
                      <td>{{$student->grade}}</td>
                      <td>{{$student->student_image}}</td>
                      <td>{{$student->ssn_image}}</td>
                      <td>{{$student->password}}</td>
                      <td>{{$student->password_sure}}</td>
                      <td>{{$student->father_name}}</td>
                      <td>{{$student->parent_link}}</td>
                      <td>{{$student->father_ssn}}</td>
                      <td>{{$student->father_job}} </td>
                      <td>{{$student->phone}}</td>
                      <td>{{$student->father_image}}</td>
                      <td>{{$student->resident}}</td>
                      <td>{{$student->Estimate_last_year}}</td>
                      <td>{{$student->Estimate_percentage}}</td>
                      <td>{{$student->Alazhar_secondaryschool}}</td>
                      <td>{{$student->Total_secondary_Azhar}}</td>
                      <td>{{$student->guarantor_name}}</td>
                      <td>{{$student->guarantor_ssn}}</td>
                      <td>{{$student->guarantor_mobil}}</td>
                      <td>{{$student->guarantor_job}}</td>
                      <td>{{$student->guarantor_image}}</td>
                      <td>{{$student->name_of_father}}</td>
                      <td>{{$student->ssn_of_father}}</td>
                      <td>{{$student->job_of_father}}</td>
                      <td>{{$student->salary}}</td>
                      <td>{{$student->familymember_number}}</td>
                      <td>{{$student->bulding_name}}</td>
                      <td>{{$student->room_id}}</td>
                      <td>{{$student->message}}</td>
                      <td>{{$student->endorsement}}</td>
                      <td>{{$student->created_at}}</td>                
                    
                      </td>
                    </tr> 

                    @endforeach

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>



  </div>

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

@endsection