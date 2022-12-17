@extends('admin.dashboard.master')

@section('title')
    Manage course Category
@endsection

@section('body')
    <div class="row pt-3">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Manage Course Category</h3>
                    <span>
                        <a href="{{route('categories.create')}}" class="btn btn-info float-end">Create</a>
                    </span>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>
                    <table class="table table-hover table-bordered" id="basic-datatable">
                        <thead>
                        <tr>
                            <th>SI NO</th>
                            <th>Category Name</th>
                            <th>Category Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    {{--                                    <a href="{{route('course-categories.edit', ['course_category' => $courseCategory->id])}}" class="btn btn-sm btn-outline-warning">--}}
                                    <a href="{{route('categories.edit', $category->id)}}" class="btn btn-sm btn-outline-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <form action="{{route('categories.destroy', $category->id)}}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-outline-danger "  onclick="return confirm('Are you sure you want to delete this');">
                                            {{--                                    <a href="{{route('course-categories.destroy', [[$category->id] }}" class="btn btn-sm btn-outline-danger "  onclick="return confirm('Are you sure you want to delete this');">--}}
                                            <i class="fa fa-trash"></i>
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

