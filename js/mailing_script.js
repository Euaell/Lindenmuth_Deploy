// // document.addEventListener('DOMContentLoaded', function() {
// //     alert('Hello');
// // });

// document.addEventListener('DOMContentLoaded', function() {
//     const form = document.querySelector('form');

//     form.addEventListener('submit', function(event) {
//         event.preventDefault(); // Prevent form submission

//         // Collect form values
//         const name = document.querySelector('input[name="name"]').value;
//         const company = document.querySelector('input[name="company"]').value;
//         const email = document.querySelector('input[name="email"]').value;
//         const phone = document.querySelector('input[name="phone"]').value;
       
//         const facilityManagement = document.querySelector('input[name="facility_management"]').checked;
//         const propertyManagement = document.querySelector('input[name="property_management"]').checked;
//         const investing = document.querySelector('input[name="investing"]').checked;
//         const traditionalBrokerage = document.querySelector('input[name="traditional_brokerage"]').checked;
        
//         const message = document.querySelector('textarea[name="description"]').value;

//         // log the form values
//         console.log(name);
//         console.log(company);
//         console.log(email);
//         console.log(phone);
//         console.log(facilityManagement);
//         console.log(propertyManagement);
//         console.log(investing);
//         console.log(traditionalBrokerage);
//         console.log(message);

//         // All validation passed, do something with the form data
//         // For example, you can send the data to a server using AJAX

//         // make sure the captcha is valid
//         const captcha = document.querySelector('.recaptcha');
//         const captchaResponse = grecaptcha.getResponse();

//         if (captchaResponse === '') {
//             // Captcha is not valid, display an error message or take appropriate action
//             console.log('Captcha is not valid');
//         } else {
//             // Captcha is valid, continue with form submission or take appropriate action
//             console.log('Captcha is valid');
//         }

//         // setup a mailing service for the collected datas using gmail smtp
//         const nodemailer = require('nodemailer');

//         // Create a transporter using Gmail SMTP
//         const transporter = nodemailer.createTransport({
//             service: 'gmail',
//             auth: {
//                 user: 'your-email@gmail.com',
//                 pass: 'your-password'
//             }
//         });

//         // Setup email data
//         const mailOptions = {
//             from: 'your-email@gmail.com',
//             to: 'recipient-email@example.com',
//             subject: 'New Inquiry',
//             text: `Name: ${name}\nCompany: ${company}\nEmail: ${email}\nPhone: ${phone}\n\nMessage: ${message}`
//         };

//         // Send the email
//         transporter.sendMail(mailOptions, function(error, info) {
//             if (error) {
//                 console.log('Error:', error);
//             } else {
//                 console.log('Email sent:', info.response);
//             }
//         });


//         // Reset the form
//         // form.reset();
//     });
// });


