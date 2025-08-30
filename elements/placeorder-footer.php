</div>
 
<footer class="copyright-footer pb-4">
  
      <div class="row">
         <div class="col-8">
            <div class="payment-partners">
               <img src="assets/img/payment-partners.svg" alt="Payment Partners" />
            </div>
         </div>
         <div class="col-4 col-4 d-flex justify-content-end copyright">
            Copyright &copy; 2024.
         </div>
      </div>
  
</footer>  
</div>
<!-----JS files -----> 
<script src="assets/js/jquery.preloadinator.min.js"></script>
<script>
$('.js-preloader').preloadinator({
   minTime: 2000
});
</script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/common.js"></script>
<script src="assets/js/placeorder.js"></script>

<script>
// Function to dynamically manage CSS based on device type and current page
function manageCSS() {
   // Determine current page
   let currentPage = determineCurrentPage();

   // Function to load CSS dynamically
   function loadCSS(filename) {
      var head = document.head || document.getElementsByTagName('head')[0];
      var link = document.createElement('link');
      link.type = 'text/css';
      link.rel = 'stylesheet';
      link.href = filename;
      head.appendChild(link);
   }

   // Function to remove a specific CSS file from the DOM
   function removeCSS(filename) {
      var links = document.getElementsByTagName('link');
      for (var i = links.length - 1; i >= 0; i--) {
         if (links[i].href && links[i].href.indexOf(filename) !== -1) {
            links[i].parentNode.removeChild(links[i]);
         }
      }
   }

   // Determine if the device has touch support
   var hasTouch = 'ontouchstart' in window || navigator.maxTouchPoints > 0;

   // Handle CSS based on device type
   if (hasTouch) {
      loadCSS('assets/css/placeorder_mobile.css');
      removeElement('.desktop-placeorder');
   } else {
      loadCSS('assets/css/placeorder_desktop.css');
      removeElement('.mobile-placeorder');
   } 
}

// Function to remove an element from the DOM
function removeElement(selector) {
   let element = document.querySelector(selector);
   if (element) {
      element.remove();
   }
}


function determineCurrentPage() {
   let currentPage = 'home'; 
   if (window.location.pathname.includes('listing')) {
      currentPage = 'listing';
   } else if (window.location.pathname.includes('productdetail')) {
      currentPage = 'productdetail';
   }
   else if (window.location.pathname.includes('placeholder')) {
      currentPage = 'cart';
   }
   
   return currentPage;
}

// Call the manageCSS function to initialize CSS management
manageCSS();


</script>
</body>

</html>