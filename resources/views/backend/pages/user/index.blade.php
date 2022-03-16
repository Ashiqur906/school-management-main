@extends('backend.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Users</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <a href="" class="btn btn-warning btn-sm mr-3 pl-5 pr-5 font-weight-bold ">Admin</a>
                <a href="" class="btn btn-warning btn-sm mr-3 pl-4 pr-4 font-weight-bold">Teachers</a>
                <a href="" class="btn btn-warning btn-sm mr-3 pl-4 pr-4 font-weight-bold">Students</a>
               
              </div>
              <div class="card-body">
              <table id="example1" class="table table-bordered table-hover table-striped table-sm">
                  <thead style="background:#28a745;color:#ffffff">
                  <tr>
                    <th>SL.</th>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $key=>$user)
                    <tr class="text-center">
                      <td>#{{$key + 1}}</td>
                      <td>
                        <img src="{{$user->profile ? asset('storage/'.$user->profile) : url('user-avater.jpg')}}" alt="profile" width="80px" height="80px" class="rounded-circle">
                      </td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->phone}}</td>
                      <td>{{$user->gender}}</td>
                      <td>
                         <div class="btn-group btn-group-sm">
                             <a href="" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                              <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                         </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>SL.</th>
                      <th>Profile</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Gender</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
