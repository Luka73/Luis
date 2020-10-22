  
<!doctype html>
<html lang="en">

  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">     
        <!-- Bootstrap CSS -->   
        <link rel="stylesheet" href="../../plugins/bootstrap-4.3.1/css/bootstrap.min.css">
        <!-- Pour les Icons -->
        <link rel="stylesheet" href="../../plugins/fontawesome-free-5.12.1-web/css/all.css">
        <!-- CSS DU MODULE -->  
        <link rel="stylesheet" type="text/css" href="css/moduleStyle.css">     
        <title>Page-Login</title>
  </head>



<body class="text-center">
      <div class="container">            
            <div class="iconeBlog">  
                  <i class="fas fa-film"></i> 
            </div> 
            <h1 class="mb-4">Page Login</h1>    
            <form action="/action_page.php" method="post" >
                  <input type="text" placeholder="Nom utilisateur" name="nom_membre" id="nom_membre" class="form-control mb-4">  
                  <input type="password" autocomplete ="on" placeholder="Mot de passe" class="form-control mb-4" name="MDP_membre" id="MDP_membre">
                  <button type="button" id="btnLogin" class="form-control btn btn-primary" onclick="callRedirection()" >Login</button> 
            </form> 
            <!-- <div class="custom-control custom-checkbox my-1 mr-sm-2">
                  <input type="checkbox" class="custom-control-input" id="customControlInline">
                  <label class="custom-control-label" for="customControlInline">Remember my preference</label>
            </div> -->
      </div> 
</div> 
      

<!--  FOOTER  --> 
<?php include '../../includes/footer.php'; ?>