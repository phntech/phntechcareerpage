$(document).ready(function(){
    // $("#submit_btn").click(function(){
    //  console.log("submit");
    // });


    jQuery("#enquiryForm").validate({
        rules: {
            first_name: {
                required: true,
                // firstNameRegx: /^[A-Z a-z]+$/,
            },
            last_name: {
                required: true,
                // lastNameRegx: /^[A-Z a-z]+$/,
            },
            wtsp_mob_no: {
                required: true,
                // mobileRegx: /^[6789][0123456789]{9}$/,
            },
            email: {
                required: true,
                // emailRegx:/^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9]+[.-][a-zA-Z][a-z.A-Z]+$/
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
           
        }

    })

  });