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
            <div class="card">
              <div class="card-header  bg-dark">
                <h3 class="card-title">StudentList</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Created At</th>
                      <th>AnotherInformation</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($students as $student)

                    <tr>
                      <td>{{$student->id}}</td>
                      <td>{{$student->name}}</td>
                      <td>{{$student->email}}</td>
                      <td>{{$student->created_at}}</td>
                      <td>

                      <a href="/admin/students/information" class="bnt btn-info btn-sm"><i class="fa fa-edit"></i>
                        Show</a>

                        
                  
                 
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