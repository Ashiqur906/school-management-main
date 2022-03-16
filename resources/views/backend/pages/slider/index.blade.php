@extends('backend.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Slider Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Slider</a></li>
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
                <h3 class="card-title"></h3>
              </div>
              <div class="card-body">
              <table id="example1" class="table table-bordered table-hover c  table-sm ">
                  <thead>
                  <tr>
                    <th class="text-center">Sl</th>
                    <th class="text-center">Slider image</th>
                    <th>Title</th>
                    <th>Short Description</th>
                    <th class="text-center" width="10%">Status</th>
                    <th class="text-center" width="15%">Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($sliders as $slider)
                    <tr>
                      <td class="text-center">{{ $loop->index+1 }}</td>
                      <td class="text-center" width="20%"> <img src="{{ asset('storage/')."/". $slider->slider }}" height="100px" width="200px"> </td>
                      <td>{{ $slider->title }}</td>
                      <td>{{ $slider->short_description }}</td>

                      @if(($slider->status) == 1)
                        <td class="text-center">
                          <span class="label label-success">Active</span>
                        </td>
                      @else
                        <td class="text-center">
                          <span class="label label-warning">Inactive</span>
                        </td>
                      @endif
                      {{-- <td class="text-center"><a href="{{ route('slider-show').$slider->id }}" class="ad-st-view">Edit</a></td> --}}
                      <td class="text-center">
                        <div class="btn-group btn-group-md">
                          <a href="{{ URL::to('sliders/'.$slider->id.'/edit') }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                          <form action="{{ route('sliders.destroy', $slider->id) }}" method="Post">
                              @csrf
                              @method('DELETE')
                              
                              <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></button>
                          </form>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              {{-- <div class="card-footer">
                Footer
              </div> --}}
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

