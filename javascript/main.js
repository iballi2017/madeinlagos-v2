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

    /* LARGE SCREEN CATEGORY NAVIGATION TOGGLE */
    let categories_tab_toggler_lg_hide = true;
    $("#categories_tab_toggler_lg").click(function() {
        if (!$("#main_category_container").hasClass("hide")) {
            $("#main_category_container").addClass("hide");
            categories_tab_toggler_lg_hide = true;
        } else {
            $("#main_category_container").removeClass("hide");
            categories_tab_toggler_lg_hide = false;
        }
    })


    /* MOBILE NAVIGATION SLIDINGS */
    $("#categories_tab_toggler").click(function() {
        if ($("#sidenav_main_container #overlay").hasClass("hide") && $("#sidenav_main_container #inner").hasClass("hide")) {
            $("#sidenav_main_container #overlay").removeClass("hide");
            $("#sidenav_main_container #inner").removeClass("hide");
        }
    })
    $("#sidenav_main_container #overlay").click(function() {
        if (!($("#sidenav_main_container #overlay") && $("#sidenav_main_container #inner")).hasClass("hide")) {
            $("#sidenav_main_container #overlay").addClass("hide");
            $("#sidenav_main_container #inner").addClass("hide");
            backToCategories($("#category_electronics")); //reset the category search to the main categories menu list
        }
    })

    /* back to category menu function */
    function backToCategories(arg) {
        $(arg)
            .parent()
            .parent()
            // .parent()
            .parent()
            .css({ "margin-left": "0" });
    }
    /* electronics */
    $("#category_electronics").click(function() {
        $(this)
            .parent()
            .parent()
            .parent()
            .css({ "margin-left": "calc(-100% / 1)" });
    })
    $("#category_electronics_back_btn").click(function() {
            backToCategories($("#category_electronics"));
        })
        /* groceries */

    $("#category_groceries").click(function() {
        $(this)
            .parent()
            .parent()
            .parent()
            .css({ "margin-left": "calc(-100% / 1 * 2)" });
        $("#category_groceries_back_btn").click(function() {
            backToCategories($("#category_electronics"));
        })

    })

    /* Home, Kitchen and Office */
    $("#category_homeKitchenOffice").click(function() {
        $(this)
            .parent()
            .parent()
            .parent()
            .css({ "margin-left": "calc(-100% / 1 * 3)" });
        $("#category_homeKitchenOffice_back_btn").click(function() {
            backToCategories($("#category_electronics"));
        })

    })

    /* books */
    $("#category_books").click(function() {
        $(this)
            .parent()
            .parent()
            .parent()
            .css({ "margin-left": "calc(-100% / 1 * 4)" });
        $("#category_books_back_btn").click(function() {
            backToCategories($("#category_electronics"));
        })

    })

    /* beauty */
    $("#category_beauty").click(function() {
        $(this)
            .parent()
            .parent()
            .parent()
            .css({ "margin-left": "calc(-100% / 1 * 5)" });
        $("#category_beauty_back_btn").click(function() {
            backToCategories($("#category_electronics"));
        })

    })


    /* product_details_image_slider */
    $(".product_details_image_slider").owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        autoplay: false,
        autoplayTimeout: 10000,
        autoplaySpeed: 3000,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1
            }
        }
    });
    var imgSlider = $('.product_details_image_slider');
    imgSlider.owlCarousel();
    // Go to the main image item
    $("#main_item_img_nav").click(function() {
            imgSlider.trigger('prev.owl.carousel', [800]);
        })
        // Go to the alternative image item
    $("#alt_main_item_img_nav").click(function() {
        imgSlider.trigger('next.owl.carousel', [800]);
    });

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