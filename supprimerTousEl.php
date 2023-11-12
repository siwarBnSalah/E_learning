<?php
   include('connexion.php');
  if(isset($_POST['supprimer'])){
   $res="DROP TABLE eleve";
   $result = mysqli_query($idcon,$res);
}
?>