<?php
if (isset($_POST['Subscribe'])) 
{
    $email = $_POST['email'];
    
    include('connexion.php');
    if ($email!="" ){
        $query = ("insert into demande(mail) values('$email')");
        $result = mysqli_query($idcon, $query);

    if ($result) {
         header('location:index.html');
    }       
    }
      
    else {
         echo"erreur ";
         // header('location:ListeEnseig');
       
        
    }



}
?>