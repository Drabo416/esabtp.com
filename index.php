<?php
$monfichier = fopen('compteur.txt', 'r+');
 
$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
 
fclose($monfichier);
 
echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Site officiel ESABTP SARL</title>
	<meta charset="utf-8">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&family=Playfair+Display:wght@600&family=Sansita+Swashed:wght@300&family=Secular+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arimo&family=Fira+Sans+Extra+Condensed:ital,wght@1,600&family=Patua+One&family=Volkhov:ital@1&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style_mobile.css">
</head>
<body>
<div class="barre_titre">
	<img src="navigation.png" class="navigation">
	<span>EABTP SARL</span>
</div>
<div class="conteneur_transparent">
	<div class="titre menu_barre">
	<nav>
	<img src="IMG-20201029-WA0020.jpg" class="logo">
	<span class="nom">EABTP SARL</span>
	<div><span class="menu"><a href="#acceuil">Acceuil</a></span></div>
	<div><span class="menu"><a href="#a_propos">A propos</a></span></div>
	<div><span class="menu"><a href="#service">Services</a></span></div>
	<div><span class="menu"><a href="#contact">Contact</a></span></div>
	
	</nav>
</div>
</div>
<div class="image_font" id="acceuil">
<div class="texte_titre"><i><span>ENTREPRISE D'ACHITECTURE DES BATÎMENTS <br>ET TRAVAUX PUBLIQUES SARL(EABTP SARL)</span></i></div>
<div class="description"><span>Notre expertise, Le respect des délais et nos valeurs sont nos atouts</span></div>
</div>
<div class="barre">
	<span>Pour un avenir meilleur, construisons l'Afrique ensemble !</span>
</div>
<section>
	<div class="contenu">
		<span class="titre">Achitecture</span>
		<img src="662-6624981_building-icon-architecture-hd-png-download.png" class="image_contenu">
	</div>
	<div class="contenu">
		<span class="titre">Contruction</span>
		<img src="4596987_safety-construction-icon-hd-png-download.png">
	</div>
	<div class="contenu">
		<span class="titre">Rénovation</span>
		<img src="home-renovation-icons-vector.jpg">
	</div>
	<div class="contenu">
		<span class="titre">Electricité</span>
		<img src="icon-electricite.png">
	</div>
	<div class="contenu">
		<span class="titre">Plomberie</span>
		<img src="Icon-tool-2.png">
	</div>
</section>
<div class="texte_contenu" id="a_propos">
	<span>
		L’entreprise d’architecture des bâtiments et des travaux publics (EABTP SARL) est une entreprise créée
		par des anciens étudiants sortis de l’INPHB et de L’ESBTP de yamoussoukro elle a pour bute d’ameliorer
		les conditions de vie de la population de la population ;En construissant les logements qui respectent toutes les normes de construction en vue de lutter contre le phénomène de l'écroulement des maisons.
	</span>
</div>
<div class="services" id='service'>
	<div class="services_contenu" data-aos="zoom-in-down">
		<div class="titre_service_contenu"><span >Conception de plan 2D ET 3D</span></div>
	<img src="téléchargement (1).jpg">
	<div class="texte-service-contenu">
		<span class="texte"> Des experts en architecture et en ingénierie pour traduire vos rêve en réalité peu importe le type de maison souhaité.</span>
	</div>
	</div>
	<div class="services_contenu" data-aos="zoom-in-down">
		<div class="titre_service_contenu"><span >Devis </span></div>
	<img src="construction background.jpg">
	<div class="texte-service-contenu">
		<span class="texte">Des mettreurs de qualité pour vos différents devis: maçonnerie, Plomberie, peinture, électricité, carrelage et menuiserie...</span>
	</div>
	</div>	
	<div class="services_contenu" data-aos="zoom-in-down">
		<div class="titre_service_contenu"><span >Renovation et modification de plan </span></div>
	<img src="ce-drole-de-rapport-qui-plaide-en-faveur-de-la-renovation-de-logements-contre-la-construction-1358954.jpg">
	<div class="texte-service-contenu">
		<span class="texte">Changer l’aspect de votre maison à tout moment avec des maçons et férrailleurs qualifiés sortis des
		écoles de formation.</span>
	</div>
	</div>
	<div class="services_contenu" data-aos="zoom-in-down">
		<div class="titre_service_contenu"><span >Plomberie et electricite </span></div>
	<img src="Des_professionnels_en_raccordement_plombier_st_hyacynte.jpg">
	<div class="texte-service-contenu">
		<span class="texte">Avec le plan d’électricité et de plomberie conçu par l’architecte nos plombiers et électriciens
		experimentés réaliseront tous les travaux.</span>
	</div>
	</div>
	<div class="services_contenu" data-aos="zoom-in-down">
		<div class="titre_service_contenu"><span >Construction de route </span></div>
	<img src="téléchargement (2).jpg">
	<div class="texte-service-contenu">
		<span class="texte">
			Des ingenieurs en travaux publics à la disposition pour des travaux routiers.
		</span>
	</div>
	</div>
	<div class="services_contenu" data-aos="zoom-in-down">
		<div class="titre_service_contenu"><span >Lotissement de terrain </span></div>
	<img src="photo-teerrains-bingerville-512x300.jpg">
	<div class="texte-service-contenu">
		<span class="texte">Avec des géomètres et urbanistes qualifiés sortis de l’ESBTP yakro pour tout travaux de lotissement.</span>
	</div>
	</div>
	<div class="services_contenu" data-aos="zoom-in-down">
		<div class="titre_service_contenu"><span >Location et vente de maison et terrain </span></div>
	<img src="téléchargement (3).jpg">
	<div class="texte-service-contenu">
		<span class="texte">En partenariat avec des agences immobilières pour vous donner une maison qui respecte les normes de
construction et un terrain bien situé dans votre localité.</span>
	</div>
	</div>
	<div class="services_contenu" data-aos="zoom-in-down">
		<div class="titre_service_contenu"><span >Travaux de construction genie civil </span></div>
	<img src="gc-1.jpg">
	<div class="texte-service-contenu">
		<span class="texte">Des techniciens superieurs pour le suivi des travaux de construction du debut a la remise des clefs a main.</span>
	</div>
	</div>
</div>

<div class="realisation">
	<div class="realisation-texte"><span>Nos réalisations</span></div>
	<div class="img">
	<img data-aos="flip-left" class="image1" src="IMG-20201002-WA0039.jpg">
	<img data-aos="flip-left" class="image2" src="IMG-20200922-WA0000.jpg">
	<img data-aos="flip-left" class="image3" src="IMG-20201002-WA0044.jpg">
	<img data-aos="flip-left" class="image4" src="IMG-20201002-WA0045.jpg">
	<img data-aos="flip-left" class="image5" src="IMG-20201002-WA0046.jpg">
	<img data-aos="flip-left" class="image6" src="IMG-20201002-WA0047.jpg">
	<img data-aos="flip-left" class="image6" src="IMG-20201022-WA0015.jpg">
	<img data-aos="flip-left" class="image6" src="IMG-20201022-WA0016.jpg">
	</div>
	</div>
</div>
<footer id="contact">
	<div class="element1">
		<div class="localisation">
			<span>LOCALISATIONS</span>
		</div>
		<div class="texte_localisation">
			<span>Yamoussoukro Quartier Fondation<br><br>Abidjan<br></span>
		</div>
	</div>
	<div class="element2">
		<div class="contact">CONTACTS</div>
		<div class="image_contact">
			<a href="mailto:eabtps@gmail.com">
				<img src="gmail.png">
			</a>
			<a href="http://api.whatsapp.com/send?phone=22578625718">
				<img src="whattsapp.png">
			</a>
			<a href="https://www.facebook.com/eabtps">
				<img src="facebook.png">
			</a>
		</div>
		<div class="numero">
			<span>+225 78 62 57 18</span>
			<span>+225 03 94 42 75</span><span> +228 91 45 71 62</span>
		</div>
	</div>
	<div class="element3">
		<p class="rights-text">© 2020 Created By EABTP SARL
 All Rights Reserved.</p>
	</div>
</footer>
</body>
<script type="text/javascript" src="jquery.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">
	AOS.init(
	{
		duration:1200,
	}
		);
	var i=0;
	var navigation=document.querySelector('.navigation');
	var menu = document.querySelector('.conteneur_transparent');
		menu.addEventListener('click', function(){
		if (i==1){
			menu.style.display='none';
		}
	})
	navigation.addEventListener('click', function(){
		
		if(!(menu.style.display=='' || menu.style.display=='none'))
		{
			menu.style.display='none';
		}
		else{
			menu.style.display='flex';
			 i=1;
		}

	})
	
</script>
</html>