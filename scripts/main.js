window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    // Check if the page has scrolled at least 0px
    if (window.scrollY > 0) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});


// overlays
function openOverlay(overlayId) {
    document.getElementById(overlayId).style.display = 'block';
}

function closeOverlay(overlayId) {
    document.getElementById(overlayId).style.display = 'none';
}




//Form security

function sanitizeString(str) {
    return str.trim(); // Remove whitespace from both sides of a string
}

function sanitizeEmail(email) {
    return email.trim().toLowerCase(); // Clean and convert email to lowercase
}

document.getElementById('contact-form').addEventListener('submit', function(event) {
    // Prevent the form from submitting
    event.preventDefault();

    // Sanitize user inputs
    let name = sanitizeString(document.getElementById('name').value);
    let email = sanitizeEmail(document.getElementById('email').value);
    let message = sanitizeString(document.getElementById('message').value);

});



// Function to validate the form
function validateForm() {
    let name = document.getElementById('name').value.trim();
    let email = document.getElementById('email').value.trim();
    let message = document.getElementById('message').value.trim();

    if (name == "" || email == "" || message == "") {
        alert("Please fill out all fields.");
        return false;
    }

    if (!/\S+@\S+\.\S+/.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // More validations can be added here as needed
    return true;
}

// Function to handle form submission
document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // This is to prevent the default form submission

    if (validateForm()) {

        /*
        fetch('/send-email', { // This URL endpoint would be where the server-side code that sends email is located.
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                name: name,
                email: email,
                message: message
            }),
        })
        .then((response) => response.json())
        .then((data) => {
            console.log('Success:', data);
            // Display thank you message
            document.getElementById('form-container').innerHTML = '<p>Thank you for your message!</p>';
        })
        .catch((error) => {
            console.error('Error:', error);
        });
        */
        
        // For demonstration, we'll just show the thank you message
        document.getElementById('form-container').innerHTML = '<p class="text-center"><span style="color:#056839">Dank je wel voor je bericht!</span></p>';
    }
});