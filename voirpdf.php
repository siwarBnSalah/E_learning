<?php 
 include('connexion.php');
 if (isset($_POST['voirpdf'])){
 $sql="SELECT file FROM cours WHERE id_cour = '$id'";
    
     $res= $result = mysqli_query($idcon, $sql);
     $row = mysqli_fetch_assoc($res);
     //Rendre 
     header("Content-type: image/jpg"); 
     echo $img['image']; 
 
}