<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" href="../css/login.css"/>

<link rel="stylesheet" type="text/css" href="css/index.css"/>
<link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"  rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</head>
<body>
	<div id= "container">
	<div class="wrapper">
		<form action="pages/authentification.php" method="post" name="Login_Form" class="form-signin">
		    <h3 class="form-signin-heading">Quizz</h3>
			  <hr class="colorgraph"><br>

			  <input type="text" class="form-control" name="Username" placeholder="Username" required autofocus >
			  <input type="password" class="form-control" name="Password" placeholder="Password" required >



			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>
		</form>
	</div>
</div>
</body>
</html>
