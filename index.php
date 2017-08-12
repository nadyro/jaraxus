<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link href="jaraxus.css" rel="stylesheet" />
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<script type="text/javascript" src="jaraxus.js"></script>
		<link rel="stylesheet" media="screen and (device-height: 600px)" />
		<title>Jaraxus</title>
</head>
<body>
<header>
	<div class='col-12 div_header'>
<div class='col-4'></div>
<div class='col-4 container_t_l'>
	<div class='col-5 div_title'>
		<h2>Jaraxus</h2>
	</div>
		<div class='col-5 div_logon'>
		<div class='col-8 div_container_logon'>
		<div class='div_username'>
			<input type="text" name="email_username" class="email_username" placeholder="Identifiant">	
		</div>
		<div class='div_pwd'>
			<input type="password" name="user_password" class="user_password" placeholder="Mot de passe">
		</div>
		</div>
		<div class='col-4 div_valid'>
			<button name="valid_logon" class='valid_logon'> Go ! </button>
		</div>
	</div></div>
<div class='col-4'></div>
	</div>
</header>
<div class='container div_main_index'>
	<div class='row div_index'>
		<div class='col-6 div_first_part'>

		</div>
		<div class='col-6 div_second_part'>
		<h2>
			Créez votre compte et débutez votre aventure !
		</h2>
			<div class='container div_container_sp'>
				<form id="form_register" class='form_register' method="POST" enctype="multipart/form-data">
					<input type="text" name="user_name" placeholder="Prénom">
					<input type="text" name="user_surname" placeholder="Nom">
					<input type="text" name="user_email" placeholder="Adresse Email">
					<input type="password" name="user_password" placeholder="Mot de passe">
					<input type="text" name="user_birthday" placeholder="Date de naissance (01/01/1970)">
					<div class='div_user_sex'>
					<span class='user_sex'>
					<input type="radio" id="0" name="sexe" value="0"> <p> Homme </p>
					</span>
					<span class='user_sex'>
					<input type="radio" id="1" name="sexe" value="1"> <p> Femme </p>
					</span>
					</div>
					<input type="button" value="Go !" name='user_submit' onclick="receive()">
					<input type='hidden' name='user_hidden'>
				</form>
			</div>
					<p class='termsofuse'>
						En appuyant sur "Go !" vous acceptez les termes et conditions d'utilisation du site.
					</p>
		</div>
	</div>
</div>
<footer class='div_footer'>

</footer>
</body>
