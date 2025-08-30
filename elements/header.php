<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, user-scalable=no">
   <title>Kottonglitters :: House of cotton by kshipra</title>
   <script src="assets/js/jquery.min.js"></script>
   <style>
      .js-preloader { position: fixed; top: 0; left: 0; width: 100vw; background: #fff url('https://loading.io/assets/mod/spinner/spinner/lg.gif') center center no-repeat; height: 100vh; z-index: 9; }
   </style>
</head>

<body>
   <div class="js-preloader flex-center"></div>
   <header class="desktop-header">
      <!-- Header Desktop Start -->
      <div class="swiper hellobar">
         <div class="swiper-wrapper">
            <div class="swiper-slide">Free Shipping on orders above ₹1299</div>
         </div>
      </div>
      <div class="container p-0">
         <div class="d-flex align-items-center justify-content-between main-header">
            <div class="nav-left d-flex align-items-center justify-content-between">
               <div class="logo-sec">
                  <a href="index.php">
                     <img class="img-fluid" src="assets/img/logo-icon.png" />
                  </a>
               </div>
               <div class="menu">
                  <ul>
                     <li class="nav-item">
                        <a class="nav-link" href="listing.php" title="New Arrivals">New Arrivals</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="listing.php" title="Kids Wear">Kids Wear</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="listing.php" title="Top Wear">Top Wear</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="listing.php" title="Bottom Wear">Bottom Wear</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="listing.php" title="Shoes">Shoes</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="listing.php" title="Accessories">Accessories</a>
                     </li>
                  </ul>
               </div>

            </div>
            <div class="nav-right d-flex align-items-center justify-content-end">
               <div class="header-search mx-4">
                     <form>
                        <i class="icon-search"></i>
                        <input type="text" placeholder="Search for products" />
                     </form>
                  </div>
               <div class="wishlist d-flex align-items-center">
                  <a href="#" title="Wishlist">
                     <i class="icon-favourite"></i>
                  </a>
               </div>
               <div class="cart d-flex align-items-center">
                  <a href="placeorder.php" title="Cart">
                     <i class="icon-cart"></i><sup>0</sup>
                  </a>
               </div>

               <div class="account">
                  <div class="dropdown">
                     <button type="btn" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="icon-user"></i>
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <span class="dropdown-item" data-bs-toggle="modal" data-bs-target="#joinus">Join Us</span>
                        <a class="dropdown-item" href="orders.php">My Orders</a>
                        <a class="dropdown-item" href="track-order.php">Track Order</a>
                        <a class="dropdown-item" href="#">Logout</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Header Desktop End -->
   </header>
   <header class="mobile-header">
      <!-- Header Mobile Start -->
      <div class="logo">
         <a href="index.php"><img src="assets/img/logo-icon.png" /></a>
      </div>
      <div class="d-flex align-items-center">
         <div class="search-toggle"><i class="icon-search"></i></div>
         <div class="cart">
            <a href="placeorder.php" title="Cart">
               <i class="icon-cart"></i><sup>0</sup>
            </a>
         </div>
      </div>
      <!-- Header Mobile End -->
      <div class="search-sidebar">
         <div class="search-head d-flex align-items-center">
            <div class="back"><i class="icon-left-arrow"></i></div>
            <form class="w-100">
               <input type="text" placeholder="Search for products" />
               <i class="icon-search"></i>
            </form>
         </div>
         <div class="search-suggetions"></div>
      </div>
   </header>

   <script>
   jQuery(document).ready(function($) {
      $(".search-toggle").click(function(){
         $(".search-sidebar").addClass("show");
         $("body").addClass("no-scroll");
      });
      $(".back").click(function(){
         $(".search-sidebar").removeClass("show");
         $("body").removeClass("no-scroll");
      });
   });
</script>

   <div class="content-wraper">