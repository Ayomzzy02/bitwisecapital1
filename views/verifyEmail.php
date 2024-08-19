<?xml version="1.0" encoding="utf-8"?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head><meta name="description" content="Best Binary Broker, Binary investment!"/>

<title>Register -  PRECISION OPTION </title>

</br>
</br>
 <center><p style="color:white;"></p> </center>

</br>
</br>
</br>

<link href="/cryptoBack2/assets/font-awesome.css" rel="stylesheet"><!-- Font-awesome-CSS --> 
<link href="/cryptoBack2//assets/style.css" rel='stylesheet' type='text/css'/><!-- style.css --> 
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
		<script src="/cryptoBack2/assets/jquery.min.js"></script>
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
    <!-- Modal -->
<div class="modal fade" id="verificationModal" tabindex="-1" aria-labelledby="verificationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verificationModalLabel">Verification Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- This will be dynamically updated with JS -->
      </div>
    </div>
  </div>
</div>

  
	<div class="main-agile">
	
	<br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
	<div class="footer-w3l">
			<p class="agileinfo"> Copyright &copy; 2024 All rights reserved |  BITWISE CAPITAL</p>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    // 1. Get the emailVerificationToken from the URL
    const emailVerificationToken = window.location.pathname.split('/').pop();

    // 2. Send the token to the backend
    axios.get(`http://localhost:9000/v1/auth/verify_email/${emailVerificationToken}`)
        .then(response => {
            if (response.status === 200 && response.data.status === 'success') {
                // 3. Show success modal
                showModal(`${response.data.message}`, 'success');

                // 4. Redirect to login after 3 seconds
                setTimeout(() => {
                    window.location.href = 'cryptoback2/login';
                }, 3000);

                // 4. Redirect to login after 3 seconds
                setTimeout(() => {
                    window.location.href = '/Cryptoback2/login';
                }, 3000);
            }
        })
        .catch(error => {
            // 5. Show error modal
            const errorMessage = error.response && error.response.data && error.response.data.message
                ? error.response.data.message
                : 'An error occurred during email verification. Please try again.';
            
            showModal('Error', errorMessage, 'danger');

            // 4. Redirect to login after 3 seconds
            setTimeout(() => {
                    window.location.href = '/Cryptoback2/Signup';
                }, 3000);
        });
});

function showModal(title, message, type) {
    // 6. Update the modal content
    const modal = new bootstrap.Modal(document.getElementById('verificationModal'));
    const modalTitle = document.getElementById('verificationModalLabel');
    const modalBody = document.querySelector('.modal-body');

    modalTitle.innerText = title;
    modalBody.innerHTML = `<div class="alert alert-${type}">${message}</div>`;
    
    // 7. Show the modal
    modal.show();

    // 8. Automatically hide the modal after 3 seconds
    setTimeout(() => {
        modal.hide();
    }, 3000);
}

    </script>

</body>
</html