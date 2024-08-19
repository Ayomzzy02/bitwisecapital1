<?xml version="1.0" encoding="utf-8"?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head><meta name="description" content="Best Binary Broker, Binary investment!"/>

<title>Register -  BITWISE CAPITAL </title>

</br>
</br>
 <center><p style="color:white;"></p> </center>

</br>
</br>
</br>

<link href="./assets/font-awesome.css" rel="stylesheet"><!-- Font-awesome-CSS --> 
<link href="./assets/style.css" rel='stylesheet' type='text/css'/><!-- style.css --> 
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
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }
  
  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}


</style>
<meta name="viewport" content="width=device-width, initial-scale=1" />

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script src="./assets/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
		<script>$(document).ready(function(c) {
		$('.alert-close').on('click', function(c){
			$('.main-agile').fadeOut('slow', function(c){
				$('.main-agile').remove();
			});
		});	  
	});
	</script>
</head>
<body>
	<!-- Modal for displaying messages -->
	<div class="modal fade" id="responseModal" tabindex="-1" aria-labelledby="responseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="responseMessage">
          <!-- Message will be displayed here -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
	<div class="main-agile">
	
		<div class="content-wthree">
		<div class="circle-w3layouts"></div>
			<h2>SIGNUP</h2>

<form action="#" method="POST" id="signupForm">
    	<div class="inputs-w3ls">
									<i class="fa fa-user" aria-hidden="true"></i>
									<input type="text" name="fullName" placeholder="Fullname" required=""/>
								</div>
			    
								<div class="inputs-w3ls">
									<i class="fa fa-user" aria-hidden="true"></i>
									<input type="text" name="userName" placeholder="Username" required=""/>
								</div>
								<div class="inputs-w3ls">
									<i class="fa fa-key" aria-hidden="true"></i>
									<input type="password" name="password" placeholder="Password" id="password" required=""/>
								</div>
								
									<div class="inputs-w3ls">
									<i class="fa fa-key" aria-hidden="true"></i>
									<input type="password" name="repassword" placeholder="Confirm Password" id="confirm_password" required=""/>
								</div>
								
									<div class="inputs-w3ls">
									<i class="fa fa-envelope" aria-hidden="true"></i>
									<input type="text" name="email" placeholder="Email" required=""/>
								</div>
								
									<div class="inputs-w3ls">
									<i class="fa fa-phone" aria-hidden="true"></i>
									<input type="text" name="phone" placeholder="Phone Number" required=""/>
								</div>
								</br>
								
				<div class="inputs-w3ls">
 <select name='sex'><option value='Male'>Male</option><option value='Female'>Female</option>--SELECT---</option>";
echo"</select></center>

	</div>
	</br>
					<div class="inputs-w3ls">
<select name='package'>
    <option value='Binary Option'>Binary Option</option>
    <option value='Bitcoin Investment'>Bitcoin Mining</option>
<option value='Forex Trading'>Forex Trading</option>--SELECT---</option>";
echo"</select></center>

	</div>
								
								
	<input type="submit" name="submit" class="button" value="Signup">									<div class="wthree-text"> 
										<ul> 
										 
												<li> <a href="/bitwise/login">Login</a> </li>
										</ul>
									</div>  
								</form>
		</div>
	</div>

	<div class="footer-w3l">
			<p class="agileinfo"> Copyright &copy; 2024 All rights reserved |  BITWISE CAPITAL</p>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission
    
    // Collect form data
    const formData = {
        fullName: document.querySelector('input[name="fullName"]').value,
        userName: document.querySelector('input[name="userName"]').value,
        email: document.querySelector('input[name="email"]').value,
        phone: document.querySelector('input[name="phone"]').value,
        password: document.querySelector('input[name="password"]').value,
        repassword: document.querySelector('input[name="repassword"]').value,
        sex: document.querySelector('select[name="sex"]').value,
        package: document.querySelector('select[name="package"]').value
    };

    axios.post('http://localhost:9000/v1/auth/signup', formData)
        .then(function(response) {
          // Handle successful signup
          document.getElementById('responseMessage').textContent = response.data.message;
          const responseModal = new bootstrap.Modal(document.getElementById('responseModal'));
          responseModal.show();

		  // Reset the form fields after displaying the modal
		  document.getElementById('signupForm').reset();
        })
        .catch(function(error) {
          // Handle signup failure and display the error modal
          const errorMessage = error.response && error.response.data && error.response.data.message
                               ? error.response.data.message 
                               : "An unexpected error occurred. Please try again later.";
          document.getElementById('responseMessage').textContent = errorMessage;
          const responseModal = new bootstrap.Modal(document.getElementById('responseModal'));
          responseModal.show();
        });
});

// Password Validation Logic
var password = document.getElementById("password")
, confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

</body>
</html