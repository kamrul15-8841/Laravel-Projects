@extends('master.front.master')

@section('title')
    Home
@endsection()

@section('body')

{{--    notice section--}}
    <div class="carousel" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card card-body">
                    <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores, blanditiis commodi consequatur, doloremque est harum incidunt ipsum laboriosam magni officia omnis,
                        qui quis recusandae soluta temporibus ut voluptas! Voluptas!</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores, blanditiis commodi consequatur, doloremque est harum incidunt ipsum laboriosam magni officia omnis,
                        qui quis recusandae soluta temporibus ut voluptas! Voluptas!</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card card-body">
                    <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores, blanditiis commodi consequatur, doloremque est harum incidunt ipsum laboriosam magni officia omnis,
                        qui quis recusandae soluta temporibus ut voluptas! Voluptas!</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores, blanditiis commodi consequatur, doloremque est harum incidunt ipsum laboriosam magni officia omnis,
                        qui quis recusandae soluta temporibus ut voluptas! Voluptas!</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card card-body">
                    <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores, blanditiis commodi consequatur, doloremque est harum incidunt ipsum laboriosam magni officia omnis,
                        qui quis recusandae soluta temporibus ut voluptas! Voluptas!</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores, blanditiis commodi consequatur, doloremque est harum incidunt ipsum laboriosam magni officia omnis,
                        qui quis recusandae soluta temporibus ut voluptas! Voluptas!</p>
                </div>
            </div>
        </div>
    </div>

{{--course item section--}}
    <section class="py-5">
        <div class="container">
            <div class="row g-4">

                <div class="col-md-6">
                    <div class="card mb-3" >
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/img/1.jpg')}}" class="img-fluid rounded-start w-100 h-100" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">

                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>

                                    <h5 class="card-title">Card title</h5>
                                    <ul>
                                        <li>Course Feature one</li>
                                        <li>Course Feature Two</li>
                                        <li>Course Feature Three</li>
                                        <li>Course Feature Four</li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="{{route('detail')}}" class="btn btn-info text-white">Read More</a>
                                    <a href="" class="btn btn-success float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-3" >
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/img/2.jpg')}}" class="img-fluid rounded-start w-100 h-100" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">

                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>

                                    <h5 class="card-title">Card title</h5>
                                    <ul>
                                        <li>Course Feature one</li>
                                        <li>Course Feature Two</li>
                                        <li>Course Feature Three</li>
                                        <li>Course Feature Four</li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="{{route('detail')}}" class="btn btn-info text-white">Read More</a>
                                    <a href="" class="btn btn-success float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-3" >
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/img/3.jpg')}}" class="img-fluid rounded-start w-100 h-100" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">

                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>

                                    <h5 class="card-title">Card title</h5>
                                    <ul>
                                        <li>Course Feature one</li>
                                        <li>Course Feature Two</li>
                                        <li>Course Feature Three</li>
                                        <li>Course Feature Four</li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="{{route('detail')}}" class="btn btn-info text-white">Read More</a>
                                    <a href="" class="btn btn-success float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-3" >
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/img/4.jpg')}}" class="img-fluid rounded-start w-100 h-100" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">

                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>

                                    <h5 class="card-title">Card title</h5>
                                    <ul>
                                        <li>Course Feature one</li>
                                        <li>Course Feature Two</li>
                                        <li>Course Feature Three</li>
                                        <li>Course Feature Four</li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="{{route('detail')}}" class="btn btn-info text-white">Read More</a>
                                    <a href="" class="btn btn-success float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

{{--subscriber section--}}
    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-9">
                                <input type="text" class="form-control" placeholder="Enter Your Email">
                            </div>
                            <div class="col-3">
                                <input type="submit" class="btn btn-info w-100 text-white" value="Subscribe Now">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection()
