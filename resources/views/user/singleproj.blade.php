<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wilcon - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/images/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('user/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('user/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('user/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{asset('user/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">
</head>
<body>
<div class="py-1 top">
    <div class="container">
        <div class="row">
            <div class="col-sm text-center text-md-left mb-md-0 mb-2 pr-md-4 d-flex topper align-items-center">
                <p class="mb-0 w-100">
                    <span class="text"><a href="mailto: info@trodev.com"><span class="fa fa-paper-plane mr-3"></span><span class="text" style="color: white;">info@trodev.com</span></a></span>
                </p>
            </div>
            <div class="col-sm justify-content-center d-flex mb-md-0 mb-2">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="https://www.facebook.com/trodevit" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook" style="color: white;"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter" style="color: white;"><i class="sr-only">Twitter</i></span></a>
                        <a href="https://www.instagram.com/trodevit/" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram" style="color: white;"><i class="sr-only">Instagram</i></span></a>
                        <a href="https://www.linkedin.com/company/84349418/" class="d-flex align-items-center justify-content-center"><span class="fa fa-linkedin" style="color: white;"><i class="sr-only">LinkedIn</i></span></a>
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-7 d-flex topper align-items-center text-lg-right justify-content-end">
                <p class="mb-0 register-link"><a href="#" class="btn btn-primary">{{$user->name}}</a></p>
            </div>
        </div>
    </div>
</div>
<div class="pt-4 pb-5">
    <div class="container">
        <div class="row d-flex align-items-start align-items-center px-3 px-md-0">
            <div class="col-md-4 d-flex mb-2 mb-md-0">
                <a class="navbar-brand d-flex align-items-center" href="{{route('home')}}">
                    <span class="flaticon flaticon-crane"></span>
                    <span class="ml-2">Wilcon <small>Construction Company</small></span>
                </a>
            </div>
            <div class="col-md-4 d-flex topper mb-md-0 mb-2 align-items-center">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="fa fa-map"></span>
                </div>
                <div class="pr-md-4 pl-md-3 pl-3 text">
                    <p class="con"><span>Free Call</span> <span>+1 234 456 78910</span></p>
                    <p class="con">Call Us Now 24/7 Customer Support</p>
                </div>
            </div>
            <div class="col-md-4 d-flex topper mb-md-0 align-items-center">
                <div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-paper-plane"></span>
                </div>
                <div class="text pl-3 pl-md-3">
                    <p class="hr"><span>Our Location</span></p>
                    <p class="con">198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="{{route('homepage',['id'=>$user->id])}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route('aboutus',['id'=>$user->id])}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{route('servicepages',['id'=>$user->id])}}" class="nav-link">Services</a></li>
                <li class="nav-item active"><a href="{{route('projectpages',['id'=>$user->id])}}" class="nav-link">Projects</a></li>
                <li class="nav-item"><a href="{{route('blogspages',['id'=>$user->id])}}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{route('conatactpage',['id'=>$user->id])}}" class="nav-link">Contact</a></li>
            </ul>
            <a href="{{route('logout')}}" class="btn-custom">Logout</a>
        </div>
    </div>
</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('storage/'.$id->image)}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="#">Blog <i class="fa fa-chevron-right"></i></a></span> <span>Blog Single <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">{{$id->name}}</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3">{{$id->title}}</h2>

                @php
                    $date = date("M d, Y", strtotime($id->created_at));

                    $write = $id->write;
                    $words = explode(' ', $write);
                    $first_two_words = implode(' ', array_slice($words, 2, 3));

                @endphp
                <p>Publish Date: {{$date}}</p>

                <p>
                    <?php
                    $lines = explode(".", $id->description); // Split description into lines by full stops
                    $firstTwoLines = array_slice($lines, 0, 2); // Get the first two lines
                    echo implode(".", $firstTwoLines); // Display the first two lines joined by full stops
                    ?>
                </p>

                <p>
                    <img src="{{ asset('storage/'.$id->image) }}" alt="" class="img-fluid">
                </p>
                <?php
                $lines = explode(".", $id->description); // Split description into lines by full stops
                $firstTwoLines = array_slice($lines, 2, 4); // Get the first two lines
                echo implode(".", $firstTwoLines);
                ?>
                <?php
                $nextFourLines = array_slice($lines, 4, 39);

                $linesToShow = array_slice($lines, 4, 4);


                $remainingLines = array_slice($lines, 6);

                $chunks = array_chunk($remainingLines, 5);

                echo '<p>' . implode(".", $linesToShow) . '.' . '</p>';

                foreach ($chunks as $chunk) {
                    echo '<p>' . implode(".", $chunk) . ".</p>";
                }
                ?>




                <section class="ftco-section bg-half-light">
                    <div class="container">
                        <div class="row justify-content-center mb-5 pb-2">
                            <div class="col-md-8 text-center heading-section ftco-animate">
                                <h2 class="mb-4">Our Packages</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                @foreach($basic as $servicec)
                                    <div class="services-wrap ftco-animate">
                                        <div class="text">
                                            <h1>{{$servicec->packagestype}}</h1>
                                            <h2>{{$servicec->validity}}</h2>
                                            <p>Maintainace Charge: {{$servicec->monthlycharge}}</p>
                                            <p>Price: {{$servicec->softwareprice}}</p>
                                            <p>SSL Certificate: {{$servicec->ssl}}</p>
                                            <p>Training: {{$servicec->training}}</p>
                                            <p>Revision: {{$servicec->revision}}</p>
                                            <p>Domain: {{$servicec->domain}}</p>
                                            <p>Storage: {{$servicec->storage}}</p>
                                            @php
                                                $total = $servicec->monthlycharge + $servicec->ssl + $servicec->training  + $servicec->storage + $servicec->monthlycharge;
                                            @endphp
                                            <a href="#" class="btn-custom">Total: {{$total}}Tk</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                @foreach($standard as $servicec)
                                    <div class="services-wrap ftco-animate">
                                        <div class="text">
                                            <h1>{{$servicec->packagestype}}</h1>
                                            <h2>{{$servicec->validity}}</h2>
                                            <p>Maintainace Charge: {{$servicec->monthlycharge}}</p>
                                            <p>Price: {{$servicec->softwareprice}}</p>
                                            <p>SSL Certificate: {{$servicec->ssl}}</p>
                                            <p>Training: {{$servicec->training}}</p>
                                            <p>Revision: {{$servicec->revision}}</p>
                                            <p>Domain: {{$servicec->domain}}</p>
                                            <p>Storage: {{$servicec->storage}}</p>
                                            @php
                                                $total = $servicec->monthlycharge + $servicec->ssl + $servicec->training  + $servicec->storage + $servicec->monthlycharge;
                                            @endphp
                                            <a href="#" class="btn-custom">Total: {{$total}}Tk</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                @foreach($premium as $servicec)
                                    <div class="services-wrap ftco-animate">
                                        <div class="text">
                                            <h1>{{$servicec->packagestype}}</h1>
                                            <h2>{{$servicec->validity}}</h2>
                                            <p>Maintainace Charge: {{$servicec->monthlycharge}}</p>
                                            <p>Price: {{$servicec->softwareprice}}</p>
                                            <p>SSL Certificate: {{$servicec->ssl}}</p>
                                            <p>Training: {{$servicec->training}}</p>
                                            <p>Revision: {{$servicec->revision}}</p>
                                            <p>Domain: {{$servicec->domain}}</p>
                                            <p>Storage: {{$servicec->storage}}</p>
                                            @php
                                                $total = $servicec->monthlycharge + $servicec->ssl + $servicec->training  + $servicec->storage + $servicec->monthlycharge;
                                            @endphp
                                            <a href="#" class="btn-custom">Total: {{$total}}Tk</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>




            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <h3 class="heading-sidebar">Services</h3>
                    <ul class="categories">
                        {{--                        @foreach($offers as $service)--}}
                        {{--                            <li><a href="#">{{$service->tools}}</a></li>--}}
                        {{--                        @endforeach--}}
                    </ul>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3 class="heading-sidebar">Recent Blog</h3>
                    @foreach($proj as $blogs)
                        @if($blogs->id !== $id->id)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" href="{{route('singlepages',['user'=>$user->id,'id' => $blogs->id])}}" style="background-image: url('{{asset('storage/'.$blogs->image)}}');"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="{{route('singlepages',['user'=>$user->id,'id' => $blogs->id])}}">{{$blogs->name}}</a></h3>
                                    <div class="meta">
                                        @php
                                            $date = date("M d, Y", strtotime($blogs->created_at));

                                            $write = $blogs->write;
                                            $words = explode(' ', $write);
                                            $first_two_words = implode(' ', array_slice($words, 2, 3));

                                        @endphp
                                        <div><a href="#"><span class="icon-calendar"></span> {{$date}}</a></div>
                                        <div><a href="#"><span class="icon-person"></span> {{$blogs->description}}</a></div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>


            </div>

        </div>
    </div>
</section> <!-- .section -->

<footer class="ftco-footer">
    <div class="container mb-5 pb-4">
        <div class="row">
            <div class="col-lg col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2 d-flex align-items-center">About</h2>
                    <p>Far far away, behind the word mountains, far from the countries.</p>
                    <ul class="ftco-footer-social list-unstyled mt-4">
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Links</h2>
                    <div class="d-flex">
                        <ul class="list-unstyled mr-md-4">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Project</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog Posts</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Industries</a></li>
                        </ul>
                        <ul class="list-unstyled ml-md-5">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Help</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Privacy Policy</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Customer Services</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Prompt Delivery</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Reliable Equipment</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>New Heavy Equipment</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="fa fa-map-marker mr-3"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                            <li><a href="#"><span class="fa fa-phone mr-3"></span><span class="text">+2 392 3929 210</span></a></li>
                            <li><a href="#"><span class="fa fa-paper-plane mr-3"></span><span class="text">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 aside-stretch py-3">

                    <p class="mb-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="fa fa-close"></span>
                </button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <form action="#" class="appointment-form ftco-animate">
                    <h3>Request Quote</h3>
                    <div class="">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group">
                            <div class="form-field">
                                <div class="select-wrap">
                                    <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select Your Services</option>
                                        <option value="">Architecture</option>
                                        <option value="">Renovation</option>
                                        <option value="">Construction</option>
                                        <option value="">Interior &amp; Exterior</option>
                                        <option value="">Chemical Research</option>
                                        <option value="">Petroleum &amp; Gas</option>
                                        <option value="">Other Services</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script src="{{asset('user/js/jquery.min.js')}}"></script>
<script src="{{asset('user/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('user/js/popper.min.js')}}"></script>
<script src="{{asset('user/js/bootstrap.min.js')}}"></script>
<script src="{{asset('user/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('user/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('user/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('user/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('user/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('user/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('user/js/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('user/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('user/js/google-map.js')}}"></script>

<script src="{{asset('user/js/main.js')}}"></script>

</body>
</html>