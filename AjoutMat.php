<?php
if (isset($_POST['ajouter'])) 
{
    $nom = $_POST['nom'];
    $desc = $_POST['description'];
    $_FILES=$_POST['file'];


    include('connexion.php');
    if ($nom!="" && $desc!="" && $_FILES!="" ) {
        
        $query = ("insert into cours(nom,descriptipn, file) values('$nom', '$desc','$_FILES')");
        $result = mysqli_query($idcon, $query);

    if ($result) {
         header('location:listecours.php');
    }       
    }
      
    else {
         echo"erreur ";
         // header('location:ListeEnseig');
       
        
    }



}

?>