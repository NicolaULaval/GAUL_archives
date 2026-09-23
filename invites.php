<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?xml version="1.0" encoding="iso-8859-1"?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!-- Meta -->
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="Content-Language" content="fr-ca" />
	<meta name="description" content="Université Laval, Universite Laval, Québec, Quebec, vachon, pouliot, alexandre-vachon, fusée, aéronautique, spatial, RDDC étudier, étudiant" />
	<meta name="keywords" content="Université Laval - Centre de Service Desjardins-Pollack" />
	<title>GAUL - Confirmation de présence</title>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="./gaul.css" />
	<link rel="stylesheet" type="text/css" href="./links.css">
	<link rel="stylesheet" type="text/css" href=".js/ext/resources/css/ext-all.css" />
	<link rel="stylesheet" type="text/css" href=".js/ext/resources/css/xtheme-gray.css" />

	<!-- JS -->
	<script type="text/javascript" src="js/ext/adapter/ext/ext-base.js"></script>
	<script type="text/javascript" src="js/ext/ext-all.js"></script>

</head>
<body bgcolor="#C5D4E8" text="#000000">
	<table width="760" border="0" cellpadding="0" cellspacing="0">
	  <tr> 
	    <td width="760"><img src="images/header.gif" width="760" height="60" usemap="#Map" border="0"></td>
	  </tr>
	  <tr> 
	    <td height="24" valign="top"> 
	      <table width="100%" border="0" cellpadding="0" cellspacing="0" height="24">
	        <tr> 
	          <td width="102" height="21" align="center" background="buttons/nav.gif" nowrap><a class="box" href="projets.htm">&nbsp;<img src="buttons/fusee.gif" width="19" height="16" border="0" align="absmiddle" alt="projets"> 
	            projets&nbsp;</a></td>
	          <td width="111" align="center" background="buttons/nav.gif" nowrap><a class="box" href="membres.htm">&nbsp;<img src="buttons/membres.gif" width="12" height="12" border="0" alt="membres" align="absmiddle"> 
	            membres&nbsp;</a></td>
	          <td width="145" align="center" background="buttons/nav.gif" nowrap><a class="box" href="composantes.htm">&nbsp;<img src="buttons/gear.gif" width="17" height="17" border="0" alt="fus&eacute;e" align="absmiddle"> 
	            composantes&nbsp;</a></td>
	          <td width="164" align="center" background="buttons/nav.gif" nowrap><a class="box" href="commenditaires.htm">&nbsp;<img src="buttons/commanditaires.gif" width="14" height="14" border="0" alt="commanditaires" align="absmiddle"> 
	            commanditaires&nbsp;</a></td>
	          <td width="73" align="center" background="buttons/nav.gif" nowrap><a class="box" href="liens.htm">&nbsp;<img src="buttons/liens.gif" width="14" height="8" border="0" alt="liens" align="absmiddle"> 
	            liens&nbsp;</a></td>
	          <td width="165" align="center" background="buttons/nav.gif" nowrap><a class="box" href="contact.htm">&nbsp;<img src="buttons/mail.gif" width="19" height="16" border="0" alt="pour nous rejoindre" align="absmiddle"> 
	            contactez nous&nbsp;</a></td>
	        </tr>
	      </table>
	    </td>
	  </tr>
	  <tr> 
	    <td height="18" valign="top"><img src="buttons/linedown.gif" width="760" height="18"></td>
	  </tr>
	</table>
	<!-- #BeginEditable "body" --> 

	<div id="formulaire">
		<form name="form_gaul" id="form_gaul" action="merci.php" method="post">
			<h3>Cher invité,  </h3>
			<p style="width: 760px; text-align: justify;">Le GAUL vous invite à participer au lancement de la fusée Ouranos qui aura lieu le samedi 6 septembre 2008. Nous vous prions ainsi de remplir la liste qui suit afin de nous aviser si vous serez présent lors de cette journée. Dans l’affirmative, veuillez indiquer le nombre de personnes que vous souhaitez inviter avec vous sur le site du lancement. </p>
			<label>Nom :
				<input type="text" name="nom" id="nom" style="margin-left: 80px;" />
			</label>
			<br />
			<label>Prénom : 
				<input type="text" name="prenom" id="prenom" style="margin-left: 64px;" />
			</label>
			<br />
			<label>Courriel : 
				<input type="text" name="email" id="email" style="margin-left: 62px;" />
			</label>
			<br />
			<label>Téléphone : 
				<input type="text" name="cell" id="cell" style="margin-left: 48px;" />
			</label>
			<br />
			Je serai présent(e) au stationnement du Pouliot à 10h30 le samedi 6 septembre 2008 : 
			<label style="float: left;">
				<input type="radio" name="presence" id="presence_oui" value="oui" style="float: left;"></input>
			</label>
			<label>
				<input type="radio" name="presence" id="presence_non" value="non"></input>
			</label>
			<br />
			<div id="envoi" style="text-align: center;">
				<input type="button" text="Envoyer" value="Envoyer" id="send" />
			</div>
			<span id="nombre" style="display: none;">
				Veuillez nous fournir l’information suivante :<br />
				<label id="ajout_nb">Nombre d’invités :
					<span id="random">0</span>
					<input type="hidden" name="nbinvitesgaul" id="nbinvitesgaul" value="0" />
				<label>
				<input type="button" text="Ajouter un invité" value="Ajouter un invité" id="add" style="margin-left: 10px;"/>
			</span>
			<div id="invites"></div>
		</form>
	</div>
	
		<table width="760" border="0" cellspacing="0" cellpadding="0">
	  <tr> 
	    <td colspan="5" height="18" valign="bottom"><img src="buttons/lineup.gif" width="760" height="18" /></td>
	  </tr>
	  <tr> 
	    <td width="13" background="buttons/navfoot.gif" height="26"> 
	      <!--space -->
	    </td>
	    <td width="320" background="buttons/navfoot.gif" class="text_bold" height="26" align="left" valign="bottom"> 
	      &copy; Copyright 2005-2008 GAUL<br/>
	    </td>
	    <td width="320" background="buttons/navfoot.gif" class="text_small" height="26" align="right" valign="bottom">version 
	      5.1</td>
	    <td width="9" background="buttons/navfoot.gif" height="26"> 
	      <!--space-->
	    </td>
	    <td width="1" bgcolor="#003366" height="26"> 
	      <!--space-->
	    </td>
	  </tr>
	  <tr> 
	    <td colspan="3" height="5" bgcolor="#C5D4E8"> 
	      <!--space-->
	    </td>
	    <td rowspan="2" colspan="2" bgcolor="#C5D4E8"><img src="buttons/corner.gif" width="10" height="6" /></td>
	  </tr>
	  <tr> 
	    <td colspan="3" bgcolor="#003366" height="1"> 
	      <!--space-->
	    </td>
	  </tr>
	</table>

<!--end-of-footer-end-->
<map name="Map"> 
  <area shape="rect" coords="637,2,753,45" href="http://www.ulaval.ca" alt="Universit&eacute; Laval" title="Universit&eacute; Laval" target="_blank">
  <area shape="rect" coords="5,1,80,55" href="index.html" alt="Accueil" title="Accueil">
</map>

	<script type="text/javascript">
		Ext.onReady(function(){
		
			/*********************************************************/
			/** On génère des boutons radio Ext							**/
			/*********************************************************/
			var oui = new Ext.form.Radio({
				boxLabel: 'Oui',
				name: 'presence',
				inputValue: '1',
				id: 'presence_oui',
				applyTo: 'presence_oui',
				onClick : function(){
					var p = this.el.up('form') || Ext.getBody();
					var els = p.select('input[name='+this.el.dom.name+']');
		
					els.each(function(el){
						// On affiche ou on cache les bonnes grids
						if(el.dom.id == this.id){
							//hide
							Ext.get('nombre').enableDisplayMode().hide();
							Ext.get('invites').enableDisplayMode().hide();
						} else {
							//show
							Ext.get('nombre').enableDisplayMode().show(true);
							Ext.get('invites').enableDisplayMode().show(true);
						}
					}, this);
				}
			});
	
			/*********************************************************/
			/** On génère des boutons radio Ext							**/
			/*********************************************************/
			var non = new Ext.form.Radio({
				boxLabel: 'Non',
				name: 'presence',
				inputValue: '0',
				id: 'presence_non',
				applyTo: 'presence_non',
				onClick : function(){
					var p = this.el.up('form') || Ext.getBody();
					var els = p.select('input[name='+this.el.dom.name+']');
		
					els.each(function(el){
						// On affiche ou on cache les bonnes grids
						if(el.dom.id == this.id){
							// hide
							Ext.get('nombre').enableDisplayMode().hide();
							Ext.get('invites').enableDisplayMode().hide();
						} else {
							//show
							Ext.get('nombre').enableDisplayMode().show(true);
							Ext.get('invites').enableDisplayMode().show(true);
						}
					}, this);
				}
			});
			
			/*********************************************************/
			/** Affiche le grid de Année par défaut						**/
			/*********************************************************/
			non.setValue(true);
			Ext.get('nombre').enableDisplayMode().hide();
			Ext.get('invites').enableDisplayMode().hide();
			
			/*********************************************************/
			/** Créé un basic form									**/
			/*********************************************************/
			var formul = new Ext.form.BasicForm('form_gaul');
			Ext.get('send').on('click', function(){
				formul.submit();
			});
			formul.on({
		        actioncomplete: function(form, action){
					if(action.type == 'submit'){
						// Si responseText est une string null, Ext ne donne pas d'erreur, donc on l'attrape 
						// comme si c'est une erreur puisque c'est pas le JSON attendu.
						if(action.response.responseText === '') {
							throw new ADA_Exception('L\'envoi a retourné une string vide plutôt que le JSON attendu');
						} else {
							// Tout est ok!
							var result = Ext.decode(action.response.responseText);
							
							// Message OK
							alert(action.result.confirm);
							
							// Change le contenu de la div
							Ext.get('formulaire').dom.innerHTML = action.result.message;

						}
					}
				},
				actionfailed: function(form,action){
					if(action.type == 'submit') {
						if (action.failureType == "connect") { 
							alert('L\'envoi du formulaire a échoué. Connexion impossible au serveur.');
						} else {
							if (action.failureType == "server") {
								// Hack trouvé sur le forum de Ext. Raison du hack:
								// These arent "errors" as such, they are validation issues trapped by the server script and passed back for the user to correct
							} else {    
								var result = Ext.decode(action.response.responseText); 
								if(result) {         
									alert('L\'envoi du formulaire a échoué. Une erreur est survenue. Vérifiez que vous avez bien rempli tous les champs.');
								}
							}
						}
					}
		         }
		    }); // fin form.on

			/*********************************************************/
			/** On génère des forms pour les invités						**/
			/*********************************************************/
			var invites = 0;
			Ext.get('add').on('click', function(){
				invites = invites + 1;
				var codenb = invites;
				Ext.get('ajout_nb').first().update(codenb);
				Ext.get('nbinvitesgaul').dom.value = codenb;

				var codeinvite = '<div id="invite'+invites+'" class="invites" style="width: 270px;"><label>Nom :<input type="text" name="invite'+invites+'_nom" id="invite'+invites+'_nom" style="margin-left: 84px;" /></label><br /><label>Prénom : <input type="text" name="invite'+invites+'_prenom" id="invite'+invites+'_prenom" style="margin-left: 64px;" /></label></div>';
				var el = Ext.get('invites').insertHtml('beforeEnd', codeinvite, true);
				el.slideIn();
			});

		});
	</script>
</body>
</html>