<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link href="css/scrolling-nav.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../style.css">
	</script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<?php include('menu.php'); ?>
	<div class="container">
        <br><br><br><br><br><br>
				<h3>Connexion</h3>
				<div class="col-md-6 col-md-offset-3">
					<?php if (validation_errors()) : ?> 
						<div class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<?php echo validation_errors(); ?>
						</div>
					<?php endif; ?>
					<?php echo form_open('verifylogin'); ?>
					<form>
						<div class="form-group">
							<label for="connexion">Connexion</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></div>
								<input type="text" class="form-control" id="username" name="username" placeholder="login">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-lock fa-fw" aria-hidden="true"></i></div>
								<input type="password" class="form-control" id="passowrd" name="password" placeholder="password">
							</div>
							<a href="#">Mot de passe oublié ?</a>
						</div>
						<button type="submit" class="btn btn-success" value="Login"><i class="fa fa-sign-in" aria-hidden="true"></i> Connexion</button>
						<button type="reset" class="btn btn-warning"><i class="fa fa-repeat" aria-hidden="true"></i> Reset</button>
					</form>
				</div>

    </div>
	<!-- JQuery -->
	<script src="js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Scrolling Nav JavaScript -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/scrolling-nav.js"></script>
</body>

</html>