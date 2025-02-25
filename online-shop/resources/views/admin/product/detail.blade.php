@extends('admin.dashboard.master')

@section('title')
    Product Details
@endsection

@section('body')

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                            <li class="breadcrumb-item active">Product Details</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Product Details</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Product image -->
                                <a href="javascript: void(0);" class="text-center d-block mb-4">
                                    <img src="{{asset('/').$product->image}}" class="img-fluid" style="max-width: 280px;" alt="Product-img" />
                                </a>

                                <div class="d-lg-flex d-none justify-content-center">
                                    <a href="javascript: void(0);">
                                        <img src="{{asset('/').$product->image}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Product-img" />
                                    </a>
                                    <a href="javascript: void(0);" class="ms-2">
                                        <img src="{{asset('/').$product->image}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Product-img" />
                                    </a>
                                    <a href="javascript: void(0);" class="ms-2">
                                        <img src="{{asset('/').$product->image}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Product-img" />
                                    </a>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-7">
                                <form class="ps-lg-4">
                                    <!-- Product title -->
                                    <h3 class="mt-0">Amazing Modern {{$product->name}}<a href="javascript: void(0);" class="text-muted"><i class="mdi mdi-square-edit-outline ms-2"></i></a> </h3>
                                    <p class="mb-1">Added Date: 09/12/2018</p>
                                    <p class="font-16">
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                    </p>

                                    <!-- Product stock -->
                                    <div class="mt-3">
                                        <h4><span class="badge badge-success-lighten">Instock</span></h4>
                                    </div>

                                    <!-- Product description -->
                                    <div class="mt-4">
                                        <h6 class="font-14">Total Price:</h6>
                                        <h3>TK. {{$product->price}}</h3>
                                    </div>

                                    <!-- Quantity -->
                                    <div class="mt-4">
                                        <h6 class="font-14">Quantity</h6>
                                        <div class="d-flex">
                                            <input type="number" min="1" value="1" class="form-control" placeholder="Qty" style="width: 90px;">
                                            <button type="button" class="btn btn-danger ms-2"><i class="mdi mdi-cart me-1"></i> Add to cart</button>
                                        </div>
                                    </div>

                                    <!-- Product description -->
                                    <div class="mt-4">
                                        <h6 class="font-14">Description:</h6>
                                        <p>{!! $product->description !!}</p>
                                    </div>

                                    <!-- Product information -->
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h6 class="font-14">Available Stock:</h6>
                                                <p class="text-sm lh-150">1784</p>
                                            </div>
                                            <div class="col-md-4">
                                                <h6 class="font-14">Number of Orders:</h6>
                                                <p class="text-sm lh-150">5,458</p>
                                            </div>
                                            <div class="col-md-4">
                                                <h6 class="font-14">Revenue:</h6>
                                                <p class="text-sm lh-150">$8,57,014</p>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div> <!-- end col -->
                        </div> <!-- end row-->

                        <div class="table-responsive mt-4">
                            <table class="table table-bordered table-centered mb-0">
                                <thead class="table-light">
                                <tr>
                                    <th>Outlets</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Revenue</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>ASOS Ridley Outlet - NYC</td>
                                    <td>$139.58</td>
                                    <td>
                                        <div class="progress-w-percent mb-0">
                                            <span class="progress-value">478 </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 56%;" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$1,89,547</td>
                                </tr>
                                <tr>
                                    <td>Marco Outlet - SRT</td>
                                    <td>$149.99</td>
                                    <td>
                                        <div class="progress-w-percent mb-0">
                                            <span class="progress-value">73 </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 16%;" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$87,245</td>
                                </tr>
                                <tr>
                                    <td>Chairtest Outlet - HY</td>
                                    <td>$135.87</td>
                                    <td>
                                        <div class="progress-w-percent mb-0">
                                            <span class="progress-value">781 </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$5,87,478</td>
                                </tr>
                                <tr>
                                    <td>Nworld Group - India</td>
                                    <td>$159.89</td>
                                    <td>
                                        <div class="progress-w-percent mb-0">
                                            <span class="progress-value">815 </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$55,781</td>
                                </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

    </div> <!-- container -->

    {{--    <section class="py-4">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="card">--}}
{{--                    <img src="{{asset('/').$product->image}}" height="383" width="100%">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="card card-body">--}}
{{--                    <h1 class="text-info card-header text-center">Product Name: {{$product->name}}</h1>--}}
{{--                    <h3 class="text-warning">Price: TK.{{$product->price}}</h3>--}}
{{--                    <h3 class="text-secondary">Category name: {{$product->category->name}}</h3>--}}
{{--                    <h3 class="text-primary">Brand Name: {{$product->brand->name}}</h3>--}}
{{--                    <hr>--}}
{{--                    <a href="" class="btn btn-info flex">Add To Cart</a>--}}
{{--                    <br>--}}
{{--                    <a href="" class="btn btn-success flex">Buy Now</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="card card-body">--}}
{{--                    <p class="text-muted fw-normal">{!! $product->description !!}</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


@endsection
