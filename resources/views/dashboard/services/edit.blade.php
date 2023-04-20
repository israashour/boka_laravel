@extends('dashboard.layouts')
@section('title', 'Edit Service')
@section('content')
    <div class="col-md-12">
        {{-- @dd($services) --}}
        <!-- general form elements -->
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title mt-2">Edit Service</h3>
                <div class="pull-right">
                    <a class="btn btn-info float-right" href="{{ route('services.index') }}"> Back</a>
                </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
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
                        <label for="exampleInputEmail1">Enter Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="name"
                            value="{{ $service->name }}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" placeholder="Enter Description" 
                            name="description">{{ $service->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Location</label>
                        <input type="text" name="location" class="form-control" id="exampleInputPassword1"
                            placeholder="location" value="{{$service->location}}">
                    </div>
                    <div class="form-group">
                        <label for="work_time">Work Hours</label>
                        <div>
                            <span>
                                <label for="work_time">Start Time</label>
                                <input type="time" name="work_time" class="form-control col-md-3" id="work_time"
                                    placeholder="Start Time" value="{{ $service->start_time }}">
                            </span>
                            <span>
                                <label for="work_time">End Time</label>
                                <input type="time" name="work_time" class="form-control col-md-3" id="work_time"
                                    placeholder="End Time" value="{{ $service->end_time }}">
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="decimal" name="price" class="form-control" id="exampleInputPassword1"
                            placeholder="price" value="{{ $service->price }}">
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
                        <input type="hidden" name="is_active" value="{{0}}">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="is_active" class="custom-control-input" id="activate" value="{{1}}" {{ old('is_active') == '1' ? 'checked' : '' }}>
                            <label class="custom-control-label" for="activate">Activate</label>
                        </div>
                    </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Save</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
@endsection
