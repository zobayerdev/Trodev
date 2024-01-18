<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project Details</title>
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

{{--    <style>--}}
{{--        html, body {--}}
{{--            background-color: #2B3A4C;--}}
{{--        }--}}

{{--        .package {--}}
{{--            display: grid;--}}
{{--            grid-template-columns: repeat(3, 1fr);--}}
{{--            grid-gap: 1rem;--}}
{{--            margin-top: 4rem;--}}

{{--            @media screen and (max-width: 800px) {--}}
{{--                grid-template-columns: 1fr;--}}
{{--                grid-row-gap: 7rem;--}}
{{--            }--}}

{{--            &__item {--}}
{{--                height: 100%;--}}
{{--                transition: all ease-in-out .3s;--}}

{{--                &:hover {--}}
{{--                    transform: translateY(-5px);--}}
{{--                }--}}

{{--                .package__header {--}}
{{--                    background-color: white;--}}
{{--                    border-top-left-radius: 4px;--}}
{{--                    border-top-right-radius: 4px;--}}
{{--                    border-bottom: 3px solid rgba(#000, .1);--}}

{{--                    .package__name {--}}
{{--                        font-size: 1.2rem;--}}
{{--                        font-weight: bold;--}}
{{--                        text-align: center;--}}
{{--                        padding: 8px;--}}
{{--                        color: white;--}}
{{--                    }--}}
{{--                }--}}

{{--                .package__body {--}}
{{--                    background-color: white;--}}
{{--                    padding: 1rem;--}}
{{--                    min-height: 82%;--}}

{{--                    @media screen and (max-width: 800px) {--}}
{{--                        min-height: 100%;--}}
{{--                    }--}}

{{--                    .package__price-container {--}}
{{--                        min-height: 150px;--}}
{{--                        background-color: rgba(#000, .06);--}}
{{--                        display: flex;--}}
{{--                        flex-direction: column;--}}
{{--                        justify-content: center;--}}
{{--                        border-radius: 4px;--}}

{{--                        @media screen and (max-width: 800px) {--}}
{{--                            min-height: 100%;--}}
{{--                        }--}}
{{--                    }--}}

{{--                    .package__price-container--column {--}}
{{--                        display: grid;--}}
{{--                        grid-template-columns: 1fr 1fr;--}}
{{--                        text-align: center;--}}

{{--                        @media screen and (max-width: 800px) {--}}
{{--                            grid-template-columns: 1fr;--}}
{{--                        }--}}

{{--                        .package__column {--}}
{{--                            display: grid;--}}

{{--                            [class^="package__column"] {--}}
{{--                                display: flex;--}}
{{--                                align-items: center;--}}
{{--                                justify-content: center;--}}
{{--                            }--}}

{{--                            .package__column-title {--}}
{{--                                color: white;--}}
{{--                                background-color: #78a87f;--}}
{{--                                font-weight: 600;--}}
{{--                            }--}}

{{--                        // .package__column-content { }--}}

{{--                            .package__column-price {--}}
{{--                                font-weight: bold;--}}
{{--                            }--}}

{{--                            .package__column-price--bb {--}}
{{--                                border-bottom: 1px solid rgba(#000, .1);--}}
{{--                            }--}}
{{--                        }--}}

{{--                        .package__column--2 {--}}
{{--                            border-left: 1px solid rgba(#000, .05);--}}

{{--                            .package__column-title {--}}
{{--                                background-color: darken(#78a87f, 10%);--}}
{{--                            }--}}
{{--                        }--}}
{{--                    }--}}

{{--                    .package__price {--}}
{{--                        text-align: center;--}}
{{--                        font-size: 3rem;--}}
{{--                        font-weight: 600;--}}
{{--                        position: relative;--}}
{{--                    }--}}

{{--                    .package__price--sm {--}}
{{--                        font-size: 1.8rem;--}}
{{--                    }--}}

{{--                    .package__price--xs {--}}
{{--                        font-size: 1.2rem;--}}
{{--                    }--}}

{{--                    .package__price--monthly {--}}
{{--                        &::after {--}}
{{--                            content: 'Monthly';--}}
{{--                            background-color: #459bba;--}}
{{--                            border-radius: 8px;--}}
{{--                            font-size: 10px;--}}
{{--                            padding: 1px 5px;--}}
{{--                            color: white;--}}
{{--                            position: absolute;--}}
{{--                        }--}}
{{--                    }--}}

{{--                    .package__price--quarterly {--}}
{{--                        &::after {--}}
{{--                            content: 'Quarterly';--}}
{{--                            background-color: orange;--}}
{{--                            border-radius: 8px;--}}
{{--                            font-size: 10px;--}}
{{--                            padding: 1px 5px;--}}
{{--                            color: white;--}}
{{--                            position: absolute;--}}
{{--                        }--}}
{{--                    }--}}

{{--                    .package__price--yearly {--}}
{{--                        &::after {--}}
{{--                            content: 'Yearly';--}}
{{--                            background-color: darken(#459bba, 10%);--}}
{{--                            border-radius: 8px;--}}
{{--                            font-size: 10px;--}}
{{--                            padding: 1px 5px;--}}
{{--                            color: white;--}}
{{--                            position: absolute;--}}
{{--                        }--}}
{{--                    }--}}

{{--                    .package__price--ind-yearly {--}}
{{--                        &::after {--}}
{{--                            content: 'Yearly Individual';--}}
{{--                            background-color: #5043C9;--}}
{{--                            border-radius: 8px;--}}
{{--                            font-size: 10px;--}}
{{--                            padding: 1px 5px;--}}
{{--                            color: white;--}}
{{--                            position: absolute;--}}
{{--                        }--}}
{{--                    }--}}

{{--                    .package__price--ins-yearly {--}}
{{--                        &::after {--}}
{{--                            content: 'Yearly Institutional';--}}
{{--                            background-color: darken(#78a87f, 10%);--}}
{{--                            border-radius: 8px;--}}
{{--                            font-size: 10px;--}}
{{--                            padding: 1px 5px;--}}
{{--                            color: white;--}}
{{--                            position: absolute;--}}
{{--                        }--}}
{{--                    }--}}

{{--                    ul {--}}
{{--                        margin-top: 1rem;--}}

{{--                        li {--}}
{{--                            position: relative;--}}
{{--                            font-size: 0.875rem;--}}
{{--                            font-weight: 600;--}}
{{--                            color: #31363c;--}}
{{--                        }--}}
{{--                    }--}}
{{--                }--}}

{{--                .package__footer {--}}
{{--                    button {--}}
{{--                        background-color: #2287F5;--}}
{{--                        color: white;--}}
{{--                        padding: 8px 0;--}}
{{--                        width: 100%;--}}
{{--                        border: 0;--}}
{{--                        border-bottom-left-radius: 4px;--}}
{{--                        border-bottom-right-radius: 4px;--}}
{{--                        cursor: pointer;--}}
{{--                        position: relative;--}}
{{--                        transition: all ease-in-out .3s;--}}
{{--                        font-weight: 600;--}}

{{--                        &::after {--}}
{{--                            content: '\00bb';--}}
{{--                            opacity: 0;--}}
{{--                            position: absolute;--}}
{{--                            top: 0;--}}
{{--                            font-size: 1.5rem;--}}
{{--                            transition: all ease-in-out .3s;--}}
{{--                        }--}}

{{--                        &:hover {--}}
{{--                            &::after {--}}
{{--                                opacity: 1;--}}
{{--                                transform: translateX(4px);--}}
{{--                            }--}}
{{--                        }--}}
{{--                    }--}}
{{--                }--}}

{{--                &:nth-child(1) {--}}
{{--                    .package__header {--}}
{{--                        background-color: #eea726;--}}
{{--                    }--}}

{{--                    .package__footer {--}}
{{--                        button {--}}
{{--                            background-color: #eea726;--}}

{{--                            &:hover {--}}
{{--                                background-color: darken(#eea726, 6%);--}}
{{--                            }--}}
{{--                        }--}}
{{--                    }--}}
{{--                }--}}

{{--                &:nth-child(2) {--}}
{{--                    .package__header {--}}
{{--                        background-color: #459bba;--}}
{{--                    }--}}

{{--                    .package__footer {--}}
{{--                        button {--}}
{{--                            background-color: #459bba;--}}

{{--                            &:hover {--}}
{{--                                background-color: darken(#459bba, 6%);--}}
{{--                            }--}}
{{--                        }--}}
{{--                    }--}}
{{--                }--}}

{{--                &:nth-child(3) {--}}
{{--                    .package__header {--}}
{{--                        background-color: #78a87f;--}}
{{--                    }--}}

{{--                    .package__footer {--}}
{{--                        button {--}}
{{--                            background-color: #78a87f;--}}

{{--                            &:hover {--}}
{{--                                background-color: darken(#78a87f, 6%);--}}
{{--                            }--}}
{{--                        }--}}
{{--                    }--}}
{{--                }--}}
{{--            }--}}
{{--        }--}}
{{--    </style>--}}
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
                <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{route('services')}}" class="nav-link">Services</a></li>
                <li class="nav-item active"><a href="{{route('projectpage')}}" class="nav-link">Projects</a></li>
                <li class="nav-item"><a href="{{route('blogs')}}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('storage/'.$id->image)}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="#">Project <i class="fa fa-chevron-right"></i></a></span> <span>Project Single <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">{{$id->name}}</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ftco-animate">
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
                                            <a href="{{route('register')}}" class="btn-custom">Total: {{$total}}Tk</a>
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
                                            <a href="{{route('register')}}" class="btn-custom">Total: {{$total}}Tk</a>
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
                                            <a href="{{route('register')}}" class="btn-custom">Total: {{$total}}Tk</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>






{{--                <div class="container mt-3">--}}
{{--                <div class="package">--}}
{{--                    <div class="package__item">--}}
{{--                        <div class="package__header">--}}
{{--                            <div class="package__name">Free User</div>--}}
{{--                        </div>--}}
{{--                        <div class="package__body">--}}
{{--                            <div class="package__price-container">--}}
{{--                                <div class="package__price">HK$ 0.00</div>--}}
{{--                            </div>--}}
{{--                            <ul>--}}
{{--                                <li>User Account (1)</li>--}}
{{--                                <li>Startup filter and list view</li>--}}
{{--                                <li>Investor filter and list view</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="package__footer">--}}
{{--                            <button>Get Started</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="package__item">--}}
{{--                        <div class="package__header">--}}
{{--                            <div class="package__name">Became a Startup</div>--}}
{{--                        </div>--}}
{{--                        <div class="package__body">--}}
{{--                            <div class="package__price-container">--}}
{{--                                <div class="package__price package__price--sm package__price--monthly">HK$ 1,000.00</div>--}}
{{--                                <div class="package__price package__price--sm package__price--yearly">HK$ 12,000.00</div>--}}
{{--                            </div>--}}
{{--                            <ul>--}}
{{--                                <li>Premium User Account Dashboard</li>--}}
{{--                                <li>Individual Startup profile page</li>--}}
{{--                                <li>Startup filter and list view</li>--}}
{{--                                <li>Investor filter and list view</li>--}}
{{--                                <li>Video Shooting Promotion</li>--}}
{{--                                <li>Chatroom</li>--}}
{{--                                <li>View Individual profile pages</li>--}}
{{--                                <li>Personalize newsletter recommendation</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="package__footer">--}}
{{--                            <button>Get Started</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="package__item">--}}
{{--                        <div class="package__header">--}}
{{--                            <div class="package__name">Became an Investor</div>--}}
{{--                        </div>--}}
{{--                        <div class="package__body">--}}
{{--                            <div class="package__price-container package__price-container--column">--}}
{{--                                <div class="package__column">--}}
{{--                                    <div class="package__column-title">Individual</div>--}}
{{--                                    <div class="package__column-content">Quarterly</div>--}}
{{--                                    <div class="package__column-price package__column-price--bb">HK$ 300.00</div>--}}
{{--                                    <div class="package__column-content">Yearly</div>--}}
{{--                                    <div class="package__column-price">HK$ 1,000.00</div>--}}
{{--                                </div>--}}
{{--                                <div class="package__column package__column--2">--}}
{{--                                    <div class="package__column-title">Institutional</div>--}}
{{--                                    <div class="package__column-content">Quarterly</div>--}}
{{--                                    <div class="package__column-price package__column-price--bb">HK$ 1,200.00</div>--}}
{{--                                    <div class="package__column-content">Yearly</div>--}}
{{--                                    <div class="package__column-price">HK$ 3,000.00</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <ul>--}}
{{--                                <li>Premium User Account Dashboard</li>--}}
{{--                                <li class="package__price--ins-yearly">3 Premium User Account<br>Dashboard</li>--}}
{{--                                <li>Individual Investor profile page</li>--}}
{{--                                <li>Startup filter and list view</li>--}}
{{--                                <li>Investor filter and list view</li>--}}
{{--                                <li>Chatroom</li>--}}
{{--                                <li>View Individual profile pages</li>--}}
{{--                                <li>Personalize newsletter recommendation</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="package__footer">--}}
{{--                            <button>Get Started</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            </div>

            <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <h3 class="heading-sidebar">Recent Projects</h3>
                    @foreach($proj as $blogs)
                        @if($blogs->id !== $id->id)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" href="{{route('singleprojectpages',['id' => $blogs->id])}}" style="background-image: url('{{asset('storage/'.$blogs->image)}}');"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="{{route('singleprojectpages',['id' => $blogs->id])}}">{{$blogs->name}}</a></h3>
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
                        <li><a href="{{route('services')}}"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
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
