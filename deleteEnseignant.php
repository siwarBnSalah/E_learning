<html>
<head></head>



<body>
    <?php

include('connexion.php');

if (isset($_GET["deleteid"])) {

    $idEn= $_GET['deleteid'];
  
    $query = "DELETE FROM enseignant WHERE  ID ='".$idEn."'";
    $result = mysqli_query($idcon, $query);
   
   if($result) 
 {
  header("location:ListeEnseignant.php");
    }
   else{
     echo 'invalidée';
  
   }
}
?>
