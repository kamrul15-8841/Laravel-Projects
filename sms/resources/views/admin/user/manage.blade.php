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
                                    <tr>
                                        <th>#</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
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



