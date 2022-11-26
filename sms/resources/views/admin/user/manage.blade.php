@extends('admin.master')

@section('title')
    Add User
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
                            <h4 class="card-title text-center h1">Manage User</h4>
                            <div class="table-responsive">
                                <table class="table mb-0 table-bordered table-hover table-striped">
                                    <thead>
                                    <h5 class="text-center text-info">{{Session::get('message')}}</h5>
                                    <tr>
                                        <th>#</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <a href="{{route('edit.user', ['id' => $user->id])}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
{{--                                            <a href="{{route('delete.user', ['id' => $user->id])}}" class="btn btn-danger btn-sm {{$user->id == 1 ? 'disabled' : '' }}" onclick="return confirm('Are You sure want to delete this ?')"><i class="fa fa-trash "></i>--}}
                                            <a href="" class="btn btn-danger btn-sm {{$user->id == 1 ? 'disabled' : '' }}" onclick="event.preventDefault(); document.getElementById('deleteUser{{$user->id}}').submit();"><i class="fa fa-trash "></i></a>
                                            <form action="{{route('delete.user', ['id' => $user->id])}}" method="POST" id="deleteUser{{$user->id}}">
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



