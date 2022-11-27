@extends('admin.master')

@section('title')
    Add Teacher
@endsection

@section('header')
    @include('admin.includes.header')
@endsection

@section('body')
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center h1">Manage Teacher</h4>
                            <div class="table-responsive">
                                <table class="table mb-0 table-bordered table-hover table-striped">
                                    <thead>
                                    <h5 class="text-center text-info">{{Session::get('message')}}</h5>
                                    <tr>
                                        <th>#</th>
                                        <th>Full Name</th>
                                        <th>Code</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Address</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($teachers as $teacher)
                                        <tr>
                                            <td scope="row">{{$loop->iteration}}</td>
                                            <td>{{$teacher->name}}</td>
                                            <td>{{$teacher->code}}</td>
                                            <td>{{$teacher->email}}</td>
                                            <td>{{$teacher->mobile}}</td>
                                            <td>{{$teacher->address}}</td>
                                            <td><img src="{{asset($teacher->image)}}" alt="" height="80" width="80"></td>
                                            <td>{{$teacher->status = 1 ? 'Active' : 'Inactive'}}</td>
                                            <td>
                                                <a href="{{route('edit.teacher', ['id' => $teacher->id])}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                <a href="" class="btn btn-danger btn-sm}" onclick="event.preventDefault(); document.getElementById('deleteUser{{$teacher->id}}').submit();"><i class="fa fa-trash "></i></a>
                                                <form action="{{route('delete.teacher', ['id' => $teacher->id])}}" method="POST" id="deleteUser{{$teacher->id}}">
                                                    @csrf
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

            </div>
        </div>
    </section>
@endsection



