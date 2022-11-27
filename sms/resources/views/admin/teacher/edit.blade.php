@extends('admin.master')

@section('title')
    Update Teacher
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
                            <h4 class="card-title mb-4 text-center">Update Teacher</h4>
                            <h5 class="text-center text-info">{{Session::get('message')}}</h5>
                            <form action="{{route('update.teacher', ['id'=>$teacher->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label for="horizontal-name-input" class="col-sm-3 col-form-label">Full name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="horizontal-name-input" name="name" value="{{$teacher->name}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="horizontal-email-input" name="email" value="{{$teacher->email}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-mobile-input" class="col-sm-3 col-form-label">Mobile</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="horizontal-mobile-input" name="mobile" value="{{$teacher->mobile}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-address-input" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <textarea name="address" id="horizontal-address-input" cols="10" rows="5" class="form-control">{{$teacher->address}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control-file" name="image" accept="image/*">
                                        <img src="{{asset($teacher->image)}}" alt="" width="80" height="80">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-9">
                                        <div>
                                            <button type="submit" class="btn btn-primary w-md">Update Teacher</button>
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




