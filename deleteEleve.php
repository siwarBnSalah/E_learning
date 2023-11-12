<html>
<head></head>



<body>
    <?php

include('connexion.php');

if (isset($_GET["deleteid"])) {

    $idEl= $_GET['deleteid'];
  
    $query = "DELETE FROM eleve WHERE   ID ='".$idEl."'";
    $result = mysqli_query($idcon, $query);
   
   if($result) 
 {
  header("location:listeEleve.php");
    }
   else{
      //header("location:ListeEleve.php");
     echo 'invalidée';
  
   }
}
?>
