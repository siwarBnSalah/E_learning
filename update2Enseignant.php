<?php
if (isset($_POST['update'])) 
{
    $id = $_POST['idd'];
    $cin = $_POST['cin'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];

   


    include('connexion.php');


    $query = "update enseignant set cin='$cin', nom='$nom',prenom='$prenom',adresse='$adresse' ,
    telephone='$telephone'
    where ID='$id'";
    $result = mysqli_query($idcon,$query);
    
    //echo "";
    if ($result) {
       header('location:ListeEnseignant.php');
       //echo "update avec succées";
    }
    else {

        echo "nonnn";
      //header('location:RegisterEle.html');
    }
}
?>