 
jQuery('.add').on('click', function () {
    const input = jQuery(this).prev();
    const value = parseInt(input.val(), 10);
    if (value < 10) input.val(value + 1);
});

jQuery('.sub').on('click', function () {
    const input = jQuery(this).next();
    const value = parseInt(input.val(), 10);
    if (value > 1) input.val(value - 1);
});

  
 
jQuery(document).ready(function($) {
    const currentPage = "<?php echo $current_page; ?>";
    $('body').addClass(`${currentPage}-page`);  
});

 
const countdownTime = 1 * 60 * 1000;  
const endTime = Date.now() + countdownTime;

const countdown = setInterval(function() {
    const remainingTime = endTime - Date.now();
    if (remainingTime <= 0) {
        clearInterval(countdown);
        document.getElementById('countdown').innerHTML = "Resend";
    } else {
        const minutes = String(Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60))).padStart(2, '0');
        const seconds = String(Math.floor((remainingTime % (1000 * 60)) / 1000)).padStart(2, '0');
        document.getElementById('countdown').innerHTML = `${minutes}:${seconds}`;
    }
}, 1000);
