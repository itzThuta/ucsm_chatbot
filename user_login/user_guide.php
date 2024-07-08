<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'poppins', sans-serif;
    }


    .contact-form {
        position: relative;
        min-height: 100vh;
        z-index: 0;
        background: gainsboro;
        padding: 30px;
        justify-content: center;
        display: grid;
        grid-template-rows: 1fr auto 1fr;
        align-items: center;
    }

    .container {
        max-width: 800px;
        margin-top: 0 auto;
    }

    .contact-form h1 {
        text-align: center;
        font-size: 2.5rem;
        font-weight: 400;
        color: #fff;
        font-family: 'poppins';
    }

    .content h2 {
    margin-bottom: 20px; /* Add spacing below heading */
    color: #69275c; /* Set heading color */
}

.content ul {
    margin-bottom: 20px; /* Add spacing below ul */
    padding-left: 20px; /* Adjust left padding of ul */
}

.content p {
    margin-bottom: 20px; /* Add spacing below paragraphs */
    color: #333; /* Set paragraph text color */
}

    .contact-form .main {
        position: relative;
        display: flex;
        margin: 30px 0;
    }

    .content {
    flex-basis: 50%;
    padding: 3em 3em;
    background: #fff;
    box-shadow: 2px 9px 49px -17px rgba(156, 39, 148, 0.1);
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
    display: flex;
    flex-direction: column; /* Arrange content vertically */
    justify-content: center; /* Center content vertically */
}

    .form-img {
        flex-basis: 50%;
        background: #f0f4f8;
        background-size: cover;
        padding: 40px;
        border-top-right-radius: 8px;
        border-bottom-right-radius: 8px;
        display: flex;
        justify-content: center;
        /* Center the image horizontally */
        align-items: center;
        /* Center the image vertically */
    }

    .form-img img {
        max-width: 110%;
        /* Adjust the maximum width of the image */
        max-height: 110%;
        /* Adjust the maximum height of the image */
        border-radius: 8px;
        /* Add border radius to the image */
    }

    .btn,
    button,
    input {
        border-radius: 35px;
    }

    .btn:hover,
    button:hover {
        color: #97359c;
        transition: 0.5s ease;
    }

    .contact-form form {
        margin: 30px 0;
    }


    .contact-form input,
    textarea {
        outline: none;
        margin-bottom: 15px;
        font-stretch: 16px;
        color: #999;
        padding: 14px 20px;
        width: 100%;
        display: inline-block;
        box-sizing: border-box;
        border: 1px solid gainsboro;
        background: #fcfcfc;
        transition: 0.3s ease;
        border-radius: 10px;
    }

    .contact-form input::placeholder,
    .contact-form textarea::placeholder {
        /* font-weight: bold; */
        font-size: small;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
        background: transparent;
        border: 2px solid #69275c;
        /* Adjust border thickness and focus color */
    }

    .contact-form button {
        font-size: 18px;
        color: #fff;
        width: 100%;
        background: black;
        /* Set background color to black */
        font-weight: 600;
        transition: 0.3s ease;
        padding: 14px 15px;
        border: 1px solid black;
        /* Set border color to black */
    }




    /* .contact-form button {
        font-size: 18px;
        color: #fff;
        width: 100%;
        background: #69275c;
        font-weight: 600;
        transition: 0.3s ease;
        padding: 14px 15px;
        border: 1px solid #69275c;

    } */

    .logo-container {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
        /* Adjust as needed */
    }

    .logo-container img {
        width: 100px;
        /* Adjust as needed */
        height: auto;
    }

    .contact-form h2 {
        text-align: center;
        color: black;
        font-weight: bold;
    }


    @media(max-width:736px) {
        .contact-form .main {
            flex-direction: column;
        }

        .contact-form form {
            margin-top: 30px;
            margin-bottom: 10px;

        }

        .form-img {
            border-radius: 0;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            order: 2;
        }

        .content {
            order: 1;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
    }

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
        font-weight: normal;
    }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }
</style>

<body>
    <div class="contact-form">
        <div class="container">
            <?php echo $feedback_message; ?>
            <div class="main">
                <div class="content">
                    <div class="logo-container">
                        <img src="https://static.vecteezy.com/system/resources/previews/026/609/937/non_2x/butterfly-silhouette-illustration-butterfly-icon-vector.jpg"
                            alt="Logo">
                    </div>
                    <h2>User Guide For ChatBot</h2>
                    <ul>
                        <li><strong>Login:</strong> To access personalized features, such as course recommendations
                            and
                            schedule management, log in using your university credentials.</li>
                        <li><strong>Register:</strong> New users can register for an account by providing necessary
                            information such as name, email, and student ID.</li>
                        <li><strong>Chat:</strong> Once logged in, start chatting with the chatbot by typing your
                            queries
                            or selecting options from the menu.</li>
                        <li><strong>Receive Responses:</strong> The chatbot will respond to your queries instantly,
                            providing helpful information on courses, campus events, and more.</li>
                    </ul>
                    <!-- <p><strong>For further assistance, contact:</strong></p>
                    <p>Email: support@university.edu</p>
                    <p>Phone: +123-456-7890</p> -->
                </div>
                <div class="form-img">
                    <img src="https://img.freepik.com/premium-vector/concept-chatbot-human-talk-with-robot-customer-service-support_136162-303.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

</body>

</html>