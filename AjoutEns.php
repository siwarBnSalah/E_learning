<?php

if (isset($_POST['ajouter'])) 
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $cin = $_POST['cin'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];


    include('connexion.php');
    if ($nom!="" && $prenom!="" && $cin!="" && $adresse!="" && $telephone!="" ) {
        
        $query = ("insert into enseignant(nom, prenom, cin,adresse, telephone)  values('$nom', '$prenom','$cin',' $adresse',' $telephone')");
        $result = mysqli_query($idcon, $query);

    if ($result) {
         header('location:ListeEnseignant.php');
    }
       
    }
  
    else {
         echo"erreur ";
       // header('location:ListeEnseig');
       
        
    }



}


?>