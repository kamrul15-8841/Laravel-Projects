@extends('master.front.master')

@section('title')
    Home
@endsection()

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{asset('/img/1.jpg')}}" class="img-fluid w-100 h-100" alt="...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h1>A well-known quote, contained in a blockquote element.</h1>
                        <p>Course Fee : 15000TK</p>
                        <hr>
                        <h2 class="card-title">Trainer Name</h2>
                        <ul>
                            <li>Course Feature one</li>
                            <li>Course Feature Two</li>
                            <li>Course Feature Three</li>
                            <li>Course Feature Four</li>
                        </ul>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam culpa cumque debitis, deserunt dolore et harum illo, inventore laboriosam magnam mollitia perferendis provident qui quis quisquam, repellat tenetur unde veniam.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam culpa cumque debitis, deserunt dolore et harum illo, inventore laboriosam magnam mollitia perferendis provident qui quis quisquam, repellat tenetur unde veniam.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam culpa cumque debitis, deserunt dolore et harum illo, inventore laboriosam magnam mollitia perferendis provident qui quis quisquam, repellat tenetur unde veniam.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="" class="btn btn-info text-white mb-3">Add To Card</a>
                        <a href="" class="btn btn-success float-end">Apply Now</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
{{--detail section--}}
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body rounded-0">
                        <h1>Course Module Details</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores debitis, dignissimos dolor ducimus eligendi et facere ipsam iste labore nobis non nostrum placeat porro quasi qui repudiandae ut. Debitis, id?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores debitis, dignissimos dolor ducimus eligendi et facere ipsam iste labore nobis non nostrum placeat porro quasi qui repudiandae ut. Debitis, id?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores debitis, dignissimos dolor ducimus eligendi et facere ipsam iste labore nobis non nostrum placeat porro quasi qui repudiandae ut. Debitis, id?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores debitis, dignissimos dolor ducimus eligendi et facere ipsam iste labore nobis non nostrum placeat porro quasi qui repudiandae ut. Debitis, id?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores debitis, dignissimos dolor ducimus eligendi et facere ipsam iste labore nobis non nostrum placeat porro quasi qui repudiandae ut. Debitis, id?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores debitis, dignissimos dolor ducimus eligendi et facere ipsam iste labore nobis non nostrum placeat porro quasi qui repudiandae ut. Debitis, id?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores debitis, dignissimos dolor ducimus eligendi et facere ipsam iste labore nobis non nostrum placeat porro quasi qui repudiandae ut. Debitis, id?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores debitis, dignissimos dolor ducimus eligendi et facere ipsam iste labore nobis non nostrum placeat porro quasi qui repudiandae ut. Debitis, id?</p>
                        <hr>
                        <a href="" class="btn btn-info w-25 mx-auto">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    footer section--}}
    <section class="py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-body">
                        <h1>About Institute</h1>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium assumenda debitis dicta error eum exercitationem expedita, iste labore minus odio odit officiis placeat, quia quibusdam quisquam recusandae rerum tempore velit?</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body">
                        <h1>Popular Lnks</h1>
                        <hr>
                        <ul>
                            <li><a href="">Popular Course One</a></li>
                            <li><a href="">Popular Course Two</a></li>
                            <li><a href="">Popular Course Three</a></li>
                            <li><a href="">Popular Course Four</a></li>
                            <li><a href="">Popular Course Five</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body">
                        <h1>Follow Us On</h1>
                        <hr>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2">
                                    <a href=""><i class="fa-brands fa-square-facebook text-primary h1"></i></a>
                                </div>
                                <div class="col-md-2">
                                    <a href=""><i class="fa-brands fa-square-twitter text-primary h1"></i></a>
                                </div> <div class="col-md-2">
                                    <a href=""><i class="fa-brands fa-linkedin text-primary h1"></i></a>
                                </div>
                                <div class="col-md-2">
                                    <a href=""><i class="fa-brands fa-square-youtube text-primary h1"></i></a>
                                </div> <div class="col-md-2">
                                    <a href=""><i class="fa-brands fa-square-google-plus text-primary h1"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <a href=""><i class="fa-brands fa-square-instagram text-primary h1"></i></a>
                                </div>
                                <div class="col-md-2">
                                    <a href=""><i class="fa-brands fa-square-whatsapp text-primary h1"></i></a>
                                </div> <div class="col-md-2">
                                    <a href=""><i class="fa-brands fa-square-github text-primary h1"></i></a>
                                </div>
                                <div class="col-md-2">
                                    <a href=""><i class="fa-brands fa-discord text-primary h1"></i></a>
                                </div> <div class="col-md-2">
                                    <a href=""><i class="fa-brands fa-telegram text-primary h1"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <a href=""><i class="fa-brands fa-tiktok text-primary h1"></i></a>
                                </div>
                                <div class="col-md-2">
                                    <a href=""><i class="fa-brands fa-square-facebook text-primary h1"></i></a>
                                </div> <div class="col-md-2">
                                    <a href=""><i class="fa-brands fa-square-facebook text-primary h1"></i></a>
                                </div>
                                <div class="col-md-2">
                                    <a href=""><i class="fa-brands fa-square-facebook text-primary h1"></i></a>
                                </div> <div class="col-md-2">
                                    <a href=""><i class="fa-brands fa-square-facebook text-primary h1"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
