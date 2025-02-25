(function ($) {
    "use strict";

    // Initialize Date Picker
    $('.date').datetimepicker({
        format: 'L' // Localized date format
    });

    // Initialize Time Picker
    $('.time').datetimepicker({
        format: 'LT' // Localized time format
    });

    // Initialize Testimonial Carousel
    $('.testimonial-carousel').owlCarousel({
        autoplay: true, // Enable autoplay
        smartSpeed: 1500, // Transition speed
        margin: 30, // Margin between items
        dots: true, // Show navigation dots
        loop: true, // Enable infinite loop
        center: true, // Center items
        responsive: {
            0: { items: 1 }, // Single item on small screens
            576: { items: 1 },
            768: { items: 2 },
            992: { items: 3 } // Multiple items on larger screens
        }
    });

    // Back to Top Button Functionality
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow'); // Show button when scrolled down
        } else {
            $('.back-to-top').fadeOut('slow'); // Hide button when near the top
        }
    });

    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo'); // Smooth scroll to top
        return false;
    });

    // Reservation Form Validation and Redirection
    document.querySelector('#reservation form').addEventListener('submit', function (event) {
        const guests = parseInt(document.getElementById('guests').value, 10); // Ensure numeric value

        if (isNaN(guests) || guests < 1) { // Validate guest count
            alert('Number of guests must be at least 1.');
            event.preventDefault(); // Prevent form submission on invalid input
        } else {
            // Redirect after successful validation
            event.preventDefault(); // Prevent default form submission
            window.location.href = '/thank-you'; // Redirect to a 'Thank You' page
        }
    });

    // Redirect to a page when a specific button is clicked
    document.querySelectorAll('.redirect-button').forEach(function (button) {
        button.addEventListener('click', function () {
            const targetPage = this.getAttribute('data-target'); // Get target page from data attribute
            if (targetPage) {
                window.location.href = targetPage; // Redirect to the specified page
            } else {
                console.error('Target page not specified for this button.');
            }
        });
    });
})(jQuery);
