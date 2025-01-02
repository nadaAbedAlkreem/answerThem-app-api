// const MAX_SIZE = 2042; // 2MB
// //
// const imageInput = document.getElementById('image-input-create-categroy');//
// const imageInputUpdate = document.getElementById('image-input-upadate-categroy');
// const errorMessage = document.getElementById('error-message');
// const errorMessageUpdate = document.getElementById('error-message-update');
// console.log(imageInput);
// const nextButton = document.querySelector('[data-kt-stepper-action="next"]');
// console.log(nextButton);
//
// imageInput.addEventListener('change', function (event) {
//     const file = event.target.files[0];
//     console.log(file);
//
//     if (file) {
//         if (file.size > MAX_SIZE * 20) {
//             errorMessage.textContent = 'حجم الصورة يتجاوز الحد المسموح به (2MB).';
//             errorMessage.style.display = 'block';
//             console.log(file.size);
//             imageInput.value = '';
//             console.log(file.size);
//             console.log(MAX_SIZE * 20 );
//             nextButton.disabled = true;
//
//         } else {
//             nextButton.disabled = false;
//
//             errorMessage.style.display = 'none';
//         }
//     }
// });
// imageInputUpdate.addEventListener('change', function (event) {
//     const file = event.target.files[0];
//     console.log(file);
//
//     if (file) {
//         if (file.size > MAX_SIZE * 20) {
//             errorMessageUpdate.textContent = 'حجم الصورة يتجاوز الحد المسموح به (2MB).';
//             errorMessageUpdate.style.display = 'block';
//             console.log(file.size);
//             imageInput.value = '';
//             console.log(file.size);
//             console.log(MAX_SIZE * 20 );
//             nextButton.disabled = true;
//
//         } else {
//             nextButton.disabled = false;
//
//             errorMessageUpdate.style.display = 'none';
//         }
//     }
// });
document.addEventListener('DOMContentLoaded', function () {

    // Get all Arabic radio buttons
    const arabicRadios = document.querySelectorAll('input[name="correct_answer_ar"]');
    // Get all English radio buttons
    const englishRadios = document.querySelectorAll('input[name="correct_answer_en"]');

    // Add change event listener to Arabic radio buttons
    arabicRadios.forEach((radio) => {
        radio.addEventListener('change', function () {
            // Get the selected value from Arabic radios
            const selectedValue = this.value;

            // Set the corresponding English radio to checked
            englishRadios.forEach((englishRadio) => {
                englishRadio.checked = (englishRadio.value === selectedValue);
            });
        });
    });
});
