@extends('dashboard.layouts')
@section('title', 'Services')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mt-2">Services Table</h3>
                <a href="{{ route('admin.create') }}" class="btn btn-success float-right">Create New Service</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Location</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Active</th>
                            <th>Create Date</th>
                            <th>Updated Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->description }}</td>
                                <td>{{ $service->location }}</td>
                                <td><img src="{{Storage::url('services/'.$service->image)}}" alt="service image" width="60" height="60"></td>
                                <td>{{ $service->price }}</td>
                                <td>{{ $service->is_active ? 'active' : 'non active' }}</td>
                                <td>{{ $service->created_at }}</td>
                                <td>{{ $service->updated_at }}</td>
                                <td>
                                    <form action="{{ route('admin.destroy', $service->id) }}" method="POST">
                                        <div class="btn-group">
                                            <a href="{{ route('admin.edit', $service->id) }}" class="btn btn-info">edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">delete</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
            <!-- /.card-body -->
            {{-- <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
            </div> --}}
            <div class="card-footer" >
                <ul class="pagination pagination-sm m-0 float-right">
                    {!! $services->links() !!}
                </ul>
            </div>

        </div>
        <!-- /.card -->
    </div>
@endsection
