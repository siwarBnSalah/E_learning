  <?php

include('connexion.php');

if (isset($_GET["deleteid"])) {

    $id= $_GET['deleteid'];
    
    include('connexion.php');

    $query = "DELETE FROM cours WHERE   id_cour ='".$id."'";
    $result = mysqli_query($idcon, $query);
   
   if($result) 
 {
      header("location:listecours.php");

    //echo 'supprission validée';
    }
   else{
       //header("location:.php");
     echo 'invalidée';
  
   }
}
?>
