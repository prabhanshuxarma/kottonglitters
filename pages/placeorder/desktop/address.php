        <form action="/submit-shipping-address" method="POST">
            <div class="header d-flex justify-content-between align-items-center mb-2">
                <div class="heading">Contact Details</div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Enter Full Name*" id="full-name" name="full_name" required>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="input-group form-control contact-number">
                        <span class="input-group-text country-code lh-1 ps-0">+91</span>
                        <input type="text" placeholder="Enter Mobile Number*" class="form-control py-0">
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <input type="text" class="form-control" placeholder="Enter Email ID*" id="email-id" name="email_id" required>
                </div>
                <div class="header d-flex justify-content-between align-items-center mb-2 mt-3">
                    <div class="heading">Address</div>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Enter Zip/Postal Code*" id="zip" name="zip" required>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Locality*" id="locality" name="locality" required>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="State*" id="state" name="state" disabled>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Country*" id="country" name="country" disabled>
                </div>
                <div class="col-12 mb-3">
                    <textarea rows="3" type="text" class="form-control" placeholder="Address (House No, Building, Street, Area)*" id="address" name="address" required></textarea>
                </div>
                <div class="heading mb-2 mt-2">Save As</div>
                    <div class="d-flex gap-3 mb-5">
                        <div class="address-title">
                            <input type="radio" name="address-title" value="" checked>
                            <label class="button btn-sm btn-gray">Home</label>
                        </div>
                        <div class="address-title">
                            <input type="radio" name="address-title" value="">
                            <label class="button btn-sm btn-gray">Office</label>
                        </div>
                    </div>

                <div class="col-12 mb-3">
                    <div class="custom-checkbox">
                        <input type="checkbox" class="form-check-input" id="same-as-billing" name="same_as_billing">
                        <label class="form-check-label" for="same-as-billing">Same as Billing Address</label>
                    </div>
                </div>
            </div>
        </form>