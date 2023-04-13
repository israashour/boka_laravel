@extends('dashboard.layouts')
@section('title', 'New Service')
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create new Service</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-ban"></i> Error!</h5>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                            placeholder="name" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." value="{{old('description')}}"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Location</label>
                        <input type="text" name="location" class="form-control" id="exampleInputPassword1"
                            placeholder="location" value="{{old('location')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="decimal" name="price" class="form-control" id="exampleInputPassword1"
                            placeholder="price" value="{{old('price')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="is_active" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1">Active</label>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">create</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
@endsection
