@extends('admin.dashboard.master')

@section('title')
    Update Category
@endsection
@section('body')
    <div class="row py-3">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Update Category</h3>
                    <a href="{{route('categories.index')}}" class="btn btn-info float-end">Manage</a>
                </div>
                <div class="card-body">
                    {{--                    <h3 class="text-center text-info">{{Session::get('message')}}</h3>--}}
                    <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>
                    <form method="POST" action="{{route('categories.store')}}">
                        @csrf
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" value="{{ $categories->name }}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <label><input type="radio" name="status" value="1" {{$categories->status == 1 ? 'checked' : ''}}> Published</label>
                                <label><input type="radio" name="status" value="0" {{$categories->status == 0 ? 'checked' : ''}}>Unpublished</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit"  class="btn btn-outline-info" value="Update Category">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

