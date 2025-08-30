<?php include 'elements/header.php'; ?>
<div class="container">
    <div class="desktop-overview overview">
        <div class="row">
            <div class="col-md-3 left-sec">
                <?php include 'pages/customer/desktop/accountsidebar.php'; ?>
            </div>
            <div class="col-md-9 right-sec" id="checkout-form">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <?php include 'pages/customer/desktop/profile.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-orders-tab">
                        <?php include 'pages/customer/desktop/orders.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-address" role="tabpanel" aria-labelledby="v-pills-address-tab">
                        <?php include 'pages/customer/desktop/address.php'; ?>
                    </div>
                    <div class="tab-pane fade" id="v-pills-wishlist" role="tabpanel" aria-labelledby="v-pills-wishlist-tab">
                        <?php include 'pages/customer/desktop/wishlist.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
<?php include 'elements/footer.php'; ?>
 
<script>
   document.getElementById('editButton').addEventListener('click', function() {
        let formElements = document.querySelectorAll('input, select');
        formElements.forEach(element => {
            element.disabled = !element.disabled;
        });
        this.textContent = this.textContent === 'Edit' ? 'Save' : 'Edit';
    });
</script>