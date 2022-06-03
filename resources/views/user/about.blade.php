<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Sixteen Clothing - About Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2>Sixteen <em>Clothing</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/products') }}">Our Products</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('login'))

                                @auth

                                    <x-app-layout>

                                    </x-app-layout>
                                @else
                            <li> <a href="{{ route('login') }}" class="nav-link">Log in</a></li>

                            @if (Route::has('register'))
                                <li> <a href="{{ route('register') }}" class="nav-link">Register</a></li>
                            @endif
                        @endauth

                        @endif
                        <li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>about us</h4>
                        <h2>our company</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="best-features about-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Our Background</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="assets/images/feature-image.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Who we are &amp; What we do?</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur
                            similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem
                            perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et,
                            consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium
                            quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="team-members">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Our Team Members</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <div class="thumb-container">
                            <img src="assets/images/team_01.jpg" alt="">
                            <div class="hover-effect">
                                @foreach ($face as $faces)
                                    <div class="hover-content">
                                        <ul class="social-icons">
                                            <li><a href="{{ $faces->email }}"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="{{ $faces->email }}"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="down-content">
                            <h4>Johnny William</h4>
                            <span>CO-Founder</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-gear"></i>
                        </div>
                        <div class="down-content">
                            <h4>Product Management</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at
                                quia quaerat.</p>
                            <a href="#" class="filled-button">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-gear"></i>
                        </div>
                        <div class="down-content">
                            <h4>Customer Relations</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at
                                quia quaerat.</p>
                            <a href="#" class="filled-button">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-gear"></i>
                        </div>
                        <div class="down-content">
                            <h4>Global Collection</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at
                                quia quaerat.</p>
                            <a href="#" class="filled-button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="happy-clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Happy Partners</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-clients owl-carousel">
                        <div class="client-item">
                            <img src="assets/images/client-01.png" alt="1">
                        </div>

                        <div class="client-item">
                            <img src="assets/images/client-01.png" alt="2">
                        </div>

                        <div class="client-item">
                            <img src="assets/images/client-01.png" alt="3">
                        </div>

                        <div class="client-item">
                            <img src="assets/images/client-01.png" alt="4">
                        </div>

                        <div class="client-item">
                            <img src="assets/images/client-01.png" alt="5">
                        </div>

                        <div class="client-item">
                            <img src="assets/images/client-01.png" alt="6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Additional Scripts -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>


    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>


</body>

</html>
