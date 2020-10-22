<?php include '../../includes/head.php'; ?>
<?php include '../../includes/interfaceAdmin.php'; ?>


<!-- Liste des membres -->
<div class="container" style="width: 1200px;">
  <div class="row">
        <div class="col-md-12">
           <h1>Liste des membres <i class="fas fa-users"></i></h1>
        </div>
        <div class="col-md-12">
            <table class="table table-hover ">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Courriel</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Antonio</td>
                        <td>Antonio@gmail.com</td>
                        <td>
                            <button type="button" class="btn btn-primary"><i class="far fa-edit"></i> Editer</button>
                            <button type="button" class="btn btn-warning"><i class="far fa-edit"></i> Details</button>
                            <button type="button" class="btn btn-danger"><i class="far fa-edit"></i> Supprimer</button>
                        </td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>Bob</td>
                        <td>Bob@gmail.com</td>
                        <td>
                            <button type="button" class="btn btn-primary"><i class="far fa-edit"></i> Editer</button>
                            <button type="button" class="btn btn-warning"><i class="far fa-edit"></i> Details</button>
                            <button type="button" class="btn btn-danger"><i class="far fa-edit"></i> Supprimer</button>
                        </td>                    </tr>
                    <tr>
                        <th>1</th>
                        <td>Carlos</td>
                        <td>Carlos@gmail.com</td>
                        <td>
                            <button type="button" class="btn btn-primary"><i class="far fa-edit"></i> Editer</button>
                            <button type="button" class="btn btn-warning"><i class="far fa-edit"></i> Details</button>
                            <button type="button" class="btn btn-danger"><i class="far fa-edit"></i> Supprimer</button>
                        </td>                    </tr>              
                </tbody>
            </table>
        </div>
  </div>
</div>


<!--  FOOTER  --> 
<?php include '../../includes/footer.php'; ?>