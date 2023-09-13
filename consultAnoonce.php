<?php include_once "inc/header.php" ; ?>
<?php require_once "inc/fonction.php" ;

$listAnnonce = listTotal(); ?>

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
        <?php foreach ($listAnnonce as $annonce){ 
            ?>
           <tr>
               <td>
                   <?= $annonce ['title'];?>
               </td>
               <td>
                   <?= $annonce ['description'];?>
               </td>
               <td>
                   <?= $annonce ['postal_code'];?>
               </td>
               <td>
                   <?= $annonce ['city'];?>
               </td>
               <td>
                   <?= $annonce ['type'];?>
               </td>
               <td>
                   <?= $annonce ['reservation_message'];?>
               </td>
               <td> 
                        <a class="btn btn-success" href="detail.php?annonce=<?= $annonce["id_adver"]; ?>">consulter</a>
                
               </td>
         </tr>
        <?php } ?>
    </tbody>
    </table>
</div>

<?php include_once "./inc/footer.php" ; ?>