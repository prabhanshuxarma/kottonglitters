
<div class="header d-flex justify-content-between align-items-center mb-3">
    <div class="heading">Payment Method</div>
</div>
<form action="">
<div class="payment-container">
         
        <form action="/process-payment" method="post">

            <div class="accordion" id="paymentAccordion">
                <!-- UPI Section -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingUPI">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUPI" aria-expanded="true" aria-controls="collapseUPI">
                            UPI
                        </button>
                    </h2>
                    <div id="collapseUPI" class="accordion-collapse collapse show" aria-labelledby="headingUPI" data-bs-parent="#paymentAccordion">
                    <div class="accordion-body pb-0">

                            <div class="mb-3 text-center">
                                <p class="mb-2">Scan the QR code to make payment:</p>
                                <img src="https://via.placeholder.com/200x200.png?text=QR+Code" alt="UPI QR Code" class="qr-code">
                            </div>
                            <hr>
                            <p class="mt-2 text-center">Alternatively, you can enter the UPI ID manually below.</p>
                            <div class="form-group mb-3">
                                <input type="text" id="upi-id" name="upi_id" placeholder="Enter UPI Id" class="form-control" required>
                            </div>
                           
                        </div>
                    </div>
                </div>

                <!-- Credit/Debit Card Section -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingCard">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCard" aria-expanded="false" aria-controls="collapseCard">
                            Credit/Debit Card
                        </button>
                    </h2>
                    <div id="collapseCard" class="accordion-collapse collapse" aria-labelledby="headingCard" data-bs-parent="#paymentAccordion">
                        <div class="accordion-body pb-0">
                            <div class="row">
                            <div class="  col-12 mb-3">
                                <input type="text" id="card-number" placeholder="Enter Card Number" name="card_number" class="form-control" required>
                            </div>
                            <div class="  col-6 mb-3">
                                <input type="text" id="expiry-date" placeholder="Expiry Date (MM/YY)" name="expiry_date" class="form-control" required>
                            </div>
                            <div class="  col-6 mb-3">
                                <input type="text" id="cvv" placeholder="CVV" name="cvv" class="form-control" required>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PayPal Section -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingPayPal">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePayPal" aria-expanded="false" aria-controls="collapsePayPal">
                            PayPal
                        </button>
                    </h2>
                    <div id="collapsePayPal" class="accordion-collapse collapse" aria-labelledby="headingPayPal" data-bs-parent="#paymentAccordion">
                        <div class="accordion-body pb-0">
                            <div class="mb-3">
                                <input type="email" id="paypal-email" name="paypal_email" placeholder="Enter PayPal Email" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bank Transfer Section -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingBankTransfer">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBankTransfer" aria-expanded="false" aria-controls="collapseBankTransfer">
                            Bank Transfer
                        </button>
                    </h2>
                    <div id="collapseBankTransfer" class="accordion-collapse collapse" aria-labelledby="headingBankTransfer" data-bs-parent="#paymentAccordion">
                        <div class="accordion-body pb-0">
                            <div class="mb-3">
                                <input type="text" id="account-number" name="account_number" placeholder="Bank Account Number" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" id="bank-name" name="bank_name" placeholder="Bank Name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" id="ifsc-code" name="ifsc_code" placeholder="IFSC Code" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</form>