<?php
 // --------------------------------------------------------------
 // CONTROLLEUR - film  
 //--------------------------------------------------------------- 
	include '../model/Film.class.php';
	include '../dao/FilmDAO.class.php';

	extract($_POST);
	$filmDAO = new FilmDAO();	

	// $pochette = $_POST['pochette'];
	// alert($pochette);

	//console.log($titre); //to test! var_dumping  print_r($data);
	//console.log(''); pour html
	switch ($action) 
	{
		case 'insert':
			$film = new Film(null,$titre,$prix,$realisateur,$categorie,$pochette,$description);	
			$filmDAO->insert($film);//Si ok return 1
			echo 'Compte bien enregistrée!';
		    break;

		// case 'update':
		// 	$film = new Film($PK_ID_Film,$titre,$prix,$realisateur,$categorie,$pochette,$description);
		// 	echo $filmDAO->update($film);//Si ok return 1
		// 	break;

		// case 'delete':
		// 		echo $filmDAO->delete($PK_ID_Film);//Si ok return 1
		// 	break;

		// case 'getUtilisateur':
		// 	echo $filmDAO->getfilm($txtInput);//Si ok return 1
		// 	break;
			
		// default:
		// 	echo "Aucun action trouvée";
		// 	break;
	}

?>