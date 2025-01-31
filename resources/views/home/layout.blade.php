<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon-ship.png" type="">
      <title>Ship buying website</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
        <div class="hero_area">
         <!-- header section strats -->
            <header class="header_section">
                <div class="container">
                    <nav class="navbar navbar-expand-lg custom_nav-container ">
                        <a class="navbar-brand" href="index.html"><img width="250" src="images/logo-ship.png" alt="#" /></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                </li>

                                <li class="nav-item">
                                <a class="nav-link" href="#product-section">Ships</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#blog-section">Blog</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#contact-section">Contact</a>
                                </li>
                                {{-- <form class="form-inline">
                                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form> --}}

                                @auth('customer')
                                <li class="nav-item">
                                    <span class="nav-link">
                                    Welcome {{auth()->guard('customer')->user()->name}}
                                    </span>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('cust.cart')}}" class="nav-link">History</a>
                                </li>
                                <li class="nav-item">
                                    <form class="inline" method="POST" action="/customer_logout">
                                    @csrf
                                    <button type="submit">
                                        <i class="fa-solid fa-door-closed"></i> Logout
                                    </button>
                                    </form>
                                </li>
                                @else
                                <li class="nav-item" id='logincss'>
                                    <a class="btn btn-primary" href="/customer_login">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-success" href="/customer_register">Register</a>
                                </li>
                                @endauth
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
            <!-- end header section -->
            @include('home.slider')
        </div>

        @yield('product')

        <!-- footer start -->
        <footer>
            <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="full">
                        <div class="logo_footer">
                        <a href="#"><img width="210" src="images/logo-ship.png" alt="#" /></a>
                        </div>
                        <div class="information_f">
                        <p><strong>ADDRESS:</strong> 28 White tower, Street Name New York City, USA</p>
                        <p><strong>TELEPHONE:</strong> +91 987 654 3210</p>
                        <p><strong>EMAIL:</strong> bisw01as@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                        <div class="col-md-6">
                        <div class="widget_menu">
                        <h3>Menu</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Testimonial</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="widget_menu">
                        <h3>Account</h3>
                        <ul>
                            <li><a href="#">Account</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Shopping</a></li>
                            <li><a href="#">Widget</a></li>
                        </ul>
                        </div>
                    </div>
                        </div>
                    </div>     
                    <div class="col-md-5">
                        <div class="widget_menu">
                        <h3>Newsletter</h3>
                        <div class="information_f">
                            <p>Subscribe by our newsletter and get update protidin.</p>
                        </div>
                        <div class="form_sub">
                            <form>
                                <fieldset>
                                    <div class="field">
                                    <input type="email" placeholder="Enter Your Mail" name="email" />
                                    <input type="submit" value="Subscribe" />
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </footer>
        <!-- footer end -->
        <div class="cpy_">
            <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
            
            Distributed By <a href="https://themewagon.com/" target="_blank">Sajib Biswas</a>
            
            </p>
        </div>
        <!-- jQery -->
        <script src="home/js/jquery-3.4.1.min.js"></script>
        <!-- popper js -->
        <script src="home/js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="home/js/bootstrap.js"></script>
        <!-- custom js -->
        <script src="home/js/custom.js"></script>
    </body>
</html>
        