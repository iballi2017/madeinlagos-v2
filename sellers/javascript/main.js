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
})



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