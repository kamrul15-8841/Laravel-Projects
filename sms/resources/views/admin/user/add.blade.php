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
                            <h4 class="card-title mb-4 text-center">Add User</h4>
                            <h5 class="text-center text-info">{{Session::get('message')}}</h5>
                            <form action="{{route('new.user')}}" method="POST">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Full name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="full_name" name="name">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-9">
                                        <div>
                                                <button type="submit" class="btn btn-primary w-md">Create New User</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


