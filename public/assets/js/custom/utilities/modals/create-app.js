"use strict";
var Sorry = window.translations.Sorry;
var OK = window.translations.OK;
var name = window.translations.name;
var image = window.translations.image;
var desc = window.translations.desc;

var i;

var KTCreateCategoryApp = function () {
    var e, t, o, r, a, i, n = [];

    return {
        init: function () {
            (e = document.querySelector("#kt_modal_create_app"))
            && (new bootstrap.Modal(e),
                    t = document.querySelector("#kt_modal_create_app_stepper"),
                    o = document.querySelector("#kt_modal_create_app_form"),

                    r = t.querySelector('[data-kt-stepper-action="submit"]'),
                    a = t.querySelector('[data-kt-stepper-action="next"]'),
                    (i = new KTStepper(t)).on("kt.stepper.changed", function (e) {
                        if (4 === i.getCurrentStepIndex()) {
                            r.classList.remove("d-none");
                            r.classList.add("d-inline-block");
                            a.classList.add("d-none");

                        } else if (5 === i.getCurrentStepIndex()) {


                            r.classList.add("d-none");
                            a.classList.add("d-none");
                        } else {
                            r.classList.remove("d-inline-block");
                            r.classList.remove("d-none");
                            a.classList.remove("d-none");
                        }
                        document.getElementById("resetButton").addEventListener("click", function () {
                             i.goTo(1);
                             o.reset();
                        });
                    }),



                    i.on("kt.stepper.next", function (e) {
                        console.log("stepper.next");
                        var t = n[e.getCurrentStepIndex() - 1];
                        if (t) {
                            t.validate().then(function (t) {
                                console.log("validated!");
                                if ("Valid" === t) {
                                    e.goNext();
                                } else {
                                    Swal.fire({
                                        text: Sorry,
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: OK,
                                        customClass: { confirmButton: "btn btn-light" }
                                    }).then(function () { });
                                }
                            });
                        } else {
                            e.goNext();
                            KTUtil.scrollTop();
                        }



                    }),
                    i.on("kt.stepper.previous", function (e) {
                        console.log("stepper.previous");
                        e.goPrevious();
                        KTUtil.scrollTop();
                    }),
                    r.addEventListener("click", function (e) {
                        n[3].validate().then(function (t) {
                            console.log("validated!");
                            if ("Valid" === t) {
                                e.preventDefault();
                                r.disabled = true;
                                r.setAttribute("data-kt-indicator", "on");
                                setTimeout(function () {
                                    r.removeAttribute("data-kt-indicator");
                                    r.disabled = false;
                                    i.goNext();
                                }, 2000);
                            } else {
                                Swal.fire({
                                    text: Sorry,
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: OK,
                                    customClass: { confirmButton: "btn btn-light" }
                                }).then(function () {
                                    KTUtil.scrollTop();
                                });
                            }
                        });
                    }),
                    $(o.querySelector('[id="image-input-create-categroy"]')).on("change", function () {


                        r.addEventListener("click", function (e) {
                            n[3].validate().then(function (t) {
                                console.log("validated!");
                                if ("Valid" === t) {
                                    e.preventDefault();
                                    r.disabled = true;
                                    r.setAttribute("data-kt-indicator", "on");

                                    setTimeout(function () {
                                        r.removeAttribute("data-kt-indicator");
                                        r.disabled = false;

                                         i.goNext();

                                        setTimeout(function () {
                                            i.goTo(1); // Navigate back to the first step (index starts at 1)
                                        }, 500); // Adjust the delay as needed
                                    }, 2000);
                                } else {
                                    Swal.fire({
                                        text: Sorry,
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: OK,
                                        customClass: { confirmButton: "btn btn-light" }
                                    }).then(function () {
                                        KTUtil.scrollTop();
                                    });
                                }
                            });
                        });

                     }),
                    $(o.querySelector('[name="card_expiry_year"]')).on("change", function () {
                        n[3].revalidateField("card_expiry_year");
                    }),
                    n.push(FormValidation.formValidation(o, {
                        fields: {
                            name_ar: {
                                validators: {
                                    notEmpty: { message: name }
                                }
                            },
                            name_en: {
                                validators: {
                                    notEmpty: { message: name}
                                }
                            },
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row",
                                eleInvalidClass: "",
                                eleValidClass: ""
                            })
                        }
                    })),
                    n.push(FormValidation.formValidation(o, {
                        fields: {
                            description_ar: {
                                validators: {
                                    notEmpty: {
                                        message: desc
                                    }
                                }
                            },
                            description_en: {
                                validators: {
                                    notEmpty: {
                                        message: desc
                                    }
                                }
                            }
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row",
                                eleInvalidClass: "",
                                eleValidClass: ""
                            })
                        }
                    })),
                    // Image size validation inside FormValidation
                    n.push(FormValidation.formValidation(o, {
                        fields: {
                            image: {
                                validators: {
                                    notEmpty: { message:image },
                                    callback: {
                                        message: 'حجم الصورة يتجاوز الحد المسموح به (2MB).',
                                        // callback: function(value, validator, $field) {
                                        //     const fileInput = $field[0];
                                        //     const file = fileInput.files[0];
                                        //     console.log(file + fileInput);
                                        //     if (file) {
                                        //         const MAX_SIZE = 20; // 2MB in KB
                                        //         if (file.size > MAX_SIZE * 1024) {
                                        //             return false; // Reject the file if it exceeds the size
                                        //         }
                                        //     }
                                        //     return true; // File is valid
                                        // }
                                    }
                                }
                            },
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row",
                                eleInvalidClass: "",
                                eleValidClass: ""
                            })
                        }
                    }))

            );
        }
    };
}();

KTUtil.onDOMContentLoaded(function () {
    KTCreateCategoryApp.init();
});
