</div>
<footer class="desktop-footer">
   <!-- Footer Desktop Start -->
   <div class="container">
      <div class="main-footer py-5">
         <div class="row justify-content-between">
            <div class="col-md-4">
               <a href="index.php">
                  <img class="img-fluid" src="assets/img/logo.webp" />
               </a>
            </div>
            <div class="col-md-4">
               <div class="row">
                  <div class="col-md-6">
                     <div class="footer-links">
                        <div class="footer-heading">Categories</div>
                        <div class="listing">
                           <ul>
                              <li><a href="listing.php" title="Kids Wear">Kids Wear</a></li>
                              <li><a href="listing.php" title="Womens">Womens</a></li>
                              <li><a href="listing.php" title="Shoes">Shoes</a></li>
                              <li><a href="listing.php" title="Home Living">Home Living</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="footer-links">
                        <div class="footer-heading">Company</div>
                        <div class="listing">
                           <ul>
                              <li><a href="about-us.html" title="About Us">About Us</a></li>
                              <li><a href="contact-us.html" title="Contact Us">Contact Us</a></li>
                              <li><a href="faq.html" title="FAQ's">FAQ's</a></li>
                              <li><a href="return-policy.html" title="Returns & Cancellation">Returns & Cancellation</a>
                              </li>
                              <li><a href="terms-condition.html" title="Terms & Condition">Terms & Condition</a></li>
                              <li><a href="shipping-policy.html" title="Privacy Policy">Privacy Policy</a></li>
                              <li><a href="shipping-policy.html" title="Shipping Policy">Shipping Policy</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="copyright-footer text-center p-4">
         <div class="container d-md-flex d-block justify-content-between">
            <div class="payment-partners mb-md-0 mb-2">
               <img src="assets/img/payment-partners.svg" alt="Payment Partners" />
            </div>
            <p>Copyright &copy; 2024.</p>
         </div>
      </div>
      <!-- Footer Desktop End -->
</footer>

<footer class="mobile-footer">
   <!-- Footer Mobile Start -->
       <div class="tabs">
         <ul>
            <li><a class="tab-item" href="index.php"><i class="icon-home"></i><span class="d-block"> Home</span></a></li>
            <li><a class="tab-item" href="sale.php"><i class="icon-discount"></i> <span class="d-block">Deals</span></a></li>
            <li><a class="tab-item" href="customer/wishlist.php"><i class="icon-favourite"></i> <span class="d-block">Wishlist</span></a></li>
            <li><span class="tab-item" data-bs-toggle="modal" data-bs-target="#joinus"><i class="icon-user"></i> <span class="d-block">Account</span></span></li>
           </ul>
       </div>
       <!-- Footer Mobile End -->
</footer>



<div class="modal fade join-us" id="joinus" data-bs-backdrop="static" tabindex="-1" aria-labelledby="joinus"
   aria-hidden="true">
   <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content">
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
               class="icon-cancel"></i></button>
         <div class="modal-body">
            <div class="swiper login-slider">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <a class="img-wrap" href="javascript:void(0);">
                        <img src="assets/img/banner-1.jpg" alt="Deals Banner" >
                     </a>
                  </div>
                  <div class="swiper-slide">
                     <a class="img-wrap" href="javascript:void(0);">
                        <img src="assets/img/banner-2.jpg" alt="Deals Banner" >
                     </a>
                  </div>
                  <div class="swiper-slide">
                     <a class="img-wrap" href="javascript:void(0);">
                        <img src="assets/img/banner-1.jpg" alt="Deals Banner" >
                     </a>
                  </div>
                  <div class="swiper-slide">
                     <a class="img-wrap" href="javascript:void(0);">
                        <img src="assets/img/banner-2.jpg" alt="Deals Banner" >
                     </a>
                  </div>
               </div>
            </div>
            <div class="join-us-screen mt-4">
               <form action="">
                  <div class="form-heading">Join Us</div>
                  <div class="input-group mb-3 contact-number">
                     <span class="input-group-text country-code">+91</span>
                     <input type="text" placeholder="Enter Mobile Number" class="form-control">
                  </div>
                  <p>By continuing, I agree to the <a class="primary-text" href="terms-condition.php">Terms of Use</a>
                     &amp; <a class="primary-text" href="privacy-policy.php">Privacy Policy</a>.</p>
                  <div class="submit">
                     <button class="button button-primary w-100" type="submit">Continue</button>
                  </div>
               </form>
            </div>

            <div class="otp-screen  mt-4 d-none">
               <form action="">
                  <div class="form-heading">Confirm your number</div>
                  <div class="sub-heading">Enter the code we've sent via SMS to <span>+91 8385083849</span></div>
                  <div class="otpContainer">
                     <input maxlength="6" inputmode="numeric" class="form-control" autocomplete="one-time-code"
                        type="tel" placeholder="------" />
                  </div>
                  <div class="countdown" id="countdown"></div>
                  <div class="submit">
                     <button class="button button-primary w-100" type="submit">Continue</button>
                  </div>
                  <div class="other-option">
                     <p>Login using <span class="pasword-login text-secondary">Password?</span></p>
                  </div>
               </form>
            </div>


            <div class="login-with-password-screen mt-4 d-none">
               <form action="">
                  <div class="form-heading">Login to your account</div>
                  <div class="mb-3">
                     <input type="text" placeholder="Enter Email or Mobile Number" class="form-control" />
                  </div>
                  <div class="mb-3">
                     <input type="password" placeholder="Password" class="form-control" />
                  </div>
                  <div class="submit">
                     <button class="button button-primary w-100" type="submit">Continue</button>
                  </div>
                  <div class="other-option">
                     <p>Forgot Password? <span class="reset-passowrd text-secondary">Reset Here</span></p>
                  </div>
               </form>
            </div>



            <div class="reset-password-screen mt-4 d-none">
               <form action="">
                  <div class="form-heading">Reset Password</div>
                  <div class="sub-heading">Enter your email or mobile number and we’ll send a link on your email to
                     reset your password.</div>
                  <div class="mb-3">
                     <input type="text" placeholder="Enter Email or Mobile Number" class="form-control" />
                  </div>
                  <div class="submit">
                     <button class="button button-primary w-100" type="submit">Send</button>
                  </div>
               </form>
            </div>


         </div>
      </div>
   </div>
</div>
</div>

<!-----JS files ----->
 

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/slider-functions.js"></script>
<script src="assets/js/common.js"></script>
<script src="assets/js/jquery.preloadinator.min.js"></script>
<script>
   $('.js-preloader').preloadinator({
         minTime: 2000
   });
</script>
<script>
      function determineCurrentPage() {
            const path = window.location.pathname;
            if (path.includes('listing')) return 'listing';
            if (path.includes('productdetail')) return 'productdetail';
            if (path.includes('cart')) return 'cart';
            if (path.includes('placeorder')) return 'placeorder';
            if (path.includes('overview')) return 'overview';
            if (path.includes('cms')) return 'cms';
            return 'home';
         }

         function removeAllCSS() {
            document.querySelectorAll('link[rel="stylesheet"]').forEach(link => link.remove());
         }

         function addCSS(href) {
            const link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = href;
            document.head.appendChild(link);
         }

         function manageCSS() {
            const currentPage = determineCurrentPage();
            const isMobile = 'ontouchstart' in window || navigator.maxTouchPoints > 0;

            removeAllCSS();

            const cssFiles = {
               home: ['home'],
               listing: ['listing'],
               productdetail: ['product_detail'],
               placeorder: ['placeorder'],
               overview: ['overview'],
               cms: ['cms']
            };

            const pageCssFiles = cssFiles[currentPage] || [];
            pageCssFiles.forEach(page => {
               addCSS(`assets/css/${page}_${isMobile ? 'mobile' : 'desktop'}.css`);
            });

            const removeSelectors = isMobile
               ? ['.desktop-header', '.desktop-home', '.desktop-listing', '.desktop-productdetail', '.desktop-overview', '.desktop-cms', '.desktop-footer']
               : ['.mobile-header', '.mobile-home', '.mobile-listing', '.mobile-productdetail', '.mobile-overview', '.mobile-cms', '.mobile-footer'];

            removeSelectors.forEach(selector => {
               const element = document.querySelector(selector);
               if (element) element.remove();
            });
         }

         manageCSS();
</script>   
</body>

</html>