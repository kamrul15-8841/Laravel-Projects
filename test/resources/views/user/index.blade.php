@extends('admin.master')

@section('title')
    Manage User
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Manage User </h3>
                    <span>
                        <a href="{{route('users.create')}}" class="btn btn-info float-end">Create</a>
                    </span>
                </div>
{{--                <div class="card-body table-responsive">--}}
                <div class="card-body">
{{--                    <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>--}}
{{--                    <table class="table table-hover table-bordered " id="basic-datatable">--}}
{{--                    <table class="table table-hover table-bordered " id="courseTable">--}}
                        <table id="courseTable" class="table table-hover table-striped w-100 nowrap">
                        <thead>
                        <tr>
                            <th>SI NO</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->first_name}}</td>
                                <td>{{$course->last_name}}</td>
                                <td>{{$course->email}}</td>
                                <td>

                                     <a href="{{ route('users.show', $course->id) }}" class="btn btn-sm btn-primary" title="Course Detail">
                                        <i class="uil-bars"></i>
                                     </a>

                                    <a href="{{ route('users.edit', $course->id) }}" class="btn btn-sm btn-warning" title="Edit Course">
                                        <i class="uil-edit"></i>
                                    </a>

                                    <form action="{{ route('users.destroy', $course->id) }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger "  onclick="return confirm('Are you sure you want to delete this');" title="Delete Course">
                                            <i class="uil-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection




