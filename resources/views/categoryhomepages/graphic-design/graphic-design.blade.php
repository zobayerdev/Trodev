<!DOCTYPE html>
<html lang="en">


<head>
    <title>Trodev- IT Company</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/images/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('user/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">
    <script defer src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <style>
        /* Style for the message box */
        #message-box {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            opacity: 1;
            transition: opacity 1s ease-in-out;
        }



        /* Slideshow container */
        /*.slideshow-container {*/
        /*    max-width: 1000px;*/
        /*    position: relative;*/
        /*    margin: auto;*/
        /*}*/

        .slideshow-container {
            max-width: 100%;
            position: relative;
            margin: auto;
        }

        .mySlides {
            display: none;
            text-align: center;
            height: 300px; /* Set a fixed height for all images */
        }

        .mySlides img {
            width: 50%;
            height: 100%; /* Adjust height to 100% to maintain aspect ratio */
            margin: auto; /* Center the image horizontally */
            display: block; /* Remove any default inline styling */
        }
        /* Caption text */


        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #072A6C;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: transparent;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
        }

        .typing-text {
            color: #072A6C;
            overflow: hidden;
            border-right: 2px solid #000; /* Adjust the cursor style */
            margin-right: 5px;
        }
    </style>
</head>


<body>
<div class="py-1 top">
    <div class="container">
        <div class="row">
            <div class="col-sm text-center text-md-left mb-md-0 mb-2 pr-md-4 d-flex topper align-items-center">
                <p class="mb-0 w-100">
                    <span class="text"><a href="mailto: info@trodev.com"><span
                                class="fa fa-paper-plane mr-3"></span><span class="text" style="color: white;">info@trodev.com</span></a></span>
                </p>
            </div>
            <div class="col-sm justify-content-center d-flex mb-md-0 mb-2">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="https://www.facebook.com/trodevit"
                           class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"
                                                                                          style="color: white;"><i
                                    class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"
                                                                                                   style="color: white;"><i
                                    class="sr-only">Twitter</i></span></a>
                        <a href="https://www.instagram.com/trodevit/"
                           class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"
                                                                                          style="color: white;"><i
                                    class="sr-only">Instagram</i></span></a>
                        <a href="https://www.linkedin.com/company/84349418/"
                           class="d-flex align-items-center justify-content-center"><span class="fa fa-linkedin"
                                                                                          style="color: white;"><i
                                    class="sr-only">LinkedIn</i></span></a>
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
                    <p class="con"><span>Phone Call</span> <span><a href="tel:+8801615257555">+880 1615257555</a></span>
                    </p>
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a href="{{route('graphicdesignhomepage')}}" class="nav-link">Home</a></li>
{{--                <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>--}}
                <li class="nav-item"><a href="{{route('graphicdesignservice')}}" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="{{route('graphicdesignproject')}}" class="nav-link">Projects</a></li>
{{--                <li class="nav-item"><a href="{{route('blogs')}}" class="nav-link">Blog</a></li>--}}
                <li class="nav-item"><a href="{{route('graphicdesignpricing')}}" class="nav-link">Pricing</a></li>
{{--                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>--}}
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<section class="hero-wrap js-fullheight" style="background-image: url('{{ asset('user/images/bg_1.png') }}');"
         data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-lg-6 ftco-animate">
                <div class="mt-5">
                    <h1 class="mb-4">We Build Great <br> <span id="typing" class="typing-text"></span> <br> Projects</h1>
                    <p class="mb-4">We're in this business since 2021 and We provide the best software services</p>
                    <p><a href="{{route('services')}}" class="btn btn-primary">Our Services</a> <a href="{{route('register')}}" class="btn btn-white">Touch Us</a></p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="ftco-section" id="about-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="about-wrap img w-100" style="background-image: url({{asset('user/images/bg_2.png')}});">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="flaticon-crane"></span></div>
                </div>
            </div>
            <div class="col-md-6 py-5 pl-md-5">
                <div class="row justify-content-center mb-4 pt-md-4">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Welcome to Trodev</span>
                        <h2 class="mb-4">Trodev, An IT Company</h2>
                        <div class="d-flex about">
                            <div class="icon"><span class="flaticon-hammer"></span></div>
                            <h3>We're in this business since 2021 and We provide the best software services</h3>
                        </div>
                        <p align="justify">Today's world is moving with the touch of modernity, different technologies
                            have touched that touch. With this technology, the whole world seems to be in the palm of
                            your hand.</p>
                        {{--                        <div class="d-flex video-image align-items-center mt-md-4">--}}
                        {{--                            <a href="#" class="video img d-flex align-items-center justify-content-center" style="background-image: url({{asset('user/images/about-2.jpg')}});">--}}
                        {{--                                <span class="fa fa-play-circle"></span>--}}
                        {{--                            </a>--}}
                        {{--                            <h4 class="ml-4">This is how we work on our clients, Watch video</h4>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-intro">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="img" style="background-image: url({{asset('user/images/bg_2.png')}});">
                    <div class="overlay"></div>
                    <h1 style="color: white; font-weight: bolder;">Types Of Graphics Design We Offer</h1>
                    <p>We also offer specific task based digital marketing service as listed below</p>
                    <p class="mb-0">
                    <p class="btn btn-primary" style="font-size: 20px;">Responsive Logo <br>Design</p>
                    <p class="btn btn-primary" style="font-size: 20px;">Responsive Banner<br>Design</p>
                    <p class="btn btn-primary" style="font-size: 20px;">Responsive Product Mockup <br>Design</p>
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-half-light">

    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4">Our Packages</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 monthly-package">
                @foreach($price as $servicec)
                    @if($servicec->services === 'Basic')
                        <div class="services-wrap ftco-animate custom-card-size">
                            <div class="text" style="color: black; text-align: left">
                                <h3 style="text-align: center">{{$servicec->services}}</h3>
                                <h1>{{$servicec->price}}Tk<span style="font-size: 14px;">/mo</span></h1>
                                <p>Licence:- {{$servicec->licence}}</p>
                                <p>File Type:- <strong>{{$servicec->file}}</strong></p>
                                <p>Format Type:- <strong>{{$servicec->format}}</strong></p>
                                <p>Mockup Design:- <strong>{{$servicec->mockup}} files</strong></p>
                                <p>Showcase Banner:- <strong>{{$servicec->showcase}} files</strong></p>
                                <p>Revision:- <strong>{{$servicec->revision}} time</strong></p>
                                <p>Service Time:- <strong>{{$servicec->service}} months</strong></p>


                                <div class="card-bottom">
                                    <a href="{{ route('register') }}" class="btn-custom" style="text-align: center">Book a Meeting</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-md-4 monthly-package">
                @foreach($price as $servicec)
                    @if($servicec->services === 'Standard')
                        <div class="services-wrap ftco-animate custom-card-size">
                            <div class="text" style="color: black; text-align: left">
                                <h3 style="text-align: center">{{$servicec->services}}</h3>
                                <h1>{{$servicec->price}}Tk<span style="font-size: 14px;">/mo</span></h1>
                                <p>Licence:- {{$servicec->licence}}</p>
                                <p>File Type:- <strong>{{$servicec->file}}</strong></p>
                                <p>Format Type:- <strong>{{$servicec->format}}</strong></p>
                                <p>Mockup Design:- <strong>{{$servicec->mockup}} files</strong></p>
                                <p>Showcase Banner:- <strong>{{$servicec->showcase}} files</strong></p>
                                <p>Revision:- <strong>{{$servicec->revision}} time</strong></p>
                                <p>Service Time:- <strong>{{$servicec->service}} months</strong></p>


                                <div class="card-bottom">
                                    <a href="{{ route('register') }}" class="btn-custom" style="text-align: center">Book a Meeting</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-md-4 monthly-package">
                @foreach($price as $servicec)
                    @if($servicec->services === 'Premium')
                        <div class="services-wrap ftco-animate custom-card-size">
                            <div class="text" style="color: black; text-align: left">
                                <h3 style="text-align: center">{{$servicec->services}}</h3>
                                <h1>{{$servicec->price}}Tk<span style="font-size: 14px;">/mo</span></h1>
                                <p>Licence:- {{$servicec->licence}}</p>
                                <p>File Type:- <strong>{{$servicec->file}}</strong></p>
                                <p>Format Type:- <strong>{{$servicec->format}}</strong></p>
                                <p>Mockup Design:- <strong>{{$servicec->mockup}} files</strong></p>
                                <p>Showcase Banner:- <strong>{{$servicec->showcase}} files</strong></p>
                                <p>Revision:- <strong>{{$servicec->revision}} time</strong></p>
                                <p>Service Time:- <strong>{{$servicec->service}} months</strong></p>


                                <div class="card-bottom">
                                    <a href="{{ route('register') }}" class="btn-custom" style="text-align: center">Book a Meeting</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter">
    <div class="img image-overlay" style="background-image: url({{asset('user/images/about-3.jpg')}});"></div>
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 py-5 bg-secondary aside-stretch">
                <div class="heading-section heading-section-white p-4 pl-md-0 py-md-5 pr-md-5">
                    <span class="subheading">Trodev is an Company</span>
                    <h2 class="mb-4">Best Provider for Industrial & Educational Services</h2>
                    <h4>At present people and rhythms are mixing with this modern world.</h4>
                    <p align="justify">Just as a person is modern and sees everything around him, so a person is using
                        his latest technology to carry on his activities. In the same way, we have this organization to
                        help people use technology in the right way. Through our organization we provide various
                        necessary apps, software and websites.</p>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="row">
                    <div class="col-md-12 d-flex counter-wrap ftco-animate">
                        <div class="block-18 bg-primary d-flex align-items-center justify-content-between">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="flaticon-engineer"></span></div>
                            <div class="text">
                                <strong class="number" data-number="{{$count}}">0</strong>
                                <span>Project Completed</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex counter-wrap ftco-animate">
                        <div class="block-18 d-flex align-items-center justify-content-between">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="flaticon-worker-1"></span></div>
                            <div class="text">
                                <strong class="number" data-number="20">0</strong>
                                <span>Happy Clients</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Our Global Projects</span>
                <h2 class="mb-4">Latest Projects</h2>
            </div>
        </div>
        <div class="row">
            @foreach($service as $projects)
                <a href="{{ route('singleprojectpages', ['id' => $projects->id]) }}">
                    <div class="col-md-4">

                        <div class="project">
                            <a href="{{asset('storage/'.$projects->image)}}"
                               class="img image-popup d-flex align-items-center"
                               style="background-image: url('{{asset('storage/'.$projects->image)}}');">
                                <div class="icon d-flex align-items-center justify-content-center mb-5"><span
                                        class="fa fa-plus"></span></div>
                            </a>
                            <div class="text">
                                <a href="{{ route('singleprojectpages', ['id' => $projects->id]) }}"><span class="subheading">{{$projects->type}}</span></a>
                                <a href="{{ route('singleprojectpages', ['id' => $projects->id]) }}"><h3>{{$projects->name}}</h3></a>
                                <p><span class="fa-solid fa-link mr-1"></span> <a href="{{ route('singleprojectpages', ['id' => $projects->id]) }}" style="color: white">Click here</a></p>
                            </div>
                        </div>

                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

{{--blog section--}}
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">Technologies</span>
                <h2 class="mb-4">Technologies We Used</h2>
            </div>
        </div>
        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="{{asset('category/apps/ai.png')}}">
            </div>

            <div class="mySlides fade">
                <img src="{{asset('category/apps/adobe_photoshop.png')}}">
            </div>

            <div class="mySlides fade">
                <img src="{{asset('category/apps/xs.png')}}">
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

    </div>
</section>


{{--<div>--}}
{{--    <p id="timeSpent">Time Spent: Loading...</p>--}}
{{--</div>--}}

<div id="message-box">This is your message!</div>
{{--#########################--}}
{{--Footersection is starting--}}
<footer class="ftco-footer">
    <div class="container mb-5 pb-4">
        <div class="row">
            <div class="col-lg col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2 d-flex align-items-center">About</h2>
                    <p>Today's world is moving with the touch of modernity, different technologies have touched that
                        touch.Our company gives you apps, software, websites, graphics design and ui/ux design for your
                        business.</p>
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
                        <li><a href="{{route('services')}}"><span class="fa fa-chevron-right mr-2"></span>Service</a>
                        </li>
                        <li><a href="{{route('about')}}"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
                        <li><a href="{{route('projectpage')}}"><span
                                    class="fa fa-chevron-right mr-2"></span>Projects</a></li>
                        <li><a href="{{route('blogs')}}"><span class="fa fa-chevron-right mr-2"></span>Blogs</a></li>
                        <li><a href="{{route('contact')}}"><span class="fa fa-chevron-right mr-2"></span>Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="fa fa-map-marker mr-3"></span><span class="text">H#34/4, Primary School Road, Islampur, Dattapara, Tongi, Gazipur, Bangladesh</span>
                            </li>
                            <li><a href="tel:+8801615257555"><span class="fa fa-phone mr-3"></span><span class="text">+88 01615257555</span></a>
                            </li>
                            <li><a href="mailto: info@trodev.com"><span class="fa fa-paper-plane mr-3"></span><span
                                        class="text">info@trodev.com</span></a></li>
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
                    <p class="mb-0">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved <i class="fa fa-heart" aria-hidden="true"></i> by <a
                            href="https://www.trodev.com" target="_blank">Trodev</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>

{{--##################--}}
{{--Request to talk us--}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center"
                        data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="fa fa-close"></span>
                </button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <form action="#" class="appointment-form ftco-animate">
                    <h3>Let's talk to your projects</h3>
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
                                        <option value="">App Development</option>
                                        <option value="">Web Development</option>
                                        <option value="">Software Development</option>
                                        <option value="">UI/UX Design</option>
                                        <option value="">Graphics Design</option>
                                        <option value="">Server Administration</option>
                                        <option value="">Other Services</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="4" class="form-control"
                                      placeholder="Message"></textarea>
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
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>

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

<script>
    var startTime = new Date();
    var totalTimeSpent = 0;


    var intervalId = setInterval(function () {
        var currentTime = new Date();
        var timeSpent = currentTime - startTime;
        totalTimeSpent += timeSpent;


        document.getElementById('timeSpent').innerText = 'Time Spent: ' + formatTime(totalTimeSpent / 1000); // Convert milliseconds to seconds


        startTime = currentTime;
    }, 100);


    window.addEventListener('unload', function () {
        var endTime = new Date();
        var timeSpent = endTime - startTime;


        totalTimeSpent += timeSpent;


        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/page-visit', true);
        xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
        xhr.send(JSON.stringify({ time_spent: totalTimeSpent / 1000 }));


        clearInterval(intervalId);
    });

    function formatTime(seconds) {
        var minutes = Math.floor(seconds / 60);
        seconds = Math.floor(seconds % 60);

        return minutes + 'm ' + seconds + 's';
    }
</script>

<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>

<script>
    // JavaScript for typing effect
    const targetElement = document.getElementById('typing');
    const words = ['Graphic Design']; // Add more words as needed
    let wordIndex = 0;
    let charIndex = 0;
    let isTyping = true;

    function type() {
        if (charIndex < words[wordIndex].length) {
            targetElement.innerHTML += words[wordIndex].charAt(charIndex);
            charIndex++;
            setTimeout(type, 150); // Adjust typing speed here
        } else {
            isTyping = false;
            setTimeout(erase, 1000); // Wait for a second before erasing
        }
    }

    function erase() {
        if (!isTyping) {
            targetElement.innerHTML = words[wordIndex].substring(0, charIndex);
            isTyping = true;
        }

        if (charIndex > 0) {
            targetElement.innerHTML = words[wordIndex].substring(0, charIndex - 1);
            charIndex--;
            setTimeout(erase, 50); // Adjust erasing speed here
        } else {
            wordIndex = (wordIndex + 1) % words.length;
            setTimeout(type, 500); // Wait for half a second before typing the next word
        }
    }

    // Start the typing effect
    type();
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>
</html>
