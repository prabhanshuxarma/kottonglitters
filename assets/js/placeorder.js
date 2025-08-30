 // Function to update button text based on the active tab
 function updateButtonText() {
    // Get the current active tab
    const activeTab = document.querySelector('#myTab .nav-link.active');
    
    // Get the button element
    const button = document.getElementById('step-button');
    
    // Update button text based on the active tab
    if (activeTab) {
        switch (activeTab.getAttribute('id')) {
            case 'cart-tab':
                button.textContent = 'Proceed to Address';
                break;
            case 'address-tab':
                button.textContent = 'Proceed to Payment';
                break;
            case 'payment-tab':
                button.textContent = 'Complete Purchase';
                break;
            default:
                button.textContent = 'Start Checkout';
                break;
        }
    }
}