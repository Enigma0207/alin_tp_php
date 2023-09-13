 <?php include_once "./inc/header.php" ; ?>
<?php require_once "./inc/fonction.php" ;

$listAnnonce = detail($_GET["annonce"]); ?>

<div class = container>
  <table class = "table">
    <thead>
        <tr>
        <th>title </th>
        <th>description</th>
        <th>postal_code</th>
        <th>type</th>
        <th>price</th>
    </tr>
    </thead>
    <tbody>
           
           <tr>
               <td>
                   <?= $listAnnonce ['title'];?>
               </td>
               <td>
                   <?= $listAnnonce ['description'];?>
               </td>
               <td>
                   <?= $listAnnonce ['postal_code'];?>
               </td>
               <td>
                   <?= $listAnnonce ['city'];?>
               </td>
               <td>
                   <?= $listAnnonce ['type'];?>
               </td>
               <td>
                   <?= $listAnnonce ['reservation_message'];?>
               </td>
         </tr>
              
    </tbody>
    </table>
    <!-- <form action="./detail.php" method="POST">

        <input type="hidden" name="id" value="<?= $_GET["annonce"] ?>">
    
        <label for="">Entrez votre message :</label>
    
        <div><textarea name="reservation_message" id="" cols="30" rows="10"></textarea></div>
    
        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="envoyer" value="submit">Réservez</button>
    
    </form> -->
</div>

<?php include_once "./inc/footer.php" ; ?>