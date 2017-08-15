<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link href="jaraxus.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<script type="text/javascript" src="jaraxus.js"></script>
		<link rel="stylesheet" media="screen and (device-height: 600px)" />
		<title>Jaraxus</title>
</head>
<body>
<header class='row'>
	<div class='container div_header'>
<div class='container container_t_l'>
	<div class='div_title'>
		<h2>Jaraxus</h2>
		<h4>
			L'apprentissage par l'amusement.
		</h4>
	</div>
		<div class='container div_logon'>
		<div class='container div_container_logon'>
		<div class='container col-4 div_username'>
			<input type="text" name="email_username" class="email_username" placeholder="Identifiant">	
		</div>
		<div class='container col-4 div_pwd'>
			<input type="password" name="user_password" class="user_password" placeholder="Mot de passe">
		</div>
		<div class='container col-4 div_valid'>
		<div class='div_bg_valid'>
		<div class='div_abs_bg_valid'></div>
			<input type="button" name="valid_logon" class='valid_logon' value="Go !">
			</div>
		</div>
		</div>
	</div>
</div>
	</div>
</header>
<div class='big_container'>
<!--<div class='container div_slider'>
	<div class='div_container_slider container'>

	</div>
</div>-->
<div class='div_all_index'>
<div class='div_main_tabs'>
	<div class='div_container_tabs row'>
		<div class='col-4 div_first_tab div_tabs'>
		<div class='div_content_tabs'>
			<h2 class='div_title_tabs div_title_first_tab'>
				Les cours
			</h2>
			<p>
				Une sélection de cours interactifs appropriés au niveau de chacun. Venez découvrir la richesse d'une séance d'apprentissage
				en groupe.	
			</p>
			</div>
		</div>
		<div class='col-4 div_second_tab div_tabs'>
			<div class='div_content_tabs'>
			<h2 class='div_title_tabs div_title_second_tab'>
				Les activités
			</h2>
			<p>
				Une sélection d'activités aussi riches les unes que les autres. Ici, vous avez la garantie d'être rassasié au niveau de l'adrénaline. Sans oublier les bienfaits que l'apprentissage par la dépense d'énergie apporte !
			</p>
			</div>
		</div>
		<div class='col-4 div_third_tab div_tabs'>
		<div class='div_content_tabs'>
			<h2 class='div_title_tabs div_title_third_tab'>
				Les programmes
			</h2>
			<p>
				Nous vous proposons ici une sélection de programme diversifiés. Si l'apprentissage occupe une grande partie de notre pédagogie, nous n'oublions pas non plus les bénéfices de la diversité culturelle.
			</p>
			</div>
		</div>
	</div>
</div>
<div class='div_main_index'>
	<div class='row div_index'>
		<div class='col-6 div_first_part'>

		</div>
		<div class='col-1'></div>
		<div class='col-5 div_second_part'>
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

		<div class='div_bg_valid div_valid'>
		<div class='div_abs_bg_valid'></div>
			<input type="button" name="valid_logon" class='valid_logon' value="Go !">
			</div>
					<input type='hidden' name='user_hidden'>
				</form>
			</div>
					<p class='termsofuse'>
						En appuyant sur "Go !" vous acceptez les termes et conditions d'utilisation du site.
					</p>
		</div>
	</div>
</div>
</div>
</div>
<footer class='div_footer'>

</footer>
</body>
