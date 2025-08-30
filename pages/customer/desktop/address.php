<div class="address">

    <h2 class="h4 mb-5">Saved Address</h2>

    <div class="col-8">

    <div class="address-list">
        <div class="address-item">
            <div class="address-detail">
                <div class="icon-sec"><i class="icon-home"></i></div>
                <div class="headline">Home</div>
                <div class="detail">B-125, Street Name, City Name, State Name, Country - 000000</div>
            </div>
            <div class="actions gap-1">
                <div class="edit button button-gray">Edit</div>
                <div class="delete button button-gray"><i class="icon-trash"></i></div>
            </div>
        </div>
    </div>


    <button class="button button-gray add-new mb-5">Add New</button>

    <div class="new-address">
        <form action="">
            <div class="row">
            <div class="heading mb-3">Save As</div>
            <div class="d-flex gap-5 mb-5">
                    <div class="custom-radio">
                        <input id="home" type="radio" name="address-title" value="1" >
                        <label for="home">Home</label>
                    </div>
                    <div class="custom-radio">
                        <input id="office" type="radio" name="address-title" value="2">
                        <label for="office">Office</label>
                    </div>
                    <div class="custom-radio">
                        <input id="other" type="radio" name="address-title" value="3">
                        <label for="other">Other</label>
                    </div>
                </div>
            <div class="heading mb-3">Contact Details</div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Enter Full Name*" id="full-name" name="full_name"
                        required="">
                </div>
                <div class="col-md-6 mb-3">
                    <div class="input-group form-control contact-number">
                        <span class="input-group-text country-code lh-1 ps-0">+91</span>
                        <input type="text" placeholder="Enter Mobile Number*" class="form-control py-0">
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <input type="text" class="form-control" placeholder="Enter Email ID*" id="email-id" name="email_id"
                        required="">
                </div>
                <div class="header d-flex justify-content-between align-items-center mb-2 mt-3">
                    <div class="heading">Address</div>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Enter Zip/Postal Code*" id="zip" name="zip"
                        required="">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Locality*" id="locality" name="locality" required="">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="State*" id="state" name="state" disabled="">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Country*" id="country" name="country" disabled="">
                </div>
                <div class="col-12 mb-3">
                    <textarea rows="3" type="text" class="form-control"
                        placeholder="Address (House No, Building, Street, Area)*" id="address" name="address"
                        required=""></textarea>
                </div>
                <div class="d-flex gap-3 mb-5">
                    <button class="button button-dark" type="submit">Save Address</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>


<script>
    

    $(document).ready(function() {
    $(".add-new").click(function() {
        var $this = $(this);
        $(".new-address").toggleClass("show")

        $this.toggleClass("active");

        if ($this.hasClass("active")) {
        $this.html("Cancel");
        } else {
        $this.html("Add New");
        }
    });
    });
</script>
