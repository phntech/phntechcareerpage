$(document).ready(function () {
    let onsubmit = false;

    $(".email_id").on("input", function () {
        var inputValues = $(this).val();
        var regex =
            /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!regex.test(inputValues)) {
            $("#error_email").css({
                display: "inline",
                "margin-top": "10px",
            });
            $("#error_email").text("Please enter a valid email.");
            return false;
        } else {
            $("#error_email").text("");
            $("#error_email").css("display", "none");
        }
    });

    // $(".email_id").onChange(function(){
    //     $("#error_email").html("Hello <b>world!</b>");
    //   });

    document.getElementById("submit_btn").disabled = false;
    // console.log(validation.errorList.length

    //     );

    function disableBack() {
        window.history.forward();
    }
    window.onload = disableBack();
    window.onpageshow = function (e) {
        if (e.persisted) disableBack();
    };

    $("#submit_btn").click(function (e) {
        if ($("#enquiryForm").valid()) {
            // $("#exampleModal").css("display", "block")
            // e.preventDefault();

            window.location.href = "/application";
        } else {
            $("#exampleModal").css("display", "none");
        }
    });

    // $("#resendotp").click(function (e) {
    //     window.location.href = "/resendotp";
    //     e.preventDefault();
    // });

    // $("#submit_btn").click(function (e) {
    //     console.log(validation.errorList.length);
    // });

    $(".focus-input").focus(function () {
        if (this.type == "text") {
            $(this).addClass("focussed").val("");
        }
    });

    $(".focus-input").blur(function () {
        $(this).removeClass("focussed");
        $(this).addClass("notfocussed");
    });

    var validation = jQuery("#enquiryForm").validate({
        rules: {
            first_name: {
                required: true,
                firstNameRegx: /^[A-Z a-z]+$/,
            },
            last_name: {
                required: true,
                lastNameRegx: /^[A-Z a-z]+$/,
            },
            wtsp_mob_no: {
                required: true,
                mobileRegx: /^[6789][0123456789]{9}$/,
            },
            // email: {
            //     required: false,
            //     emailRegx:
            //         /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9]+[.-][a-zA-Z][a-z.A-Z]+$/,
            // },
            state: {
                required: true,
            },
            district: {
                required: true,
            },
            taluka: {
                required: true,
            },
            qualification: {
                required: true,
            },
            addition: {
                required: true,
                additionRule: "",
            },
        },

        messages: {
            first_name: {
                required: "Please enter first name.",
            },
            last_name: {
                required: "Please enter last name.",
            },
            wtsp_mob_no: {
                required: "Please enter whatsapp mobile no.",
            },

            state: {
                required: "Please select state.",
            },
            district: {
                required: "Please select district.",
            },
            taluka: {
                required: "Please select taluka",
            },
            qualification: {
                required: "Please select qualification",
            },
            addition: {
                required: "Please enter the addition",
            },
            // submitHandler: function (form) {

            //     console.log('test');
            //     // form.submit();

            // },
        },
    });

    $.validator.addMethod(
        "firstNameRegx",
        function (value, element, regexpr) {
            return regexpr.test(value);
        },
        "Please enter a valid first name."
    );
    $.validator.addMethod(
        "lastNameRegx",
        function (value, element, regexpr) {
            return regexpr.test(value);
        },
        "Please enter a valid last name."
    );
    $.validator.addMethod(
        "mobileRegx",
        function (value, element, regexpr) {
            return regexpr.test(value);
        },
        "Please enter a valid mobile number."
    );

    // $.validator.addMethod(
    //     "emailRegx",

    //     emailRegx="^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$",
    //     function (value, element, regexpr) {
    //         return regexpr.test(value);
    //     },
    //     "Please enter a valid email."
    // );

    $.validator.addMethod(
        "additionRule",
        function (value, element, regexpr) {
            $capcha1 = parseInt(
                document.getElementById("captcha_num_one").value
            );
            $capcha2 = parseInt(
                document.getElementById("captcha_num_two").value
            );
            $addCaptcha = parseInt(document.getElementById("addition").value);
            $result = $capcha1 + $capcha2;
            if ($result === $addCaptcha) {
                return true;
            } else {
                return false;
            }
        },
        "Invalid captcha."
    );

    $(".cancel_btn").click(function () {
        $("#exampleModal").css("display", "none");
    });
    const numInputs = document.querySelectorAll(".num_input");

    numInputs.forEach((input, index) => {
        input.addEventListener("input", (event) => {
            if (event.target.value.length === 1) {
                if (index < numInputs.length - 1) {
                    numInputs[index + 1].focus();
                }
            } else if (event.target.value.length === 0 && index > 0) {
                numInputs[index - 1].focus();
            }
        });
    });

    // var errors = validator.errors();

    // console.log(errors);
});
function onlyNumberKey(evt) {
    var ASCIICode = evt.which ? evt.which : evt.keyCode;
    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) return false;
    return true;
}
