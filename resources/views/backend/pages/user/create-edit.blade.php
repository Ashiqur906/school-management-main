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
          <div class="col-12 ">
            <!-- Default box -->
            <div class="card col-md-12">
              <div class="card-header d-flex justify-content-between">
                   <a href="" class="btn btn-warning btn-sm pl-4 pr-4"><i class="fa fa-list"></i><span style="font-weight: bold;font-size:17px"> List</span></a>    
              </div>
               <!-- form start -->
                <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="row">  
                    <div class="card-body col-md-6">
                      <div class="row">
                        <div class="form-group col-md-12 ">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Full Name">
                            @error('name')
                             <span class="text-danger">
                                {{ $message }}
                             </span>
                            @enderror
                        </div>   
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                            @error('email')
                             <span class="text-danger">
                                {{ $message }}
                             </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone">
                              @error('phone')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                              @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              @error('password')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                              @enderror
                        </div>
                         <div class="form-group col-md-12">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                              @error('confirm_password')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                              @enderror  
                        </div>
                      </div>  
                    </div>
                  
                    <div class="card-body col-md-6">
                        <div class="row">
                          <div class="form-group col-md-12">
                            <label for="exampleInputFile">Profile</label>
                            <div class="input-group ">
                              <div class="custom-file">
                                  <input type="file" name="profile" class="custom-file-input" id="exampleInputFile">
                                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                  
                              </div>
                            </div>
                          </div>

                          <div class="form-group col-md-12">
                              <label for="exampleInputFile">User Role</label>
                              <select name="role" class="form-control">
                                 <option value="">Select User Role</option>
                                    <option value="1">Admin</option>
                                       <option value="3">User</option>
                                          <option value="2">Teacher</option>
                                            <option value="0">Student</option>
                              </select>
                                @error('role')
                                  <span class="text-danger">
                                      {{ $message }}
                                  </span>
                                @enderror   
                          </div>
                           <div class="form-group col-md-12">
                              <label for="exampleInputFile">Gender</label>
                              <br/>
                              <input type="radio" name="gender" value="1">&nbsp;&nbsp;&nbsp;Male&nbsp;&nbsp;&nbsp;
                              <input type="radio" name="gender" value="2">&nbsp;&nbsp;&nbsp;Female&nbsp;&nbsp;&nbsp;
                              <input type="radio" name="gender" value="3">&nbsp;&nbsp;&nbsp;Others&nbsp;&nbsp;&nbsp;
                          </div>
                        </div>
                    </div>
                  </div>
                     <!-- /.card-body -->
                    <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary" style="width:100%">Submit</button>
                    </div>
                </form>
              <!-- /.card-body -->
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
