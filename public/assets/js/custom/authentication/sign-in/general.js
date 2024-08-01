"use strict";

// Class definition
var KTSigninGeneral = (function () {
    // Elements
    var form;
    var submitButton;
    var validator;

    // Handle form
    var handleValidation = function (e) {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(form, {
            fields: {
                login: {
                    validators: {
                        callback: {
                            message: 'The value is not a valid email address or username',
                            callback: function (input) {
                                // Check if the input value is a valid email or username
                                var value = input.value;
                                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                                return emailRegex.test(value) || value.length > 0;
                            }
                        },
                        notEmpty: {
                            message: "Email address or username is required",
                        },
                    },
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: "The password is required",
                        },
                    },
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: ".fv-row",
                    eleInvalidClass: "", // comment to enable invalid state icons
                    eleValidClass: "", // comment to enable valid state icons
                }),
            },
        });
    };

    var handleSubmitAjax = function () {
        // Handle form submit
        submitButton.addEventListener("click", function (e) {
            // Prevent button default action
            e.preventDefault();

            // Validate form
            validator.validate().then(function (status) {
                if (status == "Valid") {
                    // Show loading indication
                    submitButton.setAttribute("data-kt-indicator", "on");

                    // Disable button to avoid multiple clicks
                    submitButton.disabled = true;

                    // Get CSRF token
                    const token = document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content");

                    // Perform AJAX request
                    axios
                        .post(
                            submitButton.closest("form").getAttribute("action"),
                            new FormData(form),
                            {
                                headers: {
                                    "X-CSRF-TOKEN": token,
                                },
                            }
                        )
                        .then(function (response) {
                            if (response.data.success) {
                                form.reset();
                                location.href = response.data.redirect_url; // Redirect immediately if confirmed
                            } else {
                                // Show error message popup
                                Swal.fire({
                                    text: response.data.message,
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                });
                            }
                        })
                        .catch(function (error) {
                            // Show error message popup for AJAX failure
                            Swal.fire({
                                text: "Username atau password salah." ,
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                },
                            });
                        })
                        .then(() => {
                            // Hide loading indication after AJAX request
                            submitButton.removeAttribute("data-kt-indicator");

                            // Enable submit button after AJAX request completes
                            submitButton.disabled = false;
                        });
                } else {
                    // Show validation error message popup
                    Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        },
                    });
                }
            });
        });
    };

    var isValidUrl = function (url) {
        try {
            new URL(url);
            return true;
        } catch (e) {
            return false;
        }
    };

    // Public functions
    return {
        // Initialization
        init: function () {
            form = document.querySelector("#kt_sign_in_form");
            submitButton = document.querySelector("#kt_sign_in_submit");

            handleValidation();

            if (
                isValidUrl(submitButton.closest("form").getAttribute("action"))
            ) {
                handleSubmitAjax(); // use for ajax submit
            }
        },
    };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTSigninGeneral.init();
});
