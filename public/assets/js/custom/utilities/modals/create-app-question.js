"use strict";
var KTCreateQuestApp = function () {
    var e, t, o, r, a, i, n = [];
    return {
        init: function () {
            (e = document.querySelector("#kt_modal_create_question_app"))
            && (new bootstrap.Modal(e),
                    t = document.querySelector("#kt_modal_create_app_question_stepper"),
                    o = document.querySelector("#kt_modal_create_app_question_form"),
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
                                        text: "Sorry, looks like there are some errors detected, please try again.",
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
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
                                    text: "Sorry, looks like there are some errors detected, please try again.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
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
                            question_ar_text: {
                                validators: {
                                    notEmpty: { message: "Answer Text arabic is required" }
                                }
                            },
                            question_en_text: {
                                validators: {
                                    notEmpty: { message: "Answer Text english is required" }
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
                            correct_answer_ar: {
                                validators: {
                                    notEmpty: {
                                        message: "You must specify the correct answer."
                                    }
                                }
                            }
                            ,
                            correct_answer_en: {
                                validators: {
                                    notEmpty: {
                                        message: "You must specify the correct answer."
                                    }
                                }
                            }
                            ,
                            answer_text_ar_1: {
                                validators: {
                                    notEmpty: {
                                        message: "answer text 1 in arabic is required"
                                    }
                                }
                            }
                            ,
                            answer_text_ar_2: {
                                validators: {
                                    notEmpty: {
                                        message: "answer text 2 in arabic is required"
                                    }
                                }
                            } ,
                            answer_text_ar_3 : {
                                validators: {
                                    notEmpty: {
                                        message: "answer text 3 in arabic is required"
                                    }
                                }
                            } ,
                            answer_text_ar_4 : {
                                validators: {
                                    notEmpty: {
                                        message: "answer text 4 in arabic is required"
                                    }
                                }
                            },
                            answer_text_en_1: {
                                validators: {
                                    notEmpty: {
                                        message: "answer text 1 in english is required"
                                    }
                                }
                            }
                            ,
                            answer_text_en_2: {
                                validators: {
                                    notEmpty: {
                                        message: "answer text 2 in english is required"
                                    }
                                }
                            } ,
                            answer_text_en_3 : {
                                validators: {
                                    notEmpty: {
                                        message: "answer text 3 in english is required"
                                    }
                                }
                            } ,
                            answer_text_en_4 : {
                                validators: {
                                    notEmpty: {
                                        message: "answer text 4 in english is required"
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
                    })),
                    n.push(FormValidation.formValidation(o, {
                        fields: {
                            image: {
                                validators: {
                                    notEmpty: { message: "Image is required" }
                                }
                            },
                            category_id: {
                                validators: {
                                    notEmpty: { message: "Category is required" }
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
                                    notEmpty: { message: "Image is required" }
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
                            notEmpty: { message: "Image is required" }
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
    KTCreateQuestApp.init();
});
