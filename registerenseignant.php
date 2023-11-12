<?php

if (isset($_POST['Send'])) 
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $cin = $_POST['cin'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $comfpassword= $_POST['comfpassword'];


    include('connexion.php');
    if ($nom!="" && $prenom!="" && $cin!="" && $adresse!="" && $telephone!="" && $login!="" && $password == $comfpassword && $password !="" ) {
        
        $query = ("insert into enseignant(nom, prenom, cin,adresse, telephone, login, password,comfpassword)  values('$nom', '$prenom','$cin',' $adresse',' $telephone',' $login','$password','$comfpassword')");
        $result = mysqli_query($idcon, $query);

    if ($result) {
         header('location:singinensg.html');
    }

       
    }
  
    else {

        header('location:contactenseignant.html');
       
        
    }



}


?>