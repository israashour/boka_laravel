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
            <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-ban"></i> Error!</h5>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="name">Enter Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="name"
                            value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" placeholder="Enter Description" name="description">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" name="location" class="form-control" id="location" placeholder="location"
                            value="{{ old('location') }}">
                    </div>
                    <div class="form-group">
                        <label for="work_time">Work Hours</label>
                        <div>
                            <span>
                                <label for="work_time">Start Time</label>
                                <input type="time" name="start_time" class="form-control col-md-3" id="start_time"
                                    placeholder="Start Time" value="{{ old('start_time') }}">
                            </span>
                            <span>
                                <label for="work_time">End Time</label>
                                <input type="time" name="end_time" class="form-control col-md-3" id="end_time"
                                    placeholder="End Time" value="{{ old('end_time') }}">
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="decimal" name="price" class="form-control" id="price" placeholder="price"
                            value="{{ old('price') }}">
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="image"
                                    value="{{ old('image') }}">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="is_active" value="{{0}}">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="is_active" class="custom-control-input" id="activate" value="{{1}}" {{ old('is_active') == '1' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="activate">Activate</label>
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
