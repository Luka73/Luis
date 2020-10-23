  <?php
 // --------------------------------------------------------------
 // CONTROLLEUR - MEMBRE  
 //--------------------------------------------------------------- 
	include '../model/Membre.class.php';
	include '../dao/MembreDAO.class.php';

	// Get data from moduleFunction.js
	extract($_POST);
	//GLOBAL
	$membreDAO = new MembreDAO();	

	switch ($action) 
	{
		case 'insert':
			$membre = new Membre(null,$nom,$prenom,$profil,$courriel,$tel_membre,$MDP_membre);		
			echo $membreDAO->insert($membre);//Si ok return 1
		    break;

		case 'update':
			$membre = new Membre($PK_ID_Membre,$nom,$prenom,$profil,$courriel,$tel_membre,$MDP_membre);
			echo $membreDAO->update($membre);//Si ok return 1
			break;

		case 'delete':
				echo $membreDAO->delete($PK_ID_Membre);//Si ok return 1
			break;

		case 'getUtilisateur':
			// echo $membreDAO->getMembre($txtInput);//Si ok return 1
				echo $membreDAO->getMembre();//Si ok return 1
			break;
			
		default:
			echo "Aucun action trouvée";
			break;
	}

?>