
<?php

if (isset($_POST['Send'])) 
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ne = $_POST['datenaissance'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $mdpassword = $_POST['mdpassword'];


    include('connexion.php');
    if ($nom!="" && $prenom!="" && $ne!="" && $adresse!="" && $telephone!="" && $login!="" && $password == $mdpassword && $password !="" ) {
        
    $query = ("insert into eleve(nom, prenom, datenaissance,adresse, telephone, login, password,mdpassword)  values('$nom', '$prenom','$ne',' $adresse',' $telephone',' $login','$password','$mdpassword')");
    $result = mysqli_query($idcon, $query);

    if ($result) {
         header('location:singinenf.html');
    }
    else {
                  
        header('location:contactenfants.html');
    }

}


}