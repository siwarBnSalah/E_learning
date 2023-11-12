<?php
   include('connexion.php');
  if(isset($_POST['supprimer'])){
   $res="DROP TABLE enseignant";
   $result = mysqli_query($idcon,$res);

}
?>