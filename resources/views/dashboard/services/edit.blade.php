@extends('dashboard.layouts')
@section('title', 'Edit Service')
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Service</h3>
                <div class="pull-right">
                    <a class="btn btn-primary " href="{{ route('admin.index') }}"> Back</a>
                </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admin.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
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
                            placeholder="name" value="{{$service->name}}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." value="{{$service->description}}"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Location</label>
                        <input type="text" name="location" class="form-control" id="exampleInputPassword1"
                            placeholder="location" value="{{$service->location}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="decimal" name="price" class="form-control" id="exampleInputPassword1"
                            placeholder="price" value="{{$service->price}}">
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
                            <input type="checkbox" name="is_active" class="custom-control-input" id="customSwitch1" checked value="{{$service->is_active}}">
                            <label class="custom-control-label" for="customSwitch1">Active</label>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
@endsection
