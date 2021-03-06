<?php include( "head.php"); ?>
<?php include( "header.php"); ?>
<?php include( "sidebar.php"); ?>

<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
		<div class="bg-white  box-shadow border-radius-5 mb-10">
			<div class="page-header">
				<div class="row">
					<div class="col-md-8 col-sm-12">
						<div class="title pd-10">
							<h4>Receive Payment Details</h4>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 text-right">
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Receive Payment Details</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-white pd-20 box-shadow border-radius-5 mb-30">
			<form>
				 <fieldset class="scheduler-border">
						<legend class="scheduler-border">Receive Payment Details</legend>
					
					<div class="row">
					<div class="form-group col-md-6">
						<label class="">Bank Account Name Holder</label>
						<div class="">
							<input type="text" class="form-control" name="firstName" placeholder="Enter Bank Account Details" />
						</div>
					</div>
					<div class="form-group col-md-6">
						<label class="">Bank Account Number</label>
						<div class="">
							<input type="text" class="form-control" name="firstName" placeholder="Enter Bank Account Number" />
						</div>
					</div>
					<div class="form-group col-md-6">
						<label class="">IFSC Code</label>
						<div class="">
							<input type="text" class="form-control" name="firstName" placeholder="Enter IFSC Code" />
						</div>
					</div>
					
					
					
					<div class="form-group col-md-12">
						<div class="col-lg-9 col-lg-offset-3">
							<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
						</div>
					</div>
				</div>
				</fieldset>
			</form>
			<form id="defaultForm" method="post" action="form-validation.php">
				
			</form>
		</div>
		<?php include( "footer.php"); ?>
	</div>
</div>
<?php include( "script.php"); ?>
<script type="text/javascript">
	$(document).ready(function() {
	    // Generate a simple captcha
	    function randomNumber(min, max) {
	        return Math.floor(Math.random() * (max - min + 1) + min);
	    };
	    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
	
	    $('#defaultForm').bootstrapValidator({
	//        live: 'disabled',
	        message: 'This value is not valid',
	        feedbackIcons: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },
	        fields: {
	            firstName: {
	                group: '.col-lg-4',
	                validators: {
	                    notEmpty: {
	                        message: 'The first name is required and cannot be empty'
	                    }
	                }
	            },
	            lastName: {
	                group: '.col-lg-4',
	                validators: {
	                    notEmpty: {
	                        message: 'The last name is required and cannot be empty'
	                    }
	                }
	            },
	            username: {
	                message: 'The username is not valid',
	                validators: {
	                    notEmpty: {
	                        message: 'The username is required and cannot be empty'
	                    },
	                    stringLength: {
	                        min: 6,
	                        max: 30,
	                        message: 'The username must be more than 6 and less than 30 characters long'
	                    },
	                    regexp: {
	                        regexp: /^[a-zA-Z0-9_\.]+$/,
	                        message: 'The username can only consist of alphabetical, number, dot and underscore'
	                    },
	                    remote: {
	                        type: 'POST',
	                        url: 'remote.php',
	                        message: 'The username is not available'
	                    },
	                    different: {
	                        field: 'password,confirmPassword',
	                        message: 'The username and password cannot be the same as each other'
	                    }
	                }
	            },
	            email: {
	                validators: {
	                    emailAddress: {
	                        message: 'The input is not a valid email address'
	                    }
	                }
	            },
	            password: {
	                validators: {
	                    notEmpty: {
	                        message: 'The password is required and cannot be empty'
	                    },
	                    identical: {
	                        field: 'confirmPassword',
	                        message: 'The password and its confirm are not the same'
	                    },
	                    different: {
	                        field: 'username',
	                        message: 'The password cannot be the same as username'
	                    }
	                }
	            },
	            confirmPassword: {
	                validators: {
	                    notEmpty: {
	                        message: 'The confirm password is required and cannot be empty'
	                    },
	                    identical: {
	                        field: 'password',
	                        message: 'The password and its confirm are not the same'
	                    },
	                    different: {
	                        field: 'username',
	                        message: 'The password cannot be the same as username'
	                    }
	                }
	            },
	            birthday: {
	                validators: {
	                    date: {
	                        format: 'YYYY/MM/DD',
	                        message: 'The birthday is not valid'
	                    }
	                }
	            },
	            gender: {
	                validators: {
	                    notEmpty: {
	                        message: 'The gender is required'
	                    }
	                }
	            },
	            'languages[]': {
	                validators: {
	                    notEmpty: {
	                        message: 'Please specify at least one language you can speak'
	                    }
	                }
	            },
	            'programs[]': {
	                validators: {
	                    choice: {
	                        min: 2,
	                        max: 4,
	                        message: 'Please choose 2 - 4 programming languages you are good at'
	                    }
	                }
	            },
	            captcha: {
	                validators: {
	                    callback: {
	                        message: 'Wrong answer',
	                        callback: function(value, validator) {
	                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
	                            return value == sum;
	                        }
	                    }
	                }
	            }
	        }
	    });
	
	    // Validate the form manually
	    $('#validateBtn').click(function() {
	        $('#defaultForm').bootstrapValidator('validate');
	    });
	
	    $('#resetBtn').click(function() {
	        $('#defaultForm').data('bootstrapValidator').resetForm(true);
	    });
	});
</script>
</body>

</html>