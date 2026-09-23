{
<?php
	if (isset($_POST['nom'])) {
		if (($_POST['nom'] != '') && ($_POST['prenom'] != '') && ($_POST['email'] != '')) {
			$nom_invite = $_POST['nom'];
			$prenom_invite = $_POST['prenom'];
			$email_invite = $_POST['email'];
			$tel_invite = $_POST['cell'];
			$presence_invite = $_POST['presence'];
			$nbinvites = $_POST['nbinvitesgaul'];
			
//			$autresInvites[] = '';
//			for ($i = 0; $i < $nbinvites; $i++) {
//				$nom = '"invite'.$i.'_nom"';
//				$prenom = '"invite'.$i.'_prenom"';
//				$autresInvites[$i] = $_POST['invite1_nom'] .', '. $_POST[$prenom];
//			}

		// Script de marde fait vite vite pour que ça marche au plus vite!!
			if ($nbinvites >= 1) {
				$autresInvites[1] = $_POST['invite1_nom'] .', '. $_POST['invite1_prenom'];
			}
			if($nbinvites >= 2) {
				$autresInvites[2] = $_POST['invite2_nom'] .', '. $_POST['invite2_prenom'];
			}
			if($nbinvites >= 3) {
				$autresInvites[3] = $_POST['invite3_nom'] .', '. $_POST['invite3_prenom'];
			}
			if($nbinvites >= 4) {
				$autresInvites[4] = $_POST['invite4_nom'] .', '. $_POST['invite4_prenom'];
			}
			if($nbinvites >= 5) {
				$autresInvites[5] = $_POST['invite5_nom'] .', '. $_POST['invite5_prenom'];
			}
			if($nbinvites >= 6) {
				$autresInvites[6] = $_POST['invite6_nom'] .', '. $_POST['invite6_prenom'];
			}
			if($nbinvites >= 7) {
				$autresInvites[7] = $_POST['invite7_nom'] .', '. $_POST['invite7_prenom'];
			}
			if($nbinvites >= 8) {
				$autresInvites[8] = $_POST['invite8_nom'] .', '. $_POST['invite8_prenom'];
			}
			if($nbinvites >= 9) {
				$autresInvites[9] = $_POST['invite9_nom'] .', '. $_POST['invite9_prenom'];
			}
			if($nbinvites >= 10) {
				$autresInvites[10] = $_POST['invite10_nom'] .', '. $_POST['invite10_prenom'];
			}
			if($nbinvites >= 11) {
				$autresInvites[11] = $_POST['invit11_nom'] .', '. $_POST['invite11_prenom'];
			}
			if($nbinvites >= 12) {
				$autresInvites[12] = $_POST['invite12_nom'] .', '. $_POST['invite12_prenom'];
			}
			if($nbinvites >= 13) {
				$autresInvites[13] = $_POST['invite13_nom'] .', '. $_POST['invite13_prenom'];
			}
			if($nbinvites >= 14) {
				$autresInvites[14] = $_POST['invite14_nom'] .', '. $_POST['invite14_prenom'];
			}
			if($nbinvites >= 15) {
				$autresInvites[15] = $_POST['invite15_nom'] .', '. $_POST['invite15_prenom'];
			}
			
		// Setup email message
			$EmailString = "<h2>Merci de votre présence!</h2><br />";
			$EmailString .= "<b>Informations Personnelles:</b><br /><table style='font-Family:Arial; font-size:95%; color: #000;'>"; 
			$EmailString .= "<tr><td style='padding-left: 15px;'>Nom, Prenom : </td><td>$nom_invite, $prenom_invite</td></tr>";
			$EmailString .= "<tr><td style='padding-left: 15px;'>Courriel: </td><td>$email_invite</td></tr>" ;
			$EmailString .= "<tr><td style='padding-left: 15px;'>Téléphone: </td><td>$tel_invite</td></tr>";
			$EmailString .= "<tr><td style='padding-left: 15px;'>Nb. invites: </td><td>$nbinvites</td></tr>";
			if ($nbinvites > 0) {
				$EmailString .= "<tr><td colspan='2' style='padding-left: 15px;'><b>Infos invites :</b></td></tr>";
				for ($j = 1; $j <= $nbinvites; $j++) {
					$EmailString .= "<tr><td colspan='2' style='padding-left: 30px;'>$autresInvites[$j]</td></tr>";
				}
			}
			$EmailString .= "</table><br />";
			$EmailString .= "<p>Simple rappel, le lancement de la fusée Ouranos aura lieu le samedi 6 septembre 2008.</p>";
			
			
		// Email variables
			$mailObject = "Confirmation de présence pour ";
			$mailSuccess = "Le courriel de confirmation à bien été envoyé à ";
			$mailFailed = "Le courriel n'a pas pu être envoyé à ";
			
			$mail_to = "$email_invite";
			$mail_from = "pierre-olivier.nadeau.2@ulaval.ca";
			$mail_sub = "$mailObject $prenom_invite $nom_invite" ;
			$mail_mesg = $EmailString;
			
			$mail_mesg .= "<br />Pierre-Olivier Nadeau A/S GAUL<br>
					Courriel : <a href='mailto:pierre-olivier.nadeau.2@ulaval.ca'><i>pierre-olivier.nadeau.2@ulaval.ca</i></a><br />
					Site Web : <a href='http://web-gaul.gel.ulaval.ca'><i>http://web-gaul.gel.ulaval.ca</i></a><br />";

			$headers  = 'MIME-Version: 1.0' . "\r";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r";
			$headers .= 'From: Groupe Aérospatial de Université Laval <pierre-olivier.nadeau.2@ulaval.ca>' . "\r";
			
		// Do the rest of the message
			$mail_mesg = "<html><body>" . $mail_mesg . "</body></html>";

			//Check for success/failure of delivery
			if (mail($mail_to . ", steven.gamache.1@ulaval.ca, nadeau.pierrot@gmail.com",$mail_sub,$mail_mesg,$headers)) {
				echo "success: true,";
				echo "confirm: '". $mailSuccess . $mail_to ."',";
				echo "message: '". addslashes($EmailString) ."'";
			} else {
				echo "success: false,";
				echo "confirm: '". $mailFailed . $mail_to ."',";
				echo "message: 'Vérifiez votre adresse courriel et ré-essayez plus tard.'";
			}
		}
	} else {
			echo "success: false,";
			echo "confirm: '". $mailFailed . $mail_to ."',";
			echo "message: 'Vérifiez que vous avez bien rempli tous les champs.'";
	}
?>
}