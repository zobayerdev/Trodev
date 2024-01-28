<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trodev- Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/images/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>
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
                <p class="mb-0 register-link"><a href="{{route('register')}}" class="btn btn-primary">Sign up</a></p>
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
                    <span class="ml-2">Trodev <small>IT & Software Company</small></span>
                </a>
            </div>
            <div class="col-md-4 d-flex topper mb-md-0 mb-2 align-items-center">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="fa fa-paper-plane"></span>
                </div>
                <div class="pr-md-4 pl-md-3 pl-3 text">
                    <p class="con"><span>Phone Call</span> <span><a href="tel:+8801615257555">+880 1615257555</a></span></p>
                    <p class="con">Call Us Now 24/7 Customer Support</p>
                </div>
            </div>
            <div class="col-md-4 d-flex topper mb-md-0 align-items-center">
                <div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-map"></span>
                </div>
                <div class="text pl-3 pl-md-3">
                    <p class="hr"><span>Our Office Location</span></p>
                    <p class="con">H#34/4, Primary School Road, Islampur, Dattapara, House-Building, Tongi, Gazipur </p>
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
                <li class="nav-item"><a href="{{route('uiuxhomepage')}}" class="nav-link">Home</a></li>
{{--                <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>--}}
                <li class="nav-item active"><a href="{{route('uiuxservice')}}" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="{{route('uiuxproject')}}" class="nav-link">Projects</a></li>
{{--                <li class="nav-item"><a href="{{route('blogs')}}" class="nav-link">Blog</a></li>--}}
                <li class="nav-item"><a href="{{route('uiuxpricing')}}" class="nav-link">Pricing</a></li>
{{--                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>--}}
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('user/images/bg_1.png') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Services <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Services</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-half-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Our Services</span>
                <h2 class="mb-4">Industries We Serve</h2>
            </div>
        </div>
        <div class="row">
            @foreach($service as $services)
                <div class="col-md-4">
                    <div class="services-wrap ftco-animate">
                        <div class="img" style="background-image: url({{asset('storage/'.$services->image)}});"></div>
                        <div class="text">
                            <h2>{{$services->title}}</h2>
                            <p align="justify">{{$services->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<footer class="ftco-footer">
    <div class="container mb-5 pb-4">
        <div class="row">
            <div class="col-lg col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2 d-flex align-items-center">About</h2>
                    <p>Today's world is moving with the touch of modernity, different technologies have touched that touch.Our company gives you apps, software, websites, graphics design and ui/ux design for your business.</p>
                    <ul class="ftco-footer-social list-unstyled mt-4">
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Services</h2>
                    <div class="d-flex">
                        <ul class="list-unstyled mr-md-4">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>App Development</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Web Development</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Software Development</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>UI/UX Development</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Graphics Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">See More</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('home')}}"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
                        <li><a href="{{route('about')}}"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
                        <li><a href="{{route('projectpage')}}"><span class="fa fa-chevron-right mr-2"></span>Projects</a></li>
                        <li><a href="{{route('blogs')}}"><span class="fa fa-chevron-right mr-2"></span>Blogs</a></li>
                        <li><a href="{{route('contact')}}"><span class="fa fa-chevron-right mr-2"></span>Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="fa fa-map-marker mr-3"></span><span class="text">H#34/4, Primary School Road, Islampur, Dattapara, Tongi, Gazipur, Bangladesh</span></li>
                            <li><a href="tel:+8801615257555"><span class="fa fa-phone mr-3"></span><span class="text">+88 01615257555</span></a></li>
                            <li><a href="mailto: info@trodev.com"><span class="fa fa-paper-plane mr-3"></span><span class="text">info@trodev.com</span></a></li>
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
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.trodev.com" target="_blank">Trodev</a>
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
