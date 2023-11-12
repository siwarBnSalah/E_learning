<?php
if (isset($_POST['update'])) 
{
    $id = $_POST['idd'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $naiss = $_POST['datenaissance'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];

   


    include('connexion.php');


    
    $query = "update eleve set nom='$nom',prenom='$prenom',	datenaissance='$naiss',adresse='$adresse' ,
    telephone='$telephone'
    where ID='$id'";
    $result = mysqli_query($idcon,$query);
    
    //echo "";
    if ($result) {
       header('location:listeEleve.php');
       //echo "update avec succées";
    }
    else {

        echo "nonnn";
      //header('location:RegisterEle.html');
    }
}
?>