"use strict";
var Sorry = window.translations.Sorry;
var OK = window.translations.OK;
var name = window.translations.name;
var image = window.translations.image;
var desc = window.translations.desc;
var KTUpdateCategoryApp = function () {
    var e, t, o, r, a, i, n = [];
    return {
        init: function () {
            (e = document.querySelector("#kt_modal_update_app"))
            && (new bootstrap.Modal(e),
                    t = document.querySelector("#kt_modal_update_app_stepper"),
                    o = document.querySelector("#kt_modal_update_app_form"),
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
                                        confirmButtonText: Ok,
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
                                    confirmButtonText: Ok,
                                    customClass: { confirmButton: "btn btn-light" }
                                }).then(function () {
                                    KTUtil.scrollTop();
                                });
                            }
                        });
                    }),
                    $(o.querySelector('[name="card_expiry_month"]')).on("change", function () {
                        n[3].revalidateField("card_expiry_month");
                    }),
                    $(o.querySelector('[name="card_expiry_year"]')).on("change", function () {
                        n[3].revalidateField("card_expiry_year");
                    }),
                    n.push(FormValidation.formValidation(o, {
                        fields: {
                            name_ar: {
                                validators: {
                                    notEmpty: { message:  name}
                                }
                            },
                            name_en: {
                                validators: {
                                    notEmpty: { message:  name }
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
                                        message:desc
                                    }
                                }
                            }
                            ,

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
                    n.push(FormValidation.formValidation(o, {
                        fields: {

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
                            ie: {
                                validators: {
                                    notEmpty: { message: image}
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
                    ie: {
                        validators: {
                            notEmpty: { message: image}
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
    KTUpdateCategoryApp.init();
});
