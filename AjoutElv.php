<?php
if (isset($_POST['ajouter'])) 
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $naiss=$_POST['datenaissance'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];

    include('connexion.php');
    if ($nom!="" && $prenom!="" && $naiss!="" && $adresse!="" && $telephone!="" ) {
        
        $query = ("insert into eleve(nom, prenom, datenaissance ,adresse, telephone) values('$nom', '$prenom','$naiss',' $adresse',' $telephone')");
        $result = mysqli_query($idcon, $query);

    if ($result) {
         header('location:ListeEleve.php');
    }       
    }
      
    else {
         echo"erreur ";
         // header('location:ListeEnseig');
       
        
    }



}

?>