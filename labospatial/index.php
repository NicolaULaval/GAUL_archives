<?php

	// Définit l'Id de la page d'accueil (1 dans cet exemple)
	$id_page_accueil = "accueil";
	
	// Récupère l'id de la page courante passée par l'URL
	// Si non défini, on considère que la page est la page d'accueil
	if (isset($_GET['page'])) {
		$_ENV['page'] = $_GET['page'];
	} else {
		$_ENV['page'] = $id_page_accueil;
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laboratoire Spatial</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="mainPan"><!--main pan start -->
<div id="headerPan"><!--header start -->
<div id="leftPan"><!--left pan start -->
<ul>
<li><a href="index.php" class="home" title="accueil">accueil</a></li>
<li><a href="index.php?page=apropos" class="user" title="a propos">&agrave; propos</a></li>
<li><a href="index.php?page=contacter" class="email" title="contact">contact</a></li>
</ul>
<ul class="new">
<li><a href="index.php?page=infos">Infos</a></li>
<li><a href="index.php?page=reglements">R&egrave;gles</a></li>
</ul>
</div><!--left pan end -->
<div id="middlePan" valign="middle" align="center"><br /><br /><br /><br /><br /><img src="images/logolabo.jpg" /><!--middle start -->
</div>
<!--middle emd -->
<div id="right"><!--right side start -->
<ul>
<li><a>PLT-2126</a></li>
</ul>
<ul class="solu">
<li><a href="index.php?page=formulaires">Guides</a>&nbsp;</li>
<li><a href="index.php?page=aide">Aide</a></li>
</ul>
</div><!--right side end -->
</div><!--header end -->
<div id="body1"><!--body start -->
<div id="body_leftbg"><!--left side start-->
<h2>dates</h2>
<h3>1<sup>er</sup> nov. 200X</h3>
<p>Lancement du concours. Visite dans les écoles</p>
<a href="index.php?page=01110X">+ plus</a>
<h3>15 jan. 200X</h3>
<p>Suivi du d&eacute;veloppement chez les participants. Appels de courtoisie</p>
<!--<a href="index.php?page=15010X">+ plus</a>-->
<h3>1<sup>er</sup> mars 200X</h3>
<p>Toutes les candidatures doivent &ecirc;tre soumises pour 12h00 AM</p>
<!--<a href="index.php?page=01030X">+ plus</a>-->
<!--<h3>24th may 2006</h3>
<p>sit amet libero. Ut ipsum libero scelerisque sed elementum necbibendum</p>
<a href="#">....read more</a>-->
</div><!--left side end -->
<div id="body_middle"><!--body middle start -->
<?php

	if ($_ENV['page'] == "accueil"){
		include "accueil.php";
	}
	elseif ($_ENV['page'] == "apropos"){
		include "about.php";
	}
	elseif ($_ENV['page'] == "contacter"){
		include "contacter.php";
	}
	elseif ($_ENV['page'] == "infos"){
		include "infos.php";
	}
	elseif ($_ENV['page'] == "reglements"){
		include "regles.php";
	}
	elseif ($_ENV['page'] == "formulaires"){
		include "guides.php";
	}
	elseif ($_ENV['page'] == "aide"){
		include "aide.php";
	}
	elseif ($_ENV['page'] == "01110X"){
		include "011107.php";
	}
	elseif ($_ENV['page'] == "15010X"){
		include "150108.php";
	}
	elseif ($_ENV['page'] == "01030X"){
		include "01030X.php";
	}

?>

</div><!--body middle end -->
<div id="right_bg"><!--right side start-->
<h2>liens</h2>
<h3>sites pratiques</h3>
<ul>
<li><a href="http://fr.wikipedia.org/wiki/">Wikip&eacute;dia</a></li>
<li><a href="http://www.boiteasciences.com/">Bo&icirc;te &agrave; Sciences</a></li>
<li><a href="http://web-gaul.gel.ulaval.ca/wiki/">Wiki GAUL</a></li>
</ul>
<br />
<h3>commanditaires</h3>
<ul>
<li><a href="index.php?page=aide">En recherche!</a></li>
<li><a href="index.php?page=aide">Plus!</a></li>
</ul>
</div><!--right side end -->
</div><!--body end -->
</div><!--main pan end -->
<div id="project"><!--project start -->
 <h2>projets</h2>
 <ul>
 <li><a href="http://web-gaul.gel.ulaval.ca/wiki/index.php?title=Ouranos"><img src="images/pic.jpg" alt="Ouranos" width="48" height="43" border="0" title="pic" /></a></li>
 <li><a href="http://web-gaul.gel.ulaval.ca/wiki/index.php?title=Babylone_II"><img src="images/pic1.jpg" alt="Babylone II" width="48" height="43" border="0" title="pic1" /></a></li>
 <li><a href="http://web-gaul.gel.ulaval.ca/wiki/index.php?title=Taranis"><img src="images/pic2.jpg" alt="Taranis" width="48" height="43" border="0" title="pic2" /></a></li>
 <li><a href="http://web-gaul.gel.ulaval.ca/wiki/index.php?title=Copernic"><img src="images/pic3.jpg" alt="Copernic" width="48" height="43" border="0" title="pic3" /></a></li>
 <li><a href="http://web-gaul.gel.ulaval.ca/wiki/index.php?title=Magellan"><img src="images/pic4.jpg" alt="Magellan" width="48" height="43" border="0" title="pic4" /></a></li>
 <li><a href="http://web-gaul.gel.ulaval.ca/wiki/index.php?title=Liste_des_projets"><img src="images/pic5.jpg" alt="pic5" width="48" height="43" border="0" title="pic5" /></a></li>
 </ul>
 <ul class="next">
 <!--<li> &lt;<a href="#">previous</a></li>-->
 <li><a href="http://web-gaul.gel.ulaval.ca/wiki/index.php?title=Ouranos">Ouranos</a>|</li>
 <li><a href="http://web-gaul.gel.ulaval.ca/wiki/index.php?title=Babylone_II">Babylone II</a>|</li>
 <li><a href="http://web-gaul.gel.ulaval.ca/wiki/index.php?title=Taranis">Taranis</a>|</li>
 <li><a href="http://web-gaul.gel.ulaval.ca/wiki/index.php?title=Copernic">Copernic</a>|</li>
 <li><a href="http://web-gaul.gel.ulaval.ca/wiki/index.php?title=Magellan">Magellan</a>|</li>
 <li><a href="http://web-gaul.gel.ulaval.ca/wiki/index.php?title=Liste_des_projets">Plus...</a></li>
 <!--<li><a href="#">next</a>&gt;</li>-->
 </ul>
</div><!--project end -->
<div id="footer"> <!--footer start -->
<ul>
<li><a href="#">&Agrave; Propos</a>|</li>
<li><a href="#">Infos</a>|</li>
<li><a href="#">R&egrave;glements</a>|</li>
<li><a href="#">Formulaires</a>|</li>
<li><a href="#">Aide</a>|</li>
<li><a href="#">Contacter</a></li>
</ul>
<ul class="ad">
<li><a class="add">G&eacute;nie m&eacute;canique
<br />
Adrien-Pouliot, #48<br />
Ste-Foy QC  G1K 7P4</a></li>
<!--<li><a class="add"><span>@:</span><br />
<br /></a></li>-->
<li class="li1"><a class="add"><span>fax:</span><br />
(418) 656-7415 <br />
gaul@gel.ulaval.ca</a></li>
</ul>
<p><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&copy; GAUL 2007-2009.</p>
</div><!--footer end -->
</body>
</html>
