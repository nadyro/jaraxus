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
	<div class='container div_logon' style="display: none;">
		<div class='container div_container_logon'>
		<form id='form_connect' class='form_connect' method="POST" enctype="multipart/form-data">
			<div class="form-group div_user_login">
			<label for="user_login" class="col-sm-2 col-form-label">
						Identifiant
					</label>
					<input type="text" name="user_login" class="form-control user_login" placeholder="Identifiant">
			</div>
			<div class="form-group div_user_pwd">
			<label for="user_pwd" class="col-sm-2 col-form-label">
						Mot de passe
					</label>
					<input type="password" name="user_pwd" class="form-control user_pwd" placeholder="Mot de passe">
			</div>
			<button type="submit" class="btn btn-primary user_login_submit">Go !</button>
		</form>
		</div>
	</div>
	<div class='container div_user'>
		<div class='row'>
		<div class='col-4 div_user_infos'>
		<div class='user_infos'>
		<h4>
			Profil
		</h4>
		<div class='row user_pp'>
		<div class='col-3'></div>
		<div class='col-6'>
			<img src="avtr.png" class='pp img-fluid' alt='Nadir Sehnoun'>
		</div>
		<div class='col-3'></div>
		</div>
		<div class='container user_other_infos'>
		<div class='infos_user_name'>
			<p>
				Nadir Sehnoun
			</p>
		</div>
		<div class='infos_user_age'>
		<p>
			24 ans
		</p>
		</div>
		<div class='infos_user_country'>
		<p>
			France
		</p>
		</div>
		</div>
		</div>
		</div>
		<div class='col-8 div_user_activity'>
		<div class='row user_activity'>

			<div class='col-6 user_next_courses'>
			<div class='container div_user_next_courses'>
			<h5>
				Cours à venir
			</h5>
			<div class='user_course'>
			<p>
				Jeudi 24 Août à 16:00
			</p>
			<p>
				Cours de soutien en Histoire
			</p>
			</div>
			<div class='user_course'>
			<p>
				Lundi 28 Août à 17:30
			</p>
			<p>
				Classe de conjugaison
			</p>
			</div>
			<div class='user_course'>
			<p>
				Mercredi 6 Septembre à 14:00
			</p>
			<p>
				Match de foot
			</p>
			</div>
			</div>
			</div>
			<div class='col-6 div_user_history'>
				<div class='container user_history'>
			<h5>
				Parcours
			</h5>
			<div class='container_user_course_history'>
				<div class='user_course_history user_course_name histoire'>
					<p>
					Histoire
					</p>
				</div>
				<div class='user_course_history user_course_name francais'>
					<p>
					Français
					</p>
				</div>
				<div class='user_course_history user_course_name conjugaison'>
					<p>
					Conjugaison
					</p>
				</div>
				</div>
				<div class='row h-25'>
				<div class='col-2'>
					<div class='col-4'>
					<p>10</p>
					</div>
					<div class='col-4'>
					<p>5</p>
					</div>
					<div class='col-4'>
					<p>0</p>
					</div>
				</div>
				<div class='row col-10 align-items-end container_user_progress'>
				<div class='col-4 h-50 oldest_course'>
				<div class='h-100 container_oldest_course'>
					<p class='date_course'>Je 24 Aoû</p>
				</div>
				</div>
				<div class='col-4 intermediate_course'>
				<div class='h-100 container_intermediate_course'>
					<p class='date_course'>Lu 28 Aoû</p>
				</div>
				</div>
				<div class='col-4 h-100 newest_course'>
				<div class='h-100 container_newest_course'>
					<p class='date_course'>Me 6 Sept</p>
				</div>
				</div>
				</div>
				</div>
				</div>
			</div>
		</div>
		</div>
		</div>
		</div>
	</div>
	</div>
</header>
<div class='big_container'>
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
	<div class='container div_register_courses'>
	
	<form id="form_register_courses" class='row form_register_courses' method="POST" enctype="multipart/form-data">
	<div class='container row content_form_register_courses'>
	<div class='col-6 div_type_course'>
	<h5>
		Nature de la réservation
	</h5>
	<div class='form-check check_courses'>
	<label class='form-check-label'>
		<input type='checkbox' class='form-check-input' name='activity_course'>
		Activité
	</label>
	</div>
	<div class='form-check check_courses'>
	<label class='form-check-label'>
		<input type='checkbox' class='form-check-input' name='course_course'>
		Cours
	</label>
	</div>
	</div>
	<div class='col-6 div_nbp_course'>
	<h5>
		Nombre de personnes
	</h5>
	<fieldset class="form-group fieldset_nbp_course">
					<div class="col-sm-12 nbp_course">
						<div class="form-check check_1p">
							<label class="form-check-label label_check_1p">
							<input type="radio" class="form-check-input 1_p" name="1_p" id="1_p" value="1">
							1								
							</label>
						</div>
						<div class="form-check check_2p">
							<label class="form-check-label label_check_2p">
							<input type="radio" class="form-check-input 2_p" name="2_p" id="2_p" value="2">
							2							
							</label>
						</div>
						<div class="form-check check_3p">
							<label class="form-check-label label_check_3p">
							<input type="radio" class="form-check-input 3_p" name="3_p" id="3_p" value="3">
							3								
							</label>
						</div>
						<div class="form-check check_4pp">
							<label class="form-check-label label_check_4pp">
							<input type="radio" class="form-check-input 4p_p" name="4p_p" id="4p_p" value="4">
							4								
							</label>
							<label for='details_nbp_4p'>
								Si plus de 4 personnes, précisez le nombre
							</label>
							<input type='text' name="details_nbp_4p" class='details_nbp_4p'>
						</div>
					</div>
				</fieldset>
	</div>
	</div>
	<div class='container container_table_planning'>
	<table class="table table-inverse table_planning">
		<thead>
			<tr>
				<th class='table_void'></th>
				<th>Lundi</th>
				<th>Mardi</th>
				<th>Mercredi</th>
				<th>Jeudi</th>
				<th>Vendredi</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">8:00</th>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
			</tr>
			<tr>
				<th scope="row">9:00</th>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
			</tr>
			<tr>
				<th scope="row">10:00</th>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
			</tr>
			<tr>
				<th scope="row">11:00</th>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
			</tr>
			<tr>
				<th scope="row">12:00</th>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
			</tr>
			<tr>
				<th scope="row">13:00</th>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
			</tr>
			<tr>
				<th scope="row">14:00</th>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
			</tr>
			<tr>
				<th scope="row">14:00</th>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
			</tr>
			<tr>
				<th scope="row">15:00</th>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
			</tr>
			<tr>
				<th scope="row">16:00</th>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
			</tr>
			<tr>
				<th scope="row">17:00</th>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
			</tr>
			<tr>
				<th scope="row">18:00</th>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
				<td class="table_void"></td>
			</tr>
		</tbody>
	</table>
	</div>
	<div class="form-group row">
				<div class="col-sm-10 div_user_submit">
				<button type="submit" class="btn btn-primary submit_courses">Go !</button>
				</div>
				</div>
	</form>
	</div>
		<div class='col-6 div_first_part' style="display: none;">

		</div>
		<div class='col-1' style="display: none;"></div>
		<div class='col-5 div_second_part' style="display: none;">
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
