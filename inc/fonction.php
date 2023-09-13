<?php
require_once "./database/database.php";
function anonnceList()
{
    $utilisateurAnnonce = null; // se connecter à la bdd
    $db = database();
    //  prepare la request, recupere tous les champs de la table hotels, sachant que le nom de l'hotel est unique

    $request = $db->prepare("SELECT * FROM advert ORDER BY id_adver DESC LIMIT 15"); // avec  ORDER BY id DESC LIMIT 15" affichera les 15 dernier en premier place
    //execute la requete
    try {
        $request->execute();
        // recupere les resultat dans un tableau 
        $utilisateurAnnonce = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    return $utilisateurAnnonce;

}


function listTotal()
{
    $utilisateurAnnonce = null;

    // se connecter à la bdd
    $db = database();
    //  prepare la request, recupere tous les champs de la table hotels, sachant que le nom de l'hotel est unique

    $request = $db->prepare("SELECT * FROM advert "); // avec  ORDER BY id DESC LIMIT 15" affichera les 15 dernier en premier place
    //execute la requete
    try {
        $request->execute();
        // recupere les resultat dans un tableau 
        $utilisateurAnnonce = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    return $utilisateurAnnonce;

}

// fonction pour les detail de mon annonce
function detail($id)
{
    $userAnnonce = null;
    // se connecter à la bdd
    $db = database();
    //  prepare la request, recupere tous les champs de la table hotels, sachant que le nom de l'hotel est unique

    $request = $db->prepare("SELECT * FROM advert WHERE id_adver=? "); // avec  ORDER BY id DESC LIMIT 15" affichera les 15 dernier en premier place
    //execute la requete
    try {
        $request->execute(array($id));
        // recupere les resultat dans un tableau 
        $userAnnonce = $request->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    return $userAnnonce;

    

}
?>