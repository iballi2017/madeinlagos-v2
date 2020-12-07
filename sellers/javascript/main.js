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