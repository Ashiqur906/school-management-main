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
                            <li class="breadcrumb-item"><a href="{{ route('sliders.index') }}">Slider</a></li>
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
                                <div class="card-title">
                                    @if (isset($slider->id))
                                    <label class="card-title">Slider Edit</label>
                                    @else
                                    <label class="card-title">Slider Create </label>
                                    @endif
                                </div>
                            </div>
                            <!-- form start -->
                            <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="card-body col-md-8">
                                        <div class="row">
                                            <input type="text" hidden class="form-control" id="id" name="id" value="{{ @$slider->id }}" >
                                            <div class="form-group col-md-12">
                                                <label for="name">Title</label>
                                                <input type="text" class="form-control" id="title" name="title" value="{{ @$slider->title }}" placeholder="Enter Slider Name">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="short_description">Short Description</label>
                                                <textarea type="textarea" name="short_description" class="form-control" id="short_description" value="{{ @$slider->short_description }}" placeholder="Enter short description (Max 2 line)"> {{ @$slider->short_description }}</textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                            
                                                <label for="status">Status</label>
                                                <select class="form-control" id="status" name="status">
                                                    <option value="1" {{ @$slider->status == 1? 'selected' :'' }}>Active</option>
                                                    <option value="0" {{ @$slider->status == 0? 'selected' :'' }}>Inactive</option>
                                                </select>
                                            </div> 
                                            <div class="form-group col-md-12">
                                                <label for="slider">Slider Image</label>
                                                {{-- <div class=" mb-4 "> <img id="imageResult" onclick="readURL(this)" height="250px" width="250px" src="{{ asset('backend/dist/img/slider.png') }}" alt="" class=" image-area img-fluid rounded shadow-sm mx-auto d-block"></div> --}}

                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <label class="custom-file-label" for="slider">Choose file</label>
                                                        <input type="file" id="upload" type="file" onchange="readURL(this)" class="custom-file-input" value="{{ asset('storage/').@$slider->short_description }}" name="slider" id="slider">
                                                    </div>
                                                    {{-- <div class="input-group-append">
                                                        <span class="input-group-text">Upload</span>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body col-md-4">
                                        <div class="row text-center">
                                            <div class="form-group col-md-12">
                                                <label for="slider">Slider Image Preview</label>
                                                <div class=" mb-4 "> <img id="imageResult" onclick="readURL(this)" height="auto" width="350px" src="{{ asset('backend/dist/img/slider.png') }}" alt="" class=" image-area img-fluid rounded shadow-sm mx-auto d-block"></div>
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
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imageResult')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(function () {
            $('#upload').on('change', function () {
                readURL(input);
            });
        });
        var input = document.getElementById( 'upload' );
        var infoArea = document.getElementById( 'upload-label' );
        input.addEventListener( 'change', showFileName );
        function showFileName( event ) {
        var input = event.srcElement;
        var fileName = input.files[0].name;
        infoArea.textContent = 'File name: ' + fileName;
        }
    </script>
    <style>
        #upload {
            opacity: 0;
        }
        #upload-label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
        }
        .image-area {
            border: 2px dashed rgba(255, 255, 255, 0.7);
            padding: 3px;
            position: relative;
        }
        .image-area::before {
            content: 'Uploaded image result';
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            z-index: 1;
        }
        .image-area img {
            z-index: 2;
            position: relative;
        }
        body {
            min-height: 100vh;
            background-color: #757f9a;
            background-image: linear-gradient(147deg, #757f9a 0%, #d7dde8 100%);
        }
    </style>
@endsection
