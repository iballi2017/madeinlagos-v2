// alert("hello")

$(document).ready(function() {

    /* Form control label effects */
    function textFocus() {
        $(".form-control").each(function() {
            if ($(this).val()) {
                // if ($(this).parent().hasClass("sit")) {
                $(this).parent().removeClass("sit");
                // }
            }
            if (!$(this).val()) {
                // if (!$(this).parent().hasClass("sit")) {
                return;
                // }
            }
        })
    }
    // fires when page refreshes
    // windows.onload(function() {
    //         textFocus();
    //     })
    (function() {
        textFocus();
    })(jQuery);
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


    // $(".second_page_control").each(function() {
    //     console.log("hhhh")
    //     $(this).keyup(function() {
    //         console.log($(this))
    //     })
    // })
})



const firstPageFormControls = document.querySelectorAll(".first_page_control");
const secondPageFormControls = document.querySelectorAll(".second_page_control");
const accountFormErrorMsg = document.getElementById("accountInfo_form_errorMsg");
// const businessFormErrorMsg = document.querySelector(".businessInfo_form_errorMsg");
// const accountFormErrorMsg = document.getElementsByClassName("accountInfo_form_errorMsg");
const businessFormErrorMsg = document.getElementById("businessInfo_form_errorMsg");
const registerSubmitBtn = document.querySelector(".register_submit_btn");
const slidePage = document.querySelector(".slidePage");
const nextBtn = document.querySelector(".nextBtn");
nextBtn.addEventListener("click", () => {
    for (let i = 0; i < firstPageFormControls.length; i++) {
        if (!firstPageFormControls[i].value) {
            if (accountFormErrorMsg.classList.contains("hide")) {
                accountFormErrorMsg.classList.remove("hide");
            }
            return;
        }
    }
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
    }
    if (!accountFormErrorMsg.classList.contains("hide")) {
        accountFormErrorMsg.classList.add("hide");
    }
});

function prevBtn() {
    slidePage.style.marginLeft = "0";
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