<script src="js/jquery.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/jquery.animateNumber.min.js"></script>
      <script src="js/bootstrap-datepicker.js"></script>
      <script src="js/jquery.timepicker.min.js"></script>
      <script src="js/scrollax.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
      <script src="js/google-map.js"></script>
      <script src="js/main.js"></script>
      <script src="js/jquery.validate.js"></script>
      <script src="js/jquery.validate.min.js"></script>
	   <script type="text/javascript" src="../assets/js/jquery.validate.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.validate.min.js"></script>
     <script>
    //Form Validation
        $( document ).ready( function () {
            $( "#f-popup" ).validate( {
                rules: {
                    name: "required",
                    pwd: "required",
                    email:
                    {
                      required: true,
                      email: true
                    },
                    user_phone:
                    {
                      required: true,
                      digits: true,
                      minlength: 10,
                      maxlength: 10
                    },
                    user_pincode:
                    {
                      required: true,
                      digits: true,
                    },
                    user_address: "required",
                    user_company: "required",
                    user_add1: "required",
                    user_add2: "required",
                    privacy1: "required",
                    privacy2: 
                    {
                      equalTo: "#privacy1"
                    },
                    user_password: "required",
                    user_cpassword:
                    {
                      required: true,
                      equalTo: "#user_password"
                    },
                },
                messages: {
                    
                    name: "Please Enter Name *",
                    pwd: "Please Enter Password *",
                    email:
                    {
                      required: "Please Enter E-mail *",
                      email: "Please Enter Valid E-mail *",
                    },
                    user_phone:
                    {
                      required: "Please Enter Phone No. *",
                      digits: "Please Enter Only Digits *",
                      minlength: "Please Enter Only 10 Digits *",
                      maxlength: "Please Enter Only 10 Digits *"
                    },
                    user_pincode:
                    {
                      required: "Please Enter Pincode *",
                      digits: "Please Enter Only Digits *",
                      minlength: "Please Enter Only 6 Digits *",
                      maxlength: "Please Enter Only 6 Digits *"
                    },
                    user_address: "Please Enter Address *",
                    user_add1: "Please Enter Address  *",
                    user_add2: "Please Enter Locality / Landmark *",
                    privacy1: "Please Accept Privacy Policy *",
                    privacy2:
                    {
                      equalTo: "Please Accept Privacy Policy *"
                    },
                    user_password: "Please Enter Password *",
                    user_cpassword:
                    {
                      required: "Please Enter Confirm Password *",
                      equalTo: "Both Password Not Match*"
                    },
                    
                },
                errorElement: "em",
                errorPlacement: function ( error, element ) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass( "invalid-feedback" );

                    if ( element.prop( "type" ) === "checkbox" ) {
                        error.insertAfter( element.next("br") );
                    } else {
                        error.insertAfter( element );
                    }
                },
                highlight: function ( element, errorClass, validClass ) {
                    $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
                },
                unhighlight: function (element, errorClass, validClass) {
                    $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
                }
            } );

        } );
</script>
      		  <script>
	// If user clicks anywhere outside of the modal, Modal will close

	var modal = document.getElementById('modal-wrapper');
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
	</script>

      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-23581568-13');
      </script>
	  <script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"645ede0ad9e8de46","version":"2021.4.0","si":10}'></script>