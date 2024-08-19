<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BITWISE CAPITAL &raquo; Best Binary Trading Platform</title>
    <link href="assets/font-awesome.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <style>
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }
        
        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 40%; /* Could be more or less, depending on screen size */
            text-align: center;
        }
        
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="main-agile">
        <div class="content-wthree">
            <div class="circle-w3layouts"></div>
            <h2>Login</h2>
            <form id="loginForm">
                <div class="inputs-w3ls">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" id="email" name="email" placeholder="email" required />
                </div>
                <div class="inputs-w3ls">
                    <i class="fa fa-key" aria-hidden="true"></i>
                    <input type="password" id="password" name="password" placeholder="Password" required />
                </div>
                <button type="submit" class="button">Log in</button>
                <div class="wthree-text"> 
                    <ul> 
                        <li><a href="/Cryptoback2/Signup">Create An Account</a></li>
                    </ul>
                </div>  
            </form>
        </div>
    </div>

    <div class="footer-w3l">
        <p class="agileinfo">Copyright &copy; 2024 All rights reserved | <a href="../">BITWISE CAPITAL</a></p>
    </div>

    <!-- The Modal -->
    <div id="errorModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="error-message">Some error text</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("loginForm");
    const errorModal = document.getElementById("errorModal");
    const closeModal = document.getElementsByClassName("close")[0];
    const errorMessage = document.getElementById("error-message");

    loginForm.addEventListener("submit", async function (event) {
        event.preventDefault(); // Prevent form from submitting the default way
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        try {
            const response = await axios.post('http://localhost:9000/v1/auth/signin', { email, password });

            if (response.status === 200) {
                const token = response.data.token;
                console.log(token);

                // Send token to set session
                const sessionResponse = await axios.post("/Cryptoback2/setSession.php", { token });

                if (sessionResponse.data.status === 'success') {
                    // Handle successful login, e.g., redirect to the dashboard
                    document.cookie = `token=${token}; path=/; max-age=${24 * 60 * 60};`;
                    window.location.href = '/Cryptoback2/dashboard';
                } else {
                    console.error('Failed to set session:', sessionResponse.data.message);
                    showErrorModal('Failed to set session. Please try again.');
                }
            } else {
                showErrorModal(response.data.message);
            }
        } catch (error) {
            let errorMsg = 'An error occurred. Please try again.';
            if (error.response && error.response.data && error.response.data.message) {
                errorMsg = error.response.data.message;
            }
            showErrorModal(errorMsg);
        }
    });

    closeModal.addEventListener("click", function() {
        errorModal.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target === errorModal) {
            errorModal.style.display = "none";
        }
    });

    function showErrorModal(message) {
        errorMessage.textContent = message;
        errorModal.style.display = "block";
    }
});

    </script>
</body>
</html>




