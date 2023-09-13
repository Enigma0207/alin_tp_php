<?php
require_once ("../database/database.php");
if(isset($_POST["submit"])){
    // recupere les info saisie par le user
    $title = htmlspecialchars($_POST["title"]);
    $description = htmlspecialchars($_POST["description"]);
    $postal_code = htmlspecialchars($_POST["postal_code"]);
    $city = htmlspecialchars($_POST["city"]);
   
    $price = htmlspecialchars($_POST["price"]);
    
    $db= database();
    // prepare requete d'insersion pck on v envoyer à la bdd
    $request = $db->prepare("INSERT INTO `advert`( `title`, `description`, `postal_code`, `city`, `price`) VALUES (?,?,?,?,?)");
  //executer la  requete 
    try {
      $request->execute(array($title, $description, $postal_code, $city, $price));
    //    header("Location:../ajout_annonce.php");
    } catch (PDOException $e) {
        echo $e->getMessage();//afficher l'erreur sql genere
    }

}