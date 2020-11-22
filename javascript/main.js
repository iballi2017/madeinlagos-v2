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




    // Functions to toggle a "hide" css class
    function removeHide(firstArg, secondArg) {
        if (firstArg) {
            if (secondArg.hasClass("hide")) {
                secondArg.removeClass("hide")
            }
        } else {
            secondArg.addClass("hide");
        }
    }

    function addHide(firstArg, secondArg) {
        if (firstArg) {
            if (!secondArg.hasClass("hide")) {
                secondArg.addClass("hide");
            }
        } else {
            secondArg.removeClass("hide")
        }
    }

    // Checkout page bank account toggle
    var bankAccountRadioButton = $("#bank_transfer");
    var thirdPartyRadioButton = $("#third_party");
    var checkedThirdPartyRadioButton = $("#third_party:checked");
    var checkedBankAccountRadioButton = $("#bank_transfer:checked");
    var sellerBankDetails = $("#seller_account_details")
    bankAccountRadioButton.on("click", function() {
        removeHide(checkedBankAccountRadioButton, sellerBankDetails)
    })
    thirdPartyRadioButton.on("click", function() {
        addHide(checkedThirdPartyRadioButton, sellerBankDetails)
    })

    // payment page toggle payment method
    var payment_method = $("#payment_method");
    var payment_method_true = $("#payment_method_true");
    var checked_payment_method_true = $("#payment_method_true:checked");
    var payment_method_false = $("#payment_method_false");
    var checked_payment_method_false = $("#payment_method_false:checked");

    payment_method_true.on('click', function() {
        removeHide(checked_payment_method_true, payment_method)
    })
    payment_method_false.on('click', function() {
        addHide(checked_payment_method_false, payment_method)
    })


    // Form control label effects
    function textFocus(arg) {
        // if ($(".form_control").val() == "") {
        //     if (!$(".form_control").siblings().hasClass("submerge")) {
        //         $(".form_control").siblings().addClass("submerge");
        //         console.log("Hi");
        //     }
        // }
        // if ($(".form_control").val() != "") {
        //     if ($(".form_control").siblings().hasClass("submerge")) {
        //         $(".form_control").siblings().removeClass("submerge");
        //         console.log("Hello");
        //     }
        // }
        if (arg.val()) {
            if (!arg.siblings().hasClass("submerge")) {
                arg.siblings().addClass("submerge");
                console.log("Hi");
            }
        }
        if (arg.val()) {
            if (arg.siblings().hasClass("submerge")) {
                arg.siblings().removeClass("submerge");
                console.log("Hello");
            }
        }
    }
    (function() {
        textFocus();
    })(jQuery);


    $(".form_control").focus(function() {
        console.log("focus in")
        console.log($(this));
        // console.log($(this).siblings())
        if ($(this).siblings().hasClass("submerge")) {
            $(this).siblings().removeClass("submerge");
        }
        textFocus($(this));
    })
    $(".form_control").focusout(function() {
        console.log("focus out")
        console.log($(this));
        // console.log($(this).siblings())
        if (!$(this).siblings().hasClass("submerge")) {
            $(this).siblings().addClass("submerge");
        }
        textFocus();
    })


    // User account menu togglers
    $("#userAccountMenuBtn").click(function() {
        if ($("#sidebar").hasClass("hide")) {
            $("#sidebar").removeClass("hide");
        }
    })
    $("#userAccountCloseMenuBtn").click(function() {
        if (!$("#sidebar").hasClass("hide")) {
            $("#sidebar").addClass("hide");
        }
    })


})


/* VANILLA */

// Back history
function goBack() {
    window.history.back();
}

// Slicing Item card info
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

// Accordion for product details
function openFeature(arg) {
    if (arg.parentElement.parentElement.nextElementSibling.classList.contains("show")) {
        if (!arg.lastElementChild.classList.contains("fa-plus") && arg.lastElementChild.classList.contains("fa-minus")) {
            arg.lastElementChild.classList.add("fa-plus");
            arg.lastElementChild.classList.remove("fa-minus");
        }
    } else if (arg.lastElementChild.classList.contains("fa-plus") && !arg.lastElementChild.classList.contains("fa-minus")) {
        arg.lastElementChild.classList.remove("fa-plus");
        arg.lastElementChild.classList.add("fa-minus");
    } else {
        arg.lastElementChild.classList.remove("fa-plus");
        return;
    }
}
let accordionBtn = document.querySelectorAll('.accordion button');
accordionBtn.forEach(element => {
    element.addEventListener("click", () => {
        openFeature(element);
    })

});


// star ratings
const stars = document.querySelectorAll(".review_star")
var ratingValue = document.querySelector("#rating_value")
var index;
for (let i = 0; i < stars.length; i++) {
    stars[i].addEventListener("mouseover", function() {

        for (let j = 0; j < stars.length; j++) {
            stars[j].classList.remove("fas")
            stars[j].classList.add("far")
        }
        for (let j = 0; j <= i; j++) {
            stars[j].classList.remove("far")
            stars[j].classList.add("fas")

        }
    })

    stars[i].addEventListener("click", function() {
        ratingValue.value = i + 1
        index = i;

        // the value of rating stars
        // console.log(`rating is ${ratingValue.value}`)
    })
    stars[i].addEventListener("mouseout", function() {

        for (let j = 0; j < stars.length; j++) {
            stars[j].classList.remove("fas")
            stars[j].classList.add("far")
        }
        for (let j = 0; j <= index; j++) {
            stars[j].classList.remove("far")
            stars[j].classList.add("fas")


        }
    })
}