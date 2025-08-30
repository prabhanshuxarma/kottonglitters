<?php include 'elements/placeorder-header.php'; ?>

<div class="progress-step-bar">
    <div id="step1" class="step active">Cart</div>
    <div id="step2" class="step pending">Shipping</div>
    <div id="step3" class="step pending">Payment</div>
</div>

<div class="desktop-placeorder">
    <div class="row m-0">
        <div class="col-md-8 left-sec" id="checkout-form">
            <div id="step1-content" class="step-content cart active">
                <?php include 'pages/placeorder/desktop/cart.php'; ?>
                <button type="button" class="next-btn button button-gray mt-4" onclick="nextStep()">Continue to Shipping</button>
            </div>
            <div id="step2-content" class="step-content shipping ">
                <?php include 'pages/placeorder/desktop/address.php'; ?>
                <button type="button" class="next-btn button button-gray mt-4" onclick="nextStep()">Continue to Payment</button>
            </div>
            <div id="step3-content" class="step-content payment">
                <?php include 'pages/placeorder/desktop/payment.php'; ?>
            </div>
        </div>
        <div class="col-md-4 right-sec">
            <?php include 'pages/placeorder/desktop/sidebar.php'; ?>
        </div>
    </div>
</div>
<div class="mobile-placeorder">
    <div id="checkout-form">
        <div id="step1-content" class="step-content cart active">
            <?php include 'pages/placeorder/mobile/cart.php'; ?>
            <button type="button" class="next-btn button button-gray mt-4" onclick="nextStep()">Continue to Shipping</button>
        </div>
        <div id="step2-content" class="step-content shipping ">
            <?php include 'pages/placeorder/mobile/address.php'; ?>
            <button type="button" class="next-btn button button-gray mt-4" onclick="nextStep()">Continue to Payment</button>
        </div>
        <div id="step3-content" class="step-content payment">
            <?php include 'pages/placeorder/mobile/payment.php'; ?>
            <?php include 'pages/placeorder/mobile/sidebar.php'; ?>
        </div>
    </div>
    
</div>

<script>
    let currentStep = 1;

function updateStepStatus(step) {
    for (let i = 1; i <= 3; i++) {
        const stepElement = document.getElementById('step' + i);
        if (i < step) {
            stepElement.classList.add('completed');
            stepElement.classList.remove('active', 'pending');
        } else if (i === step) {
            stepElement.classList.add('active');
            stepElement.classList.remove('completed', 'pending');
        } else {
            stepElement.classList.add('pending');
            stepElement.classList.remove('completed', 'active');
        }
    }
}

function nextStep() {
    if (currentStep < 3) {
        document.getElementById('step' + currentStep + '-content').classList.remove('active');
        currentStep++;
        document.getElementById('step' + currentStep + '-content').classList.add('active');
        updateStepStatus(currentStep);
    }
}

function startOver() {
    currentStep = 1;
    document.getElementById('step1-content').classList.add('active');
    document.getElementById('step2-content').classList.remove('active');
    document.getElementById('step3-content').classList.remove('active');
    updateStepStatus(currentStep);
}
</script>

<?php include 'elements/placeorder-footer.php'; ?>
</div>


