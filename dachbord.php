<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary ">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="dachbord.php">Cpanel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="add.php">inscription</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="att.php">attestation de scolariter</a>
          
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php
 $conn=mysqli_connect("localhost","root","","gestion_etudiant");
 $sql="select * from etudiant ";
 $result=mysqli_query($conn,$sql);
 $output = $result->fetch_assoc();
 
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">code Apogee</th>
      <th scope="col">date de naissance</th>
      <th scope="col">ville</th>
      <th scope="col">Pays</th>
      <th scope="col">filiere</th>
      <th scope="col">niveau scolaire</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($output as $row){
      
    ?>
   <tr>
    <th><?php $row['nom'];?></th>
   <th></th>
   <th></th>
   <th></th>
   <th></th>
   <th></th>
   <th></th>
   <th></th>
   <th></th></tr>
  <?php
    }
  ?>
  </tbody>
</table>
</body>
</html>