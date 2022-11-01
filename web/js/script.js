'use strict';

//Validate form
document.addEventListener("DOMContentLoaded", () => {
        const forms = document.querySelectorAll('.needs-validation');

        Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            });
        });
});


