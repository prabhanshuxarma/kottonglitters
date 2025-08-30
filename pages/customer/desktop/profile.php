<div class="profile">


<h2 class="h4 mb-5">Profile</h2>


<form class="col-8" action="">
        <!-- Personal Information Section -->
        <div class="mb-5">
            <div class="heading mb-3">
                <span>Personal Information</span>
                <button class="btn-edit" data-section="personal">Edit</button>
            </div>
            <div class="form-group mb-3">
                <label for="username" class="mr-2">Username</label>
                <input type="text" class="form-control" id="username" value="john_doe" disabled>
                <button type="button" class="button button-dark btn-save" data-section="personal">Save</button>
            </div>
            <div class="form-group">
                <label>Gender</label><br>
                <div class="custom-radio">
                    <input class="form-check-input" type="radio" id="male" name="gender" value="male" checked disabled>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="custom-radio">
                    <input class="form-check-input" type="radio" id="female" name="gender" value="female" disabled>
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>
        </div>
        <!-- Email Address Section -->
        <div class="mb-5">
            <div class="heading mb-3">
                <span>Email Address</span>
                <button class="btn-edit" data-section="email">Edit</button>
            </div>
            <div class="form-group">
                <label for="emailID" class="mr-2">Email ID</label>
                <input type="email" class="form-control" id="emailID" value="john.doe@example.com" disabled>
                <button type="button" class="button button-dark btn-save" data-section="email">Save</button>
            </div>
        </div>
        <!-- Mobile Number Section -->
        <div class="mb-5">
            <div class="heading mb-3">
                <span>Mobile Number</span>
                <button class="btn-edit" data-section="mobile">Edit</button>
            </div>
            <div class="form-group">
                <label for="mobileNumber" class="mr-2">Mobile Number</label>
                <div class="input-group contact-number">
                    <span class="input-group-text country-code">+91</span>
                    <input type="text" class="form-control bg-none" id="mobileNumber" value="123-456-7890" disabled>
                </div>
                <button type="button" class="button button-dark btn-save" data-section="mobile">Save</button>
            </div>
        </div>
    </form>
</div>

<script>
   const sections = {
    personal: ['#username', '[name=gender]'],
    email: ['#emailID'],
    mobile: ['#mobileNumber']
};

const originalValues = {
    personal: {
        '#username': 'john_doe',
        '[name=gender]': 'male'
    },
    email: {
        '#emailID': 'john.doe@example.com'
    },
    mobile: {
        '#mobileNumber': '123-456-7890'
    }
};

function toggleEditing(section, isEditing) {
    sections[section].forEach(selector => {
        document.querySelectorAll(selector).forEach(el => el.disabled = !isEditing);
    });
    document.querySelector(`.btn-save[data-section="${section}"]`).style.display = isEditing ? 'inline-block' : 'none';
}

function resetFields(section) {
    sections[section].forEach(selector => {
        document.querySelectorAll(selector).forEach(el => {
            if (el.type === 'radio') {
                el.checked = originalValues[section][selector] === el.value;
            } else {
                el.value = originalValues[section][selector];
            }
        });
    });
}

document.querySelectorAll('.btn-edit').forEach(button => {
    button.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default action like form submission
        const section = this.getAttribute('data-section');
        const isEditing = this.textContent === 'Edit';
        toggleEditing(section, isEditing);
        this.textContent = isEditing ? 'Cancel' : 'Edit';
        if (!isEditing) resetFields(section);
    });
});

document.querySelectorAll('.btn-save').forEach(button => {
    button.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default action like form submission
        const section = this.getAttribute('data-section');
        toggleEditing(section, false);
        document.querySelector(`.btn-edit[data-section="${section}"]`).textContent = 'Edit';
    });
});

document.querySelectorAll('.btn-edit').forEach(button => button.classList.add('show'));

</script>