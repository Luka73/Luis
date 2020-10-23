//  PORTÉE GLOBAL 
var filmController ='../../controller/film.php';

//Écoute l'évenemet click du button enregistrer provenant du formulaire modal (jouter.php)
$('#btnEnregistrerFilm').click(()=> {
    
    //get all form filds  
    var donnes  = new FormData();
    donnes.append("titre", $("#titre").val());
    donnes.append("prix", $("#prix").val());
    donnes.append("categorie", $("#categorie").val());
    donnes.append("realisateur", $("#realisateur").val());
    donnes.append("description", $("#description").val());
    donnes.append("arquivo", $("#pochette")[0].files[0]);
    donnes.append("action", "insert");

    //SEND TO CONTROLLER :Route, data, action
   $.ajax({
       method: 'POST',
       url:filmController,
       data: donnes,
       contentType : false,
       processData: false
   }).done((msg)=>{
       //plugin confirm
       $.confirm({
           title:'Bienvenue!',
            content: msg,
            buttons:{
                OK:()=>{
                    $('#modalNewFilm').modal('toggle');//close modal
                    // Recharge la page actuelle à partir du serveur, sans utiliser le cache.		
                    location.reload(true);                  
                }
            }
       });    
   });
});
