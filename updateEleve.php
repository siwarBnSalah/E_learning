



<?php

include('connexion.php');




    if (isset($_GET['updateid'])) {
        $idEl = $_GET['updateid'];

       $sql="SELECT *FROM `eleve` WHERE  ID='$idEl'";
       $res= $result = mysqli_query($idcon, $sql);
       $row = mysqli_fetch_assoc($res);
        $name=$row['nom'];
        $pre=$row['prenom']; 
        $naiss=$row['datenaissance'];
        $adr=$row['adresse'];
        $tel=$row['telephone'];

    }
?>


<head>


 <!-- bootstrap core css -->
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">





<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
         
<style type='text/css'>
body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}
 form{
  text-align: center;

 }
fieldset {
  font-size:10px;
  padding:10px;
  width:550px;


}
.navbar-default {
        
        
        margin-top: 1em;

     }






input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {

  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}



</style>






    
</head>
 
<body>  
 <div class="top_container sub_pages ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="">
            <span>
             Adward
             
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">  <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="about.html"> </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="teacher.html">  </a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="inscriptionensg_enfant.html"> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href=""> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php." style="color:#0865A7"></a>
                </li>
              </ul>
            
            </div>
        </nav>
      </div>
    </header>
  </div>
  <!-- end header section -->


<div class="container">
<form method="POST" action="updateEleve2.php">
        <fieldset style="width: 500">
            <legend>
                <h2 style="color :#4682B4;"> Modifier</h2>
            </legend>
            <table>


            <tr>
                    <td>
                        <p></p>
                    </td>
                    <td><input type="text" name="idd" size="15" maxlength="30" value="<?php echo $idEl?>"hidden><br></td>

                    <td>
                        
                    </td>
                    <td><br></td>
                </tr>



                <tr>
                    <td>
                        <p>Nom *:</p>
                    </td>
                    <td><input type="text" name="nom" size="15" maxlength="30" value="<?php echo $name?>" required><br></td>
               
                    <td>
                        <p>Prénom :</p>
                    </td>
                    <td><input type="text" name="prenom" size="15" maxlength="30"  value="<?php echo $pre?>"required><br></td>
                </tr>



                </tr>
               
                <tr>
                    <td>
                        <p>Date de naissance </p>
                         </td>
                        <td><input type="date" name="datenaissance" size="15" maxlength="30" value="<?php echo  $naiss?>" required><br></td>
                    </td>
               
                </tr>
                   
                <tr>
                    <td>
                        <p>Adresse</p>
                         </td>
                        <td><input type="text" name="adresse" size="15" maxlength="30" required value="<?php echo $adr?>"><br></td>
                    </td>
               
                    <td><p>Télephone </p></td>
                    <td><input type="text" name="telephone" size="15" maxlength="30"  value="<?php echo $tel?>"required><br></td>
                </tr>



                



                <tr>
                    <td><br><br></td>
                    <td><br><br><input type="submit" value="update" name="update"class="btn btn-warning"> </td>
                </tr>



            </table>

            </fieldset>
    </form>
  

</div>
 <a href="index.html">Retour à la page d'accueil</a>
</body>
