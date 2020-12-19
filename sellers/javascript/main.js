// alert("hello")

$(document).ready(function() {

    /* Form control label effects */
    function textFocus() {
        $(".form-control").each(function() {
            if ($(this).val()) {
                if ($(this).parent().hasClass("sit")) {
                    $(this).parent().removeClass("sit");
                }
            }
            if (!$(this).val()) {
                return;
            }
        })
    }
    // fires when page refreshes
    (function() {
        textFocus();
    })(jQuery);
    window.addEventListener('load', () => {
        if ($(".form-control").val()) {
            $(".form-control").parent().removeClass("sit");
        } else {
            $(".form-control").parent().addClass("sit");
        }
    });
    $(".form-control").focus(function() {
        if ($(this).parent().hasClass("sit")) {
            $(this).parent().removeClass("sit");
        }
    })
    $(".form-control").focusout(function() {
        if (!$(this).parent().hasClass("sit")) {
            if ($(this).val()) {
                return;
            }
            $(this).parent().addClass("sit");
        }
    })

    // testing email fields
    $(".email_field").focusout(function() {
            if ($("#email").val() != $("#email_test").val()) {
                if ($(".email_error").hasClass("hide")) {
                    $(".email_error").removeClass("hide");
                }
                return;
            }
            if (!$(".email_error").hasClass("hide")) {
                $(".email_error").addClass("hide");
                let emailValue = $("#email").val();
                let pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i
                pattern.test(emailValue);
                if (pattern.test(emailValue) == false) {
                    if ($(".incorrect_email_error").hasClass("hide")) {
                        $(".incorrect_email_error").removeClass("hide")
                    }
                    return;
                }
                if (!$(".incorrect_email_error").hasClass("hide")) {
                    $(".incorrect_email_error").addClass("hide")
                }
            }
        })
        // testing password fields
    $(".pwd_field").focusout(function() {
        if ($("#password").val() != $("#cPassword").val()) {
            if ($(".pwd_error").hasClass("hide")) {
                $(".pwd_error").removeClass("hide");
            }
            return;
        }
        if (!$(".pwd_error").hasClass("hide")) {
            $(".pwd_error").addClass("hide");
        }
    })

    $(".second_page_control").focusout(function() {
        let errorMsg = $(this).parent().siblings();
        if ($(this).val() === "") {

            if (errorMsg.hasClass("hide")) {
                errorMsg.removeClass("hide");
                return;
            }
        } else {
            if (!errorMsg.hasClass("hide")) {
                errorMsg.addClass("hide")
                return;
            }
        }
    })
    $(".second_page_control").change(function() {
        let errorMsg = $(this).parent().siblings();
        if ($(this).val() === "") {

            if (errorMsg.hasClass("hide")) {
                errorMsg.removeClass("hide");
                return;
            }
        } else {
            if (!errorMsg.hasClass("hide")) {
                errorMsg.addClass("hide")
                return;
            }
        }
    });


/* Seller sidenav toggling */
    $("#sidenav_toggler").click(function(){
        if(!$(".sidebar").hasClass("hide-list-label")){
            $(".sidebar").addClass("hide-list-label")
            $(".sidebar").css({"width": "60px"})
            $("main[role='main']").css({"marginLeft": "60px"})
            $("main[role='main']").css({"transition": "all 300ms ease-in-out"})
            $("sidebar").css({"transition": "all 300ms ease-in-out"})
            return;
        }
        if($(".sidebar").hasClass("hide-list-label")){
            $(".sidebar").removeClass("hide-list-label")
            $(".sidebar").css({"width": "200px"})
            $("main[role='main']").css({"marginLeft": "200px"})
            $("sidebar").css({"transition": "all 300ms ease-in-out"})

        }
    });


    /* Custom radio selections */

        function radioSelect(arg1, arg2){
            if(arg1.is(':checked')){
              // $( arg2 ).html( arg1.siblings("label").html() );
              arg2.html( arg1.siblings("label").html() );
                // arg2.html( $( this ).siblings("label").html() );
            }else{
                return;
            }
            arg1.on( "click", function() {
                arg2.html( $( this ).siblings("label").html() );
            });
        }

        // Revenue
        var revenueDuration_select_option = $("#revenueStatus_select_option");
        var selectedRevenueDuration= $("input[type='radio'][name='revenue_duration']");
        var selectedRevenueDuration_checked= $("input[type='radio'][name='revenue_duration']:checked");
        radioSelect(selectedRevenueDuration, revenueDuration_select_option)
        revenueDuration_select_option.html(selectedRevenueDuration_checked.siblings("label").html());
        

        // Order status
        var status_select_option = $("#orderStatus_select_option");
        var selectedOrderStatus = $("input[type='radio'][name='order_status']");
        var selectedOrderStatus_checked = $("input[type='radio'][name='order_status']:checked");
        radioSelect(selectedOrderStatus, status_select_option)
        status_select_option.html(selectedOrderStatus_checked.siblings("label").html());

        // Order year
        var date_select_option = $("#orderDate_select_option");
        var selectedOrderDate = $("input[type='radio'][name='order_date']");
        var selectedOrderDate_checked = $("input[type='radio'][name='order_date']:checked");
        radioSelect(selectedOrderDate, date_select_option)
        date_select_option.html(selectedOrderDate_checked.siblings("label").html());

        // Order month
        var orderMonth_select_option = $("#orderMonth_select_option");
        var selectedOrderMonth = $("input[type='radio'][name='order_month']");
        var selectedOrderMonth_checked = $("input[type='radio'][name='order_month']:checked");
        radioSelect(selectedOrderMonth, orderMonth_select_option)
        orderMonth_select_option.html(selectedOrderMonth_checked.siblings("label").html());

/* Cancel Order */
    $(".trigger_page_modal").on('click', function () {
        // $("#cancel_Order_btn").on('click', function () {
        if ($(".overlay").hasClass("hide")){
            $(".overlay").removeClass("hide");
        }
        if ($(".modal_form").hasClass("hide")){
            $(".modal_form").removeClass("hide");
        }
    })
    $(".cancel_modal_close_btn").on('click', function () {
        if (!$(".overlay").hasClass("hide")){
            $(".overlay").addClass("hide");
        }
        if (!$(".modal_form").hasClass("hide")){
            $(".modal_form").addClass("hide");
        }
    })

/* Earnings slide modal form */
    $("#earningsFormNextBtn").on('click', function () {
        var allFieldEmpty = false;
        $(".bankForm_first_page_control").each(function () {;
            if (this.value == "") {
                allFieldEmpty = true;
                if ($("#firstPage_error_msg").hasClass("hide")) {
                    $("#firstPage_error_msg").removeClass("hide");
                }
                return;
            }

        })
        if (!allFieldEmpty) {
            if (!$("#firstPage_error_msg").hasClass("hide")) {
                $("#firstPage_error_msg").addClass("hide");
            }
            $("#bankFormSlidePage").css({ 'marginLeft': '-100%' })
            $("#bankFormSlidePage").css({ 'transition': 'all 300ms ease-in-out' });
            $("#amount_preview").html($("#amount").val());
            $("#bank_preview").html($("#select").val());
            $("#accountNumber_preview").html($("#acct_number").val());
        }
    });


    /* Toggling Warranty radio check */
    $("#warantyToggler").click(function () {
        if ($("#warantyYes").is(":checked")) {
            if ($("#warantyField").hasClass("hide")) {
                $("#warantyField").removeClass("hide");
            }
        } else {
            if (!$("#warantyField").hasClass("hide")) {
                $("#warantyField").addClass("hide");
            }
        }
    })

    /* Check all table checkboxes (customer-order-details.php) */
    $("#all_row_check").click(function () {
        $('.check').not(this).prop('checked', this.checked);
    });

})


/* VANILLA */

// Back history
function goBack() {
    window.history.back();
}

const firstPageFormControls = document.querySelectorAll(".first_page_control");
const secondPageFormControls = document.querySelectorAll(".second_page_control");
const accountFormErrorMsg = document.getElementById("accountInfo_form_errorMsg");
const businessFormErrorMsg = document.getElementById("businessInfo_form_errorMsg");
const registerSubmitBtn = document.querySelector(".register_submit_btn");
const slidePage = document.querySelector(".slidePage");
const nextBtn = document.querySelector(".nextBtn");
// 
const progressText = document.querySelectorAll(".step p");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;
/* */



if (nextBtn) {
    nextBtn.addEventListener("click", () => {
        for (let i = 0; i < firstPageFormControls.length; i++) {
            if (!firstPageFormControls[i].value) {
                if (accountFormErrorMsg.classList.contains("hide")) {
                    accountFormErrorMsg.classList.remove("hide");
                }
                return;
            }
        }

        // testing email address
        let email = document.querySelector("#email");
        let email_test = document.querySelector("#email_test");
        let email_error = document.querySelector(".email_error");
        if (email.value != email_test.value) {
            if (email_error.classList.contains("hide")) {
                email_error.classList.remove("hide");
            }
            return;
        } else {
            if (!email_error.classList.contains("hide")) {
                email_error.classList.add("hide");

                // 
                console.log("hi")
                    // let emailValue = document.querySelector("#email.value");
                    // var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i
                    // pattern.test(emailValue);
                    // console.log(pattern.test(emailValue))


                // 
                // var userinput = $(this).val();
                // var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i

                // if (!pattern.test(userinput)) {
                //     alert('not a valid e-mail address');
                // }​
                // 




                // function ValidateEmail(inputText) {
                //     var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                //     if (inputText.value.match(mailformat)) {
                //         alert("Valid email address!");
                //         document.form1.text1.focus();
                //         return true;
                //     } else {
                //         alert("You have entered an invalid email address!");
                //         document.form1.text1.focus();
                //         return false;
                //     }
                // }
            }
        }

        // testing passwords
        let password = document.querySelector("#password");
        let cpassword = document.querySelector("#cPassword");
        let pwd_error = document.querySelector(".pwd_error");
        if (password.value != cpassword.value) {
            if (pwd_error.classList.contains("hide")) {
                pwd_error.classList.remove("hide");
            }
            return;
        } else {
            slidePage.style.marginLeft = "-100%";
            slidePage.style.transition = "all 300ms ease-in-out";
            bullet[current].classList.add("active");
            progressText[current].classList.add("active");
            current += 1;
        }

        if (!accountFormErrorMsg.classList.contains("hide")) {
            accountFormErrorMsg.classList.add("hide");
        }
    });
}

function prevBtn() {
    slidePage.style.marginLeft = "0";
    bullet[current - 1].classList.remove("active");
    progressText[current - 1].classList.remove("active");
    current -= 1;
}
// 
// registerSubmitBtn.addEventListener("click", () => {
//     for (let i = 0; i < secondPageFormControls.length; i++) {
//         if (!secondPageFormControls[i].value) {
//             if (businessFormErrorMsg.classList.contains("hide")) {
//                 businessFormErrorMsg.classList.remove("hide");
//             }
//             return;
//         } else if (!businessFormErrorMsg.classList.contains("hide")) {
//             businessFormErrorMsg.classList.add("hide");
//         }
//     }
// })

for (let i = 0; i < secondPageFormControls.length; i++) {
    secondPageFormControls[i].addEventListener("keyup", () => {
        if (!secondPageFormControls[i].value) {
            console.log("no value throughout")
            if (businessFormErrorMsg.classList.contains("hide")) {
                businessFormErrorMsg.classList.remove("hide");
            }
            return;
        }
        if (!businessFormErrorMsg.classList.contains("hide")) {
            businessFormErrorMsg.classList.add("hide");
        }
    })
}


/* Upload Files */
var arg1;
var arg2;
let uploadedImages = [];
let imageBox = document.getElementById("imageBox");
function pickfile(arg1, arg2) {
    if (arg1, arg2){
        arg2.value = arg1.value;
        uploadedImages.push({
            "name": arg1.value
        })
        // imageBox.innerHTML = arg1.value;
        imageBox.innerHTML = uploadedImages;
        console.log(uploadedImages)
        arg2.value = arg1.value.slice(12);
    }
}
// Uploading Seller personal ID
var sellerId = document.getElementById("sellerId");
var pseudo_sellerId = document.getElementById("pseudo_sellerId");
function pickPersonalId() {
    pickfile(sellerId, pseudo_sellerId);
}

// Uploading products Images
var productImage1 = document.getElementById("productImage1");
var pseudo_productImage1 = document.getElementById("pseudo_productImage1");
var productImage2 = document.getElementById("productImage2");
var pseudo_productImage2 = document.getElementById("pseudo_productImage2");
function pick() {
    pickfile(productImage1, pseudo_productImage1);
}
function pick2() {
    pickfile(productImage2, pseudo_productImage2);
}




// // Dropzone class:
// var myDropzone = new Dropzone("div#myId", { url: "./" });
// // Disable auto discover for all elements:
// Dropzone.autoDiscover = false;




/* RAW CODES for my custom drop and drag upload */
var myProductImages = document.getElementById("productImages");
function pickImage() {
    if (uploadedImages.length < 2 ) {
        uploadedImages.push({
            "name": myProductImages.files[0].name
        })
    } else {
        alert("Sorry, you are allowed to upload only 2 images!")
    }
        imageBox.innerHTML = uploadedImages;
        // console.log(uploadedImages)    
        // console.log(getImages())
    imageBox.innerHTML = getImages();
}

function getImages() {
    var template = '';
    uploadedImages.forEach(image => {
        template += `
        <p><img src="${image.name}"/></p>`
        console.log(image.name);
    })

    return template;
}