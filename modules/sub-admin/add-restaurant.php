<!DOCTYPE html>
<html>
<head>
	<?php include('../include/head.php'); ?>
	<style>
	legend.scheduler-border {
font-size: 1.2em !important;
font-weight: bold !important;
text-align: left !important;
width:auto;
padding:0 10px;
border-bottom:none;
}
 legend.scheduler-border {
        font-size: 1.2em !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
    }
	</style>
</head>
<body>
	<?php include('../include/header.php'); ?>
	<?php include('../include/sidebar.php'); ?>
	<div class="main-container">
	
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
		<div class="bg-white pd-10 box-shadow border-radius-5 mb-10">
			<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Advanced Components</h4>
							</div>
						
						</div>
						<div class="col-md-6 col-sm-12 text-right">
								<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Advanced Components</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				</div>

			<form>
			<div class="bg-white pd-20 box-shadow border-radius-5 mb-30">
			<fieldset class="scheduler-border">
						<legend class="scheduler-border">Basic Information</legend>
						  <div class="form-group col-md-6">
                            <label class="">Restaurant Name</label>
                            <div class="">
                                <input type="text" class="form-control" name="firstName" placeholder="Enter Restaurant Name" />
                            </div>
                        </div>
			</fieldset>	
			</form>			

				<form id="defaultForm" method="post" action="form-validation.php">
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label class="">Restaurant Name</label>
                            <div class="">
                                <input type="text" class="form-control" name="firstName" placeholder="Enter Restaurant Name" />
                            </div>
                        </div>
						       <div class="form-group col-md-6">
                            <label class="">Restaurant Address</label>
                            <div class="">
                                <input type="text" class="form-control" name="firstName" placeholder="Enter Restaurant Address" />
                            </div>
                        </div>
						<div class="form-group col-md-6">
                            <label class="">Restaurant Mobile Number</label>
                            <div class="">
                                <input type="text" class="form-control" name="firstName" placeholder="Restaurant Mobile Number" />
                            </div>
                        </div>

                       
                        <div class="form-group col-md-12">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Sign up</button>
                              
                            </div>
                        </div>
                        </div>
                    </form>
			</div>
			
			<?php include('../include/footer.php'); ?>
		</div>
	</div>
	<?php include('../include/script.php'); ?>
	<script src="http://localhost/form-valditions/dist/js/bootstrapValidator.js"></script>
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