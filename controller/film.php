<?php
 // --------------------------------------------------------------
 // CONTROLLEUR - film  
 //--------------------------------------------------------------- 
	include '../model/Film.class.php';
	include '../dao/FilmDAO.class.php';

	extract($_POST);
	//print_r($_POST);

	$pochette = $_FILES['arquivo']['name'];
	$location = $_SERVER['DOCUMENT_ROOT'] . "\\Film_2020_Git\\img\\";
	$nomPochette=sha1($titre.time());

	if($_FILES['arquivo']['tmp_name'] !== ""){
		$tmp = $_FILES['arquivo']['tmp_name'];
		$fichier= $_FILES['arquivo']['name'];
		$extension=strrchr($fichier,'.');
		if(!@move_uploaded_file($tmp,$location.$nomPochette.$extension)){
			error_r("Erro ao carregar imagem");
		}
		@unlink($tmp);
		$pochette=$nomPochette.$extension;
	}

	$filmDAO = new FilmDAO();	

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