//  _____________________________________________________________________
//  PAGE QUI FOURNIE LES METHODES DE SUPPORT AU FICHIER moduleScript.jS
// _____________________________________________________________________

// Methode qui retourne l'ensemble des entités.
function lister(txtInput)
{
	//Set la valeur à recuperer par(extract($_POST);) au controlleur
	var actionType = 'action=getUtilisateur';
	//La valeur contenant dans txtInput sera recuperée  
	//...par (extract($_POST);) dans le controlleur .
	var champs  = "txtInput="+txtInput;

	//REQUISITION asynchrone 
	$.ajax({
		method:'POST', 
		url: UserController,
		data: actionType+'&'+champs
		//CALLBACK: un array d'entité en json.
	}).done((jsonData)=>{			
		//  REQUISITION asynchrone
		$.ajax({
			method:'POST', 
			url: 'template/table-utilisateur.php',
			//le callback jsonData est envoyée par la variable obj
			data: "obj="+jsonData
		//CALLBACK: tout le contenu du fichier table-utilisateur.php	
		}).done((template)=>{
			//Charge le template, provenant du callback, dans la div 
			//... listTemplate avec son id,  dans (index.php) du utilisateur.
			$("#listTemplate").html(template);
			// declenche dès que le button btnEditer(table-utilisateur.php) est appuyé
			//...ele é pego pela class.
			$('.btnEditer').click(function() 
			{
				//Open the modal windows
				$('.ModalCadastro').modal("show");				 	
				//convert en json l'objet du button
				var obj = JSON.parse($(this).attr("obj") );
				//Show object propertys on form input
				$("#Utilisateur_ID").val(obj.Utilisateur_ID);
				$("#UtilisateurName").val(obj.UtilisateurName);	
				$("#UtilisateurNickName").val(obj.UtilisateurNickName);	
				$("#UtilisateurMDP").val(obj.UtilisateurMDP);	
				$("#UtilisateurEmail").val(obj.UtilisateurEmail);	
				$("#Profil_ID").val(obj.Profil_ID);
				//Show le boutton Supprimer par son ID: btnSupprimer
				//on javascript sintax:  document.getElementById("btnSupprimer").hidden = false;
				$("#btnSupprimer").css("display", "block");	
				//Ajoute la valeur du title h5 du modal
				$("#ModalTitle").html("Editer Utilisateur");		
			});

		})
	});
}