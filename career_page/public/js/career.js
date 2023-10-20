$(document).ready(function () {
    let onsubmit = false;
    document.getElementById("submit_btn").disabled = false;
    // console.log(validation.errorList.length

    //     );

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
            email: {
                required: true,
                emailRegx:
                    /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9]+[.-][a-zA-Z][a-z.A-Z]+$/,
            },
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
                required: "Please enter mobile no.",
            },
            email: {
                required: "Please enter email id.",
            },
            state: {
                required: "Please select state.",
            },
            district: {
                required: "Please select district.",
            },
            taluka: {
                required: "Please enter taluka",
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

    $.validator.addMethod(
        "emailRegx",
        function (value, element, regexpr) {
            return regexpr.test(value);
        },
        "Please enter a valid email."
    );

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

    const num_input = document.querySelectorAll(".num_input");

    num_input.forEach((input, index) => {
        input.addEventListener("input", (event) => {
            console.log("event" + event);
            console.log("index" + index);
            if (index < num_input.length - 1 && input.value.length === 1) {
                num_input[index + 1].focus();
            } else if (index > 0 && input.value.length === 0) {
                num_input[index - 1].focus();
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
