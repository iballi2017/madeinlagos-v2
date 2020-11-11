// JQUERY BLOCK
$(document).ready(function() {

    // $('.hero_slider').owlCarousel({
    //   loop: true,
    //   margin: 10,
    //   // nav:true,
    //   autoplay:true,
    //   fluidSpeed: 10000,
    //   responsive: {
    //     0: {
    //       items: 1
    //     },
    //     600: {
    //       items: 1
    //     },
    //     1000: {
    //       items: 1
    //     }
    //   }
    // })

    // new_arrival_listing
    $(".new_arrival_listing").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        autoplaySpeed: 2500,
        autoplay: true,
        smartSpeed: 1000,
        fluidSpeed: 1000,
        dots: false,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
    var new_arrival_listing = $('.new_arrival_listing');
    new_arrival_listing.owlCarousel();
    // Go to the next item
    $('.new_arrivals_nav .customNextBtn').click(function() {
            new_arrival_listing.trigger('next.owl.carousel');
        })
        // Go to the previous item
    $('.new_arrivals_nav .customPrevBtn').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        new_arrival_listing.trigger('prev.owl.carousel', [300]);
    })

    // best_sellings
    $(".best_sellings").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        autoplaySpeed: 7000,
        autoplay: true,
        fluidSpeed: 5000,
        dots: false,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })

    var best_sellings = $('.best_sellings');
    best_sellings.owlCarousel();
    // Go to the next item
    $('.best_sellings_nav .customNextBtn').click(function() {
            best_sellings.trigger('next.owl.carousel');
        })
        // Go to the previous item
    $('.best_sellings_nav .customPrevBtn').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            best_sellings.trigger('prev.owl.carousel', [300]);
        })
        // $(".product_card .card-text").
        // console.log($(".product_card .card-text").slice(20));




    /* FILTERING & SORTING */
    function showPopup(arg) {
        if (!arg.hasClass("hide")) {
            return;
        } else {
            arg.removeClass("hide");
            arg.addClass("show");
        }
    }

    function hidePopup(arg) {
        if (!arg.hasClass("show")) {
            return;
        } else {
            arg.addClass("hide");
            arg.removeClass("show");
        }
    }
    $("#mobileFilterFormTriggerToShow").click(function() {
        showPopup($("#mobile_filter_form_wrapper"));
    })
    $("#mobileFilterFormTriggerToHide").click(function() {
        hidePopup($("#mobile_filter_form_wrapper"))
    })

    $("#mobileSortFormTriggerToShow").click(function() {
            showPopup($("#mobile_sort_form_wrapper"));
        })
        // $("#mobileFilterFormTriggerToHide").click(function() {
        //     hidePopup($("#mobile_filter_form"))
        // })
        // $("#mobile_filter_form").click(function() {
        //     hidePopup($("#mobile_filter_form"))
        // })
    $("button.close").click(function() {
        console.log("hi!")
        hidePopup($("#mobile_sort_form_wrapper"))
    })

})



// VANILLA
let cardText = document.querySelectorAll(".product_card .card-text");
cardText.forEach(text => {
    let x = text.innerHTML;
    text.innerHTML = text.innerHTML.slice(0, 40) + '...';
    if (text.hasAttribute("title")) {
        return;
    } else {
        text.setAttribute("title", x);
    }
})