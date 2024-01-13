<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trodev- About Us</title>
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
                <p class="mb-0 register-link"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Sign up</a></p>
            </div>
        </div>
    </div>
</div>
<div class="pt-4 pb-5">
    <div class="container">
        <div class="row d-flex align-items-start align-items-center px-3 px-md-0">
            <div class="col-md-4 d-flex mb-2 mb-md-0">
                <a class="navbar-brand d-flex align-items-center" href="">
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
                <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="{{route('about')}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{route('services')}}" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="{{route('projectpage')}}" class="nav-link">Projects</a></li>
                <li class="nav-item"><a href="{{route('blogs')}}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
            </ul>
            <a href="#" class="btn-custom" data-toggle="modal" data-target="#exampleModalCenter">Sign In</a>
        </div>
    </div>
</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('user/images/bg_1.png') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>About Us <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">About Us</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section" id="about-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="about-wrap img w-100" style="background-image: url('{{ asset('user/images/bg_2.png') }}');">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-crane"></span></div>
                </div>
            </div>
            <div class="col-md-6 py-5 pl-md-5">
                <div class="row justify-content-center mb-4 pt-md-4">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Welcome to Trodev</span>
                        <h2 class="mb-4">Trodev is an IT Company</h2>
                        <div class="d-flex about">
                            <div class="icon"><span class="flaticon-hammer"></span></div>
                            <h3>We're in this business since 2021 and We provide the best software services</h3>
                        </div>
                        <p>Today's world is moving with the touch of modernity, different technologies have touched that touch. With this technology, the whole world seems to be in the palm of your hand.</p>
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
                <div class="img"  style="background-image: url('{{ asset('user/images/bg_2.png') }}');">
                    <div class="overlay"></div>
                    <h2>Providing Personalized and High Quality Services</h2>
                    <p>We can manage your dream projects to make with responsive design.</p>
                    <p class="mb-0"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Touch Us</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter">
    <div class="img image-overlay" style="background-image: url('{{asset('user/images/about-3.jpg')}}');"></div>
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 py-5 bg-secondary aside-stretch">
                <div class="heading-section heading-section-white p-4 pl-md-0 py-md-5 pr-md-5">
                    <span class="subheading">TRODEV IS AN IT COMPANY</span>
                    <h2 class="mb-4">Best Provider for Industrial & Educational Services</h2>
                    <h4>At present people and rhythms are mixing with this modern world.</h4>
                    <p align="justify">Just as a person is modern and sees everything around him, so a person is using his latest technology to carry on his activities. In the same way, we have this organization to help people use technology in the right way. Through our organization we provide various necessary apps, software and websites.</p>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="row">
                    <div class="col-md-12 d-flex counter-wrap ftco-animate">
                        <div class="block-18 bg-primary d-flex align-items-center justify-content-between">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-engineer"></span></div>
                            <div class="text">
                                {{--change it mr rubayet--}}
                                <strong class="number" data-number="{{$complete}}">0</strong>
                                <span>Project Completed</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex counter-wrap ftco-animate">
                        <div class="block-18 d-flex align-items-center justify-content-between">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-worker-1"></span></div>
                            <div class="text">
                                <strong class="number" data-number="54900">0</strong>
                                <span>Happy Customers</span>
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
                <span class="subheading">Our Team</span>
                <h2 class="mb-4">Our Team</h2>
            </div>
        </div>
        <div class="row">
            @foreach($employee as $emp)
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url({{asset('storage/'. $emp->pic)}});">
                            <div class="box">
                                <h2>{{$emp->Name}}</h2>
                                <p>{{$emp->Designation}}</p>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <blockquote>
                                <p>&ldquo;With great power comes great responsibility&rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="{{asset('storage/'. $emp->pic)}}" alt="">
                                </div>
                                <div class="name align-self-center ml-3">{{$emp->Name}} <span class="position">{{$emp->Designation}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb testimony-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-6 p-4 pl-md-0 py-md-5 pr-md-5 aside-stretch d-flex align-items-center">
                <div class="heading-section heading-section-white">
                    <span class="subheading" style="color:#fff;">Read Testimonials</span>
                    <h2 class="mb-4" style="font-size: 50px;">It's always a joy to hear that the work we do has positively reviews</h2>
                </div>
            </div>
            <div class="col-md-6 pl-md-5 py-4 py-md-5 aside-stretch-right">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                            <div class="user-img" style="background-image: url('{{asset('user/images/person_1.jpg')}}')">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
                                <p class="name">Jeff Freshman</p>
                                <span class="position">Guests</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                            <div class="user-img" style="background-image: url('{{asset('user/images/person_2.jpg')}}')">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
                                <p class="name">Jeff Freshman</p>
                                <span class="position">Guests</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                            <div class="user-img" style="background-image: url('{{asset('user/images/person_3.jpg')}}')">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
                                <p class="name">Jeff Freshman</p>
                                <span class="position">Guests</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                            <div class="user-img" style="background-image: url('{{asset('user/images/person_1.jpg')}}')">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
                                <p class="name">Jeff Freshman</p>
                                <span class="position">Guests</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                            <div class="user-img" style="background-image: url('{{asset('user/images/person_3.jpg')}}')">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="fa fa-quote-left"></i>
									</span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
                                <p class="name">Jeff Freshman</p>
                                <span class="position">Guests</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
{{--                        <ul class="list-unstyled ml-md-5">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Help</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Privacy Policy</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Terms of Use</a></li>
                        </ul>--}}
                    </div>
                </div>
            </div>

            <div class="col-lg col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">See More</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('home')}}"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
                        <li><a href="{{route('services')}}"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
                        <li><a href="{{route('projectpage')}}"><span class="fa fa-chevron-right mr-2"></span>Projects</a></li>
                        <li><a href="{{route('home')}}"><span class="fa fa-chevron-right mr-2"></span>Blogs</a></li>
                        <li><a href="{{route('home')}}"><span class="fa fa-chevron-right mr-2"></span>Contact Us</a></li>
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
