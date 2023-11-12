<?php
   include('connexion.php');
  if(isset($_POST['supprimer'])){
   $res="DROP TABLE cours";
   $result = mysqli_query($idcon,$res);
}
?>