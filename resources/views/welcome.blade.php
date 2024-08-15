<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>CropSense</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" />

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 bg-light opacity-85"
            data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand" href="#header"><img
                        class="d-inline-block align-top img-fluid" src="{{asset('apple-touch-icon.png')}}" alt=""
                        width="50" /><span class="text-theme font-monospace fs-4 ps-2">CropSense</span></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        {{-- <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page"
                                href="#header">Home</a></li> --}}
                        <li class="nav-item px-2"><a class="nav-link fw-medium"
                                href="#Opportuanities">Opportunities</a></li>
                        {{-- <li class="nav-item px-2"><a class="nav-link fw-medium" href="#testimonial">Testimonial</a></li> --}}
                        <li class="nav-item px-2"><a class="nav-link fw-medium" href="#contact">Contact </a></li>
                        <li class="nav-item px-2"><a class="nav-link fw-medium btn btn-success" href="https://app.cropsense.xyz">Login</a></li>
                    </ul>
                    {{-- <form class="d-flex">
              <button class="btn btn-lg btn-dark bg-gradient order-0" type="submit">Sign Up</button>
            </form> --}}
                </div>
            </div>
        </nav>
        <section class="py-0" id="header">
            <div class="bg-holder d-none d-md-block"
                style="background-image:url(assets/img/illustrations/hero-header.png);background-position:right top;background-size:contain;">
            </div>
            <!--/.bg-holder-->

            <div class="bg-holder d-md-none"
                style="background-image:url(assets/img/illustrations/hero-bg.png);background-position:right top;background-size:contain;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row align-items-center min-vh-75 min-vh-lg-100">
                    <div class="col-md-7 col-lg-6 col-xxl-5 py-6 text-sm-start text-center">
                        <h1 class="mt-6 mb-sm-4 fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">
                            {{__("Improve crop health and productivity for farmers.")['l']}}
                        </h1>
                            {{-- A New Way to Invest <br class="d-block d-lg-block" />in Agriculture</h1> --}}
                            <p class="mb-4 fs-1">
                                {{__('Improve crop health and productivity for farmers.')['l1']}}
                            </p>


                            {{-- <a class="btn btn-lg btn-success" href="tel:+966544615194">{{ __('Call Us Now') }}</a> --}}
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5" id="Opportuanities">
            <div class="bg-holder d-none d-sm-block"
                style="background-image:url(assets/img/illustrations/bg.png);background-position:top left;background-size:225px 755px;margin-top:-17.5rem;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mx-auto text-center mb-3">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">New Opportunities</h5>
                        <p class="mb-5">We are the first and the only crowdfunding platform enabling you to help
                            finance our farmers.</p>
                    </div>
                </div>
                <div class="row flex-center h-100">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-md-3 mb-5">
                                <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                                    <div class="text-center text-md-start card-hover"><img class="ps-3 icons"
                                            src="{{ asset('assets/img/soihealt.png') }}" height="60"
                                            alt="" />
                                        <div class="card-body">
                                            <h6 class="fw-bold fs-1 heading-color">
                                                {{ __('Soil Health Improvement')['l'] }}
                                            </h6>
                                            <p class="mt-3 mb-md-0 mb-lg-2">
                                                {{ __('Soil Health Improvement')['l1'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-5">
                                <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                                    <div class="text-center text-md-start card-hover"><img class="ps-3 icons"
                                            src="{{ asset('assets/img/min-chem-use.png') }}" height="60"
                                            alt="" />
                                        <div class="card-body">
                                            <h6 class="fw-bold fs-1 heading-color">
                                                {{ __('Minimized Chemical Usage')['l'] }}</h6>
                                            <p class="mt-3 mb-md-0 mb-lg-2">
                                                {{ __('Minimized Chemical Usage')['l1'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-5">
                                <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                                    <div class="text-center text-md-start card-hover"><img class="ps-3 icons"
                                            src="{{ asset('assets/img/water-reduction.png') }}" height="60"
                                            alt="" />
                                        <div class="card-body">
                                            <h6 class="fw-bold fs-1 heading-color">
                                                {{ __('Reduction in Water Usage')['l'] }}</h6>
                                            <p class="mt-3 mb-md-0 mb-lg-2">{{ __('Reduction in Water Usage')['l1'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-5">
                                <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                                    <div class="text-center text-md-start card-hover"><img class="ps-3 icons"
                                            src="{{ asset('assets/img/waste-reduction.png') }}" height="60"
                                            alt="" />
                                        <div class="card-body">
                                            <h6 class="fw-bold fs-1 heading-color">{{ __('Waste Reduction')['l'] }}
                                            </h6>
                                            <p class="mt-3 mb-md-0 mb-lg-2">{{ __('Waste Reduction')['l1'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="py-0">
            <div class="bg-holder"
                style="background-image:url(assets/img/illustrations/how-it-works.png);background-position:center bottom;background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <div class="container-lg">
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-9 col-xl-5 text-center pt-8">
                        <h5 class="fw-bold fs-3 fs-xxl-5 lh-sm mb-3 text-white">{{ __('How it works')['l1'] }}</h5>
                        <p class="mb-5 text-white">{{ __('How it works')['l2'] }}</p>
                    </div>
                    <div class="col-sm-9 col-md-12 col-xxl-9">
                        <div class="theme-tab">
                            <ul class="nav justify-content-between">
                                <li class="nav-item" role="presentation"><a class="nav-link active fw-semi-bold"
                                        href="#bootstrap-tab1" data-bs-toggle="tab" data-bs-target="#tab1"
                                        id="tab-1"><span class="nav-item-circle-parent"><span
                                                class="nav-item-circle">01</span></span></a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link fw-semi-bold"
                                        href="#bootstrap-tab2" data-bs-toggle="tab" data-bs-target="#tab2"
                                        id="tab-2"><span class="nav-item-circle-parent"><span
                                                class="nav-item-circle">02</span></span></a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link fw-semi-bold"
                                        href="#bootstrap-tab3" data-bs-toggle="tab" data-bs-target="#tab3"
                                        id="tab-3"><span class="nav-item-circle-parent"><span
                                                class="nav-item-circle">03</span></span></a></li>
                                {{-- <li class="nav-item" role="presentation"><a class="nav-link fw-semi-bold"
                                        href="#bootstrap-tab4" data-bs-toggle="tab" data-bs-target="#tab4"
                                        id="tab-4"><span class="nav-item-circle-parent"><span
                                                class="nav-item-circle">04</span></span></a></li> --}}
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                    aria-labelledby="tab-1">
                                    <div class="row align-items-center my-6 mx-auto">
                                        <div class="col-md-6 col-lg-5 offset-md-1">
                                            <h3 class="fw-bold lh-base text-white">{{ __('How it works')['1'] }}</h3>
                                        </div>
                                        <div class="col-md-5 text-white offset-lg-1">
                                            <p class="mb-0">{{ __('How it works')['1-1'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                                    <div class="row align-items-center my-6 mx-auto">
                                        <div class="col-md-6 col-lg-5 offset-md-1">
                                            <h3 class="fw-bold lh-base text-white">{{ __('How it works')['2'] }}</h3>
                                        </div>
                                        <div class="col-md-5 text-white offset-lg-1">
                                            <p class="mb-0">
                                                {{ __('How it works')['2-1'] }}
                                                <br>
                                                {{ __('How it works')['2-2'] }}
                                                <br>
                                                {{ __('How it works')['2-3'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab-3">
                                    <div class="row align-items-center my-6 mx-auto">
                                        <div class="col-md-6 col-lg-5 offset-md-1">
                                            <h3 class="fw-bold lh-base text-white">{{__('How it works')['3']}}</h3>
                                        </div>
                                        <div class="col-md-5 text-white offset-lg-1">
                                            <p class="mb-0">{{__('How it works')['3-1']}}</p>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab-4">
                                    <div class="row align-items-center my-6 mx-auto">
                                        <div class="col-md-6 col-lg-5 offset-md-1">
                                            <h3 class="fw-bold lh-base text-white">The Farm Share has been one of the
                                                best new additions to our life</h3>
                                        </div>
                                        <div class="col-md-5 text-white offset-lg-1">
                                            <p class="mb-0">We the farmers choose the vegetables in your share each
                                                week. A Farm Share is perfect for those who love the weekly surprise,
                                                and who look forward to cooking with inspiration from the seasons.</p>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="z-index-1 cta">

            <div class="container">
                <div class="row flex-center">
                    <div class="col-8">
                        <div class="card shadow h-100 py-5">
                            <div class="card-body text-center">
                                <h1 class="fw-semi-bold mb-4">The future of &nbsp;<span class="text-success">Crops</span> &nbsp; is CropSense</h1><a class="btn btn-lg btn-success px-6"
                                    href="tel:+966544615194" role="button">{{__('Call Us Now')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-success shadow h-100 py-5">
                            <div class="card-body p-sm-4">
                                <h5 class="text-white">Email Us</h5>
                                <p class="mb-0 text-white">write email to us</p>
                                <a href="email:info@cropsense.xyz" class="btn btn-light text-success" type="button">
                                    <svg class="bi bi-person me-1" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="#76C279" viewBox="0 0 16 16">
                                        <path
                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z">
                                        </path>
                                    </svg>info@cropsense.xyz
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <section class="py-0" id="contact">
            <div class="bg-holder"
                style="background-image:url(assets/img/illustrations/footer-bg.png);background-position:center;background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row justify-content-lg-between min-vh-5" style="padding-top:21rem">
                    {{-- <div class="col-6 col-sm-4 col-lg-auto mb-3">
                        <h6 class="mb-3 text-1000 fw-semi-bold">COMPANY </h6>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">About Us</a>
                            </li>
                            <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Team</a></li>
                            <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Careers</a>
                            </li>
                            <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-auto mb-3">
                        <h6 class="mb-3 text-1000 fw-semi-bold">INVEST </h6>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Features</a>
                            </li>
                            <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">How it
                                    works</a></li>
                            <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Pricing</a>
                            </li>
                            <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Login</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-auto mb-3">
                        <h6 class="mb-3 text-1000 fw-semi-bold">LEGAL </h6>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Privacy</a>
                            </li>
                            <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Terms</a></li>
                            <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Security</a>
                            </li>
                        </ul>
                    </div> --}}
                    {{-- <div class="col-12 col-lg-auto mb-3">
                        <div class="card bg-success">
                            <div class="card-body p-sm-4">
                                <h5 class="text-white">Email Us</h5>
                                <p class="mb-0 text-white">write email to us</p>
                                <a href="email:info@cropsense.xyz" class="btn btn-light text-success" type="button">
                                    <svg class="bi bi-person me-1" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="#76C279" viewBox="0 0 16 16">
                                        <path
                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z">
                                        </path>
                                    </svg>info@cropsense.xyz
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <hr class="text-300 mb-0" />
                <div class="row flex-center py-5">
                    <div class="col-12 col-sm-8 col-md-6 text-center text-md-start"> <a class="text-decoration-none"
                            href="#"><img class="d-inline-block align-top img-fluid"
                                src="{{asset('apple-touch-icon.png')}}" alt="" width="40" /><span
                                class="text-theme font-monospace fs-3 ps-2">CropSense</span></a></div>
                    <div class="col-12 col-sm-8 col-md-6">
                        <p class="fs--1 text-dark my-2 text-center text-md-end">&copy; A Product
                            &nbsp;by&nbsp;<a class="text-dark" href="https://vujadesa.com/" target="_blank">VujaDE
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;700;900&amp;display=swap"
        rel="stylesheet">
</body>

</html>
