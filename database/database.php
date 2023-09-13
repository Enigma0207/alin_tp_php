<?php
function database(){
    $connexiondb =null;
    try {
         $connexiondb = new PDO("mysql:host=localhost;dbname=wf3_php_intermediaire_alin","root","");
    } catch (PDOException $e) {
       $connexiondb = $e->getMessage();
    }
  return  $connexiondb ;
}