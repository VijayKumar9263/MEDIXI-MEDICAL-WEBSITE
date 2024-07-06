
    document.getElementById('appointmentForm').addEventListener('submit', function(event) {
        let isValid = true;

        // Get form elements
        const service = document.getElementById('service');
        const doctor = document.getElementById('doctor');
        const name = document.getElementById('name');
        const email = document.getElementById('email');
        const phone = document.getElementById('phone');
        const appointmentDate = document.getElementById('appointment_date');

        // Error elements
        const serviceError = document.getElementById('serviceError');
        const doctorError = document.getElementById('doctorError');
        const nameError = document.getElementById('nameError');
        const emailError = document.getElementById('emailError');
        const phoneError = document.getElementById('phoneError');
        const appointmentDateError = document.getElementById('appointmentDateError');

        // Clear previous errors
        serviceError.textContent = '';
        doctorError.textContent = '';
        nameError.textContent = '';
        emailError.textContent = '';
        phoneError.textContent = '';
        appointmentDateError.textContent = '';

        // Validation checks
        if (service.value === "") {
            serviceError.textContent = 'Please select a service.';
            isValid = false;
        }
        if (doctor.value === "") {
            doctorError.textContent = 'Please choose a doctor.';
            isValid = false;
        }
        if (name.value.trim() === "") {
            nameError.textContent = 'Please enter your name.';
            isValid = false;
        }
        if (email.value.trim() === "") {
            emailError.textContent = 'Please enter your email address.';
            isValid = false;
        }
        if (phone.value.trim() === "" || phone.value.trim().length !== 10) {
            phoneError.textContent = 'Please enter a 10-digit phone number.';
            isValid = false;
        }
        if (appointmentDate.value.trim() === "") {
            appointmentDateError.textContent = 'Please select a date and time.';
            isValid = false;
        }

        // If any field is invalid, prevent form submission
        if (!isValid) {
            event.preventDefault();
        }
    });
