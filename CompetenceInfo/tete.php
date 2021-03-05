<?php //session_start(); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
	<head>
		<title>Jean-Baptiste SEVESTRE</title>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Ccomptable" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link  rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
		<link  rel="stylesheet" type="text/css" href="../css/style.css" />
	</head>

<body>
	<header>
		<!-- Pour menu Bootstrap -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
		crossorigin="anonymous"></script>

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" 
		integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" 
		crossorigin="anonymous"></script>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" 
		integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" 
		crossorigin="anonymous"></script>		

		<script> /* Script pour l'adaptation des navigateurs au téléchargement */
			if ( ! Modernizr.adownload ) {
				var $link = $('a');
				$link.each(function() {
					var $download = $(this).attr('download');
				
					if (typeof $download !== typeof undefined && $download !== false) {
						var $el = $('<div>').addClass('download-instruction').text('Right-click and select "Download Linked File"');
						$el.insertAfter($(this));
					}
				});
			}
		</script>

		<script src="https://kit.fontawesome.com/26d4a64054.js" crossorigin="anonymous"></script>

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="../index.php"><b>Jean-Baptiste SEVESTRE</b></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="../index.php">Accueil</a>
				</li>
				<li class="nav-item dropdown active">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Menu
				</a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="../index.php#/arbre">Mon profil</a>
					<a class="dropdown-item" href="../Experiences/experiences.php">Mes expériences</a>
					<a class="dropdown-item" href="../CompetenceInfo/competenceInfo.php">Compétences informatiques</a>
					<a class="dropdown-item" href="../Formations/formations.php">Mes formations</a>
					<a class="dropdown-item" href="../LoisirsPassions/loisirsPassions.php">Loisirs et passions</a>
				</div>
				</li>
				<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="../contact.php">Me contacter</a>
				</li>
			</ul>
			<form class="d-flex">
				<input class="form-control me-2" type="search" placeholder="Recherche" style="color: black;" aria-label="Search">
				<button class="btn btn-outline-success" type="submit" style="color: white;">Rechercher</button>
			</form>
			</div>
		</div>
		</nav>
	</header>