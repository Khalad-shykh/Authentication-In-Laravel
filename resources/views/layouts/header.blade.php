<!doctype html>
<html lang="en">
  <head>
    <title>{{$title}}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{url("FrontEndAssets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{url("FrontEndAssets/css/plugins/owl-carousel/owl.carousel.css")}}">
    <link rel="stylesheet" href="{{url("FrontEndAssets/css/plugins/magnific-popup/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{url("FrontEndAssets/css/plugins/jquery.countdown.css")}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{url("FrontEndAssets/css/style.css")}}">
    <link rel="stylesheet" href="{{url("FrontEndAssets/css/skins/skin-demo-13.css")}}">
    <link rel="stylesheet" href="{{url("FrontEndAssets/css/demos/demo-13.css")}}">
    <!-- Bootstrap CSS -->
  </head>
  <body>
    
    <div class="page-wrapper">
      <header class="header header-10 header-intro-clearance">
       
          <div class="header-middle">
              <div class="container">
                  <div class="header-left">
                      <button class="mobile-menu-toggler">
                          <span class="sr-only">Toggle mobile menu</span>
                          <i class="icon-bars"></i>
                      </button>
                      <form action="#" method="get" class="mobile-search">
                       
          
                      <a href="index.html" class="logo">
                          <img src="{{ asset("FrontEndAssets/images/logos/logo.png")}}" alt="Molla Logo" width="105" height="25">
                      </a>
                  </div><!-- End .header-left -->

                  <div class="header-center">
                      <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
                          <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                          <form action="#" method="get">
                              <div class="header-search-wrapper search-wrapper-wide">
                             
                                  <label for="q" class="sr-only">Search</label>
                                  <input type="search" autocomplete="off" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                                  <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                              </div><!-- End .header-search-wrapper -->
                          </form>
                          
                      </div><!-- End .header-search -->
                  </div>

                  <div class="header-right">
                      <div class="header-dropdown-link">


                          <div class="dropdown cart-dropdown">
                              <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                  <i class="icon-shopping-cart"></i>
                                  <span class="cart-count">2</span>
                                  <span class="cart-txt">Cart</span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right">
                                  <div class="dropdown-cart-products">
                                      <div class="product">
                                          <div class="product-cart-details">
                                              <h4 class="product-title">
                                                  <a href="product.html">Beige knitted elastic runner shoes</a>
                                              </h4>

                                              <span class="cart-product-info">
                                                  <span class="cart-product-qty">1</span>
                                                  x $84.00
                                              </span>
                                          </div><!-- End .product-cart-details -->

                                          <figure class="product-image-container">
                                              <a href="product.html" class="product-image">
                                                  <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                              </a>
                                          </figure>
                                          <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                      </div><!-- End .product -->

                                      <div class="product">
                                          <div class="product-cart-details">
                                              <h4 class="product-title">
                                                  <a href="product.html">Blue utility pinafore denim dress</a>
                                              </h4>

                                              <span class="cart-product-info">
                                                  <span class="cart-product-qty">1</span>
                                                  x $76.00
                                              </span>
                                          </div><!-- End .product-cart-details -->

                                          <figure class="product-image-container">
                                              <a href="product.html" class="product-image">
                                                  <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                              </a>
                                          </figure>
                                          <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                      </div><!-- End .product -->
                                  </div><!-- End .cart-product -->

                                  <div class="dropdown-cart-total">
                                      <span>Total</span>

                                      <span class="cart-total-price">$160.00</span>
                                  </div><!-- End .dropdown-cart-total -->

                                  <div class="dropdown-cart-action">
                                      <a href="cart.html" class="btn btn-primary">View Cart</a>
                                      <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                  </div><!-- End .dropdown-cart-total -->
                              </div><!-- End .dropdown-menu -->
                          </div><!-- End .cart-dropdown -->


                      </div>
                  </div><!-- End .header-right -->
              </div><!-- End .container -->
          </div><!-- End .header-middle -->

          <div class="header-bottom sticky-header">
              <div class="container">
                  <div class="header-left">

                  </div><!-- End .col-lg-3 -->
                  <div class="header-center">
                      <nav class="main-nav">
                          <ul class="menu sf-arrows">
                              <li class="megamenu-container active">
                                  <a href="{{url("/")}}" >Home</a>
                              </li>
                              <li>
                                  <a href="#" >Shop</a>

                              </li>
                              <li>
                                  <a href="#" >Product</a>
                              </li>
                              <li>
                                  <a href="#</a>
                              </li>
                              <li>
                                  <a href="#">Blog</a>

                              </li>
                              <li>
                                <a href="{{ route("profile")}}">My Profile</a>

                            </li>
                              <li>
                                @if (auth()->check())
                                <a href="{{route("logout")}}" >
                                    <span class="">logout</span>
                                </a>
                                @else
                                <a href="{{route("login")}}">
                                    <span class="">Login</span>
                                </a>
                                @endif
                      </nav><!-- End .main-nav -->
                  </div><!-- End .col-lg-9 -->
                  <div class="header-right">
                      <i class="la la-lightbulb-o"></i><p>Clearance Up to 30% Off</span></p>
                  </div>
              </div><!-- End .container -->
          </div><!-- End .header-bottom -->
      </header><!-- End .header -->

<main class="main">