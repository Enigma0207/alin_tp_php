

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="http://localhost/ alin_tp_php/assets/style.css">
 
    <title>Document</title>
</head>
<body>


<nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
  <div class="container-fluid ">
      <a class="navbar-brand" href="http://localhost/alin_tp_php/listAnnonce.php">Liste des annonces</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  " id="navbarText" >
           <ul class="navbar-nav mb-2 mb-lg-0 d-flex justify-content-end">
             <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="http://localhost/alin_tp_php/ajout_annonce.php">ajouter annonce</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="http://localhost/alin_tp_php/consultAnoonce.php">Consulter toutes les annonces</a>
             </li>
             
           </ul>
        
          
      </div>
  </div>
</nav>

<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/php_hotel/inc/database.php";




 
