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

				<div class="form-group row div_username">
					<label for="user_name" class="col-sm-2 col-form-label">
						Nom
					</label>
					<div class="col-sm-10 div_input_username">
					<input type="text" name="user_name" class="form-control user_name" placeholder="Nom">
					</div>
				</div>
				<div class="form-group row div_user_surname">
					<label for="user_surname" class="col-sm-2 col-form-label">
						Prénom
					</label>
					<div class="col-sm-10 div_input_user_surname">
					<input type="text" name="user_surname" class="form-control user_surname" placeholder="Prénom">
					</div>
				</div>
				<div class="form-group row div_email">
					<label for="user_email" class="col-sm-2 col-form-label">
						Email
					</label>
					<div class="col-sm-10 div_input_user_email">
					<input type="text" name="user_email" class="form-control user_email" placeholder="Email">
					</div>
				</div>
				<div class="form-group row div_user_password">
					<label for="user_password" class="col-sm-2 col-form-label">
						Mot de passe
					</label>
					<div class="col-sm-10 div_input_user_password">
					<input type="password" name="user_password" class="form-control user_password" placeholder="Mot de passe">
					</div>
				</div>
				<div class="form-group row div_user_birthday">
					<label for="user_birthday" class="col-sm-2 col-form-label">
						Nom
					</label>
					<div class="col-sm-10 div_input_user_birthday">
					<input type="text" name="user_birthday" class="form-control user_birthday" placeholder="Date de naissance (01/01/1970)">
					</div>
				</div>
				<fieldset class="form-group fieldset_sex">
					<div class="row div_user_sex">
						<legend class="col-form-legend col-sm-2 legend_sex">
							Sexe
						</legend>
						<div class="col-sm-10 div_user_sex_h">
						<div class="form-check formcheck_user_sex">
							<label class="form-check-label label_user_sex_h">
							<input type="radio" class="form-check-input user_sex_h user_sex" name="user_sex" id="user_sex_h" value="0">
							Homme								
							</label>
						</div>
						<div class="form-check formcheck_user_sex">
							<label class="form-check-label label_user_sex_f">
							<input type="radio" class="form-check-input user_sex_f user_sex" name="user_sex" id="user_sex_f" value="1">
							Femme								
							</label>
						</div>
					</div>
				</fieldset>
				<div class="form-group row">
				<div class="col-sm-10 div_user_submit">
				<button type="submit" class="btn btn-primary user_submit">Go !</button>
				</div>
				</div>
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
