<?php 


include_once 'inc/header.php' ;?>

<div class="container">

   <form action="inc/traitement.php" method="post">
         <div class="form-group mt-5 mb-5 d-flex">
        
        
         
         <div class="form-group">
           <label for="firstname">title :</label>
           <input type="text" class="form-control"name="title" >
         </div>
         
         <div class="form-group">
         <label for="lastname">description :</label>
         <textarea name="description"  cols="15" rows="10" placeholder>description</textarea>

         <div class="form-group">
            <label>code postal:</label>
            <input type="number" class="form-control" name="postal_code" >
         </div>
         <div class="form-group">
            <label>ville:</label>
            <input type="texte" class="form-control" name="city" >
         </div>
         <div class="form-group mt-5 mb-5 d-flex">
         <label class ="me-xl-5">type :</label>
         <div class="form-check">
         <input class="form-check-input" type="radio" name="type"  value="vente">
         <label class="form-check-label">vente</label>
         </div>
         <div class="form-check">
         <input class="form-check-input" type="radio" name="type"  value="location">
         <label class="form-check-label">location</label>
         </div>

          <div class="form-group">
           <label for="firstname">prix :</label>
           <input type="number" class="form-control"name="price" >
         </div>
         
         
         
         <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="submit" value="submit">Submit</button>
   </form>



<?php include_once 'inc/footer.php' ;?>