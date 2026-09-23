function modifierSourceImage(objetImageAModifier, sourceImage)
{
 objetImageAModifier.src = sourceImage

 return true
}

//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------

function ouvrirFenetre(url, largeur, hauteur)
	{
	var coordX = (screen.width / 2) - (690 / 2);
	var coordY = (screen.height / 2) - (388 / 2);
	
	fenetre = window.open(url,"","width="+largeur+",height="+hauteur+",left="+coordX+",top="+coordY);
	}

//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------

function modifierPhoto(photoAChanger, action, srcImage, total_image)
{
 var srcPhoto = null

 if (action == "reculer")
	{
	 modifierCompteur("soustraire", total_image)
	}
 else
	{
 	 modifierCompteur("ajouter", total_image)
	}

 srcPhoto = srcImage + document.unFormulaire.h_compteur.value + ".jpg"
 photoAChanger.src = srcPhoto
}

//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------

function modifierCompteur(actionCompteur, total_img)
{
 var leCompteur = null

 leCompteur = document.unFormulaire.h_compteur.value

 if (actionCompteur == "soustraire")
	{
	 if(document.unFormulaire.h_compteur.value == 1)
		{
		 leCompteur = parseInt(total_img)
		}
	 else
		{
		 leCompteur = parseInt(leCompteur) - 1
		}
	}     
 else
	{
	 if(document.unFormulaire.h_compteur.value == total_img)
		{
		 leCompteur = 1
		}
	 else
		{
		 leCompteur = parseInt(leCompteur) + 1
		}
	}

document.unFormulaire.h_compteur.value = leCompteur
}