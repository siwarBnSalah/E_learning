<?php

if (isset($_POST['update'])) 
{
    $id = $_POST['idd'];
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $file = $_POST['file'];
    

   


    include('connexion.php');


 
    $query = "UPDATE `cours` SET id_cour='$id',nom='$nom',description='$description',file='$file' where id_cour='$id'";
    $result = mysqli_query($idcon,$query);
    
    //echo "";
    if ($result) {
       header('location:listecours.php');
       //echo "update avec succées";
    }
    else {

        echo "nonnn";
      //header('location:RegisterEle.html');
    }
}
?>