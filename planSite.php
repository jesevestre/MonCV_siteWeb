<?php require('tete.php'); ?>

<!-- CLASSE PROVENANT DE LA LIBRAIRIE DISTANTE BOOTSTRAP ET DE style.css-->
<div class="container">


    <h1>Plan du site</h1>

        <p>
			<h4 class="TitrePlanSite"><a href="index.php" style="color: #343a40;">Accueil</a></h4>
		</p>
		<p>
			<h4 class="TitrePlanSite"><a href="FicheContact.php" style="color: #343a40;">Me contacter</a></h4>
		</p>
		<p>
			<h4 class="TitrePlanSite"><a href="index.php#/arbre" style="color: #343a40;">Mon profil</a>
		</p>
		<p>
			<h4 class="TitrePlanSite"><a style="color: #343a40;">Mes expériences</a></h4>
				<ul class="PlanSiteSub">
					<li><a href="Experiences/experiences.php">Professionnelle</a></li>
					<li><a href="Experiences/experiences.php#stage">Stages</a></li>
					<li><a href="Experiences/experiences.php#projet">Projets</a></li>
				</ul>
		</p>
		<p>
			<h4 class="TitrePlanSite"><a style="color: #343a40;">Compétences informatiques</a></h4>
				<ul class="PlanSiteSub">
					<li><a href="CompetenceInfo/competenceInfo.php">Environement et logiciel</a></li>
					<li><a href="CompetenceInfo/competenceInfo.php#prog">Programmation</a></li>
				</ul>
		</p>
		<p>
			<h4 class="TitrePlanSite"><a style="color: #343a40;">Mes formations</a></h4>
				<ul class="PlanSiteSub">
					<li><a href="Formations/formations.php">Master MIASHS</a></li>
					<li><a href="Formations/formations.php">Licence TNAP</a></li>
					<li><a href="Formations/formations.php">IUT GEII</a></li>
					<li><a href="Formations/formations.php">Baccalauréat STI2D</a></li>
				</ul>
		</p>
		<p>
			<h4 class="TitrePlanSite"><a style="color: #343a40;">Loisirs et passions</a></h4>
				<ul class="PlanSiteSub">
					<li><a href="LoisirsPassions/loisirsPassions.php">Bénévolat</a></li>
					<li><a href="LoisirsPassions/loisirsPassions.php#sport">Sport</a></li>
					<li><a href="LoisirsPassions/loisirsPassions.php#autre">autre</a></li>
				</ul>
		</p>

</div>

<?php require('pied.php'); ?>