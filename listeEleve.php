<!DOCTYPE html>
<head>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Voulez vous vraiment supprimer cet eleve ?');
}
</script>

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




<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




<style type="text/css">

table {
              border-collapse: collapse;
              width: 100%;
          }

          th, td {
              padding: 8px;
              text-align: left;
              border-bottom: 1px solid #ddd;
          }

          tr:hover {background-color:#F4F4F4 ;}
          li {
              display: inline-block;


              color: #ffffff;
              font-size: 45px;
              font-family: 'Raleway', sans-serif;


          }

body{
background: #f2f2f2;
font-family: 'Open Sans', sans-serif;
}

.search {
width: 100%;
position: Top Right;
display: flex;
}

.searchTerm {
width: 100%;
border: 3px solid #11066D ;
border-right: none;
padding: 20px;
height: 20px;
border-radius: 5px 0 0 5px;
outline: none;
color: #11066D ;
}

.searchTerm:focus{
color: #11066D ;
}

.searchButton {
width: 40px;
height: 45px;
border: 1px solid #11066D ;
background: #11066D ;
text-align: center;
color: #fff;
border-radius: 0 5px 5px 0;
cursor: pointer;
font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
width: 30%;
position: absolute;
top: 50%;
left: 100%;
transform: translate(-50%, -50%);
}








body {
      color: #566787;
  background: #f5f5f5;
  font-family: 'Varela Round', sans-serif;
  font-size: 13px;
}
.table-wrapper {
      background: #fff;
      padding: 20px 25px;
      margin: 30px 0;
  border-radius: 3px;
      box-shadow: 0 1px 1px rgba(0,0,0,.05);
  }
.table-title {        
  padding-bottom: 15px;
  background: #435d7d;
  color: #fff;
  padding: 16px 30px;
  margin: -20px -25px 10px;
  border-radius: 3px 3px 0 0;
  }
  .table-title h2 {
  margin: 5px 0 0;
  font-size: 24px;
}
.table-title .btn-group {
  float: right;
}
.table-title .btn {
  color: #fff;
  float: right;
  font-size: 13px;
  border: none;
  min-width: 50px;
  border-radius: 2px;
  border: none;
  outline: none !important;
  margin-left: 10px;
}
.table-title .btn i {
  float: left;
  font-size: 21px;
  margin-right: 5px;
}
.table-title .btn span {
  float: left;
  margin-top: 2px;
}
  table.table tr th, table.table tr td {
      border-color: #e9e9e9;
  padding: 12px 15px;
  vertical-align: middle;
  }
table.table tr th:first-child {
  width: 60px;
}
table.table tr th:last-child {
  width: 100px;
}
  table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
  background: #f5f5f5;
}
  table.table th i {
      font-size: 13px;
      margin: 0 5px;
      cursor: pointer;
  }	
  table.table td:last-child i {
  opacity: 0.9;
  font-size: 22px;
      margin: 0 5px;
  }
table.table td a {
  font-weight: bold;
  color: #566787;
  display: inline-block;
  text-decoration: none;
  outline: none !important;
}
table.table td a:hover {
  color: #2196F3;
}
table.table td a.edit {
      color: #FFC107;
  }
  table.table td a.delete {
      color: #F44336;
  }
  table.table td i {
      font-size: 19px;
  }
table.table .avatar {
  border-radius: 50%;
  vertical-align: middle;
  margin-right: 10px;
}
  .pagination {
      float: right;
      margin: 0 0 5px;
  }
  .pagination li a {
      border: none;
      font-size: 13px;
      min-width: 30px;
      min-height: 30px;
      color: #999;
      margin: 0 2px;
      line-height: 30px;
      border-radius: 2px !important;
      text-align: center;
      padding: 0 6px;
  }
  .pagination li a:hover {
      color: #666;
  }	
  .pagination li.active a, .pagination li.active a.page-link {
      background: #03A9F4;
  }
  .pagination li.active a:hover {        
      background: #0397d6;
  }
.pagination li.disabled i {
      color: #ccc;
  }
  .pagination li i {
      font-size: 16px;
      padding-top: 6px
  }
  .hint-text {
      float: left;
      margin-top: 10px;
      font-size: 13px;
  }    

/* Modal styles */
.modal .modal-dialog {
  max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
  padding: 20px 30px;
}
.modal .modal-content {
  border-radius: 3px;
}
.modal .modal-footer {
  background: #ecf0f1;
  border-radius: 0 0 3px 3px;
}
  .modal .modal-title {
      display: inline-block;
  }
.modal .form-control {
  border-radius: 2px;
  box-shadow: none;
  border-color: #dddddd;
}
.modal textarea.form-control {
  resize: vertical;
}
.modal .btn {
  border-radius: 2px;
  min-width: 100px;
}	
.modal form label {
  font-weight: normal;
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
             Eleve
             
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  " >
                         <ul class="nav navbar-nav navbar-right">
                         &thinsp;&thinsp;&thinsp;&thinsp;   &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; &thinsp;&thinsp;&thinsp;&thinsp; <li class="nav-item "><a class="nav-link" href="principaleAd.php"><span class="	glyphicon glyphicon-circle-arrow-left"></span> Retour </a></li>   
                          </ul>
                      </ul>
            
                      <div class="wrap">  <div class="search">
                      <input type="text" class="searchTerm" placeholder="Search">
                      <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
                  </div>
              </div>
            </div>
        </nav>
      </div>
    </header>
  </div>
  <!-- end header section -->
<?php 
 include('connexion.php');
 
   
  
 $query = ' SELECT * FROM `eleve` ORDER BY ID DESC ';
 $result = mysqli_query($idcon, $query);



?>

<h2> Liste des eleve inscrit dans l'école :</h2>
<hr>
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Gérer <b>Eleve</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouvel Eleve</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Supprimer</span></a>						
					</div>
                </div>
            </div>


<table  width="100%"cellspacing="0" border="2">
 <thead><tr>
 <th> id</th>
 <th> Nom</th>
 <th> Prenom</th>
 <th> date Naissance</th>
 

 <th> Adresse</th>
 <th> telephone </th>
 <th> Action </th>

 </tr></thead>
 <tbody>
 <?php 
   while($row = mysqli_fetch_assoc($result))
    {
?><tr>
 <td><?php echo $row['ID']; ?></td>
 <td><?php echo $row['nom']; ?></td>
 <td><?php echo $row['prenom']; ?></td>
 <td><?php echo $row['datenaissance']; ?></td>
 <td><?php echo $row['adresse']; ?></td>
 <td><?php echo $row['telephone']; ?></td>
 <td>
 
 <?php  echo"<button class='btn btn-warning' ><a  style='color:#FFFFFF' href='updateEleve.php?updateid=".$row['ID']." '   class='mr-3' data-toggle='tooltip' ><span class='fa fa-pencil' ></span></a></button>" ;?>
 <?php  echo"<button class='btn btn-warning' ><a  style='color:#FFFFFF' href='deleteEleve.php?deleteid=".$row['ID']." '   class='mr-3' data-toggle='tooltip'  onclick='return checkDelete()' ><span class='fa fa-trash' ></span></a></button>" ;?>
</td>
 </form></td>

 
</tr><?php
 }
 ?>
	</tbody> 
	  </table>
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="f" method="POST" action="AjoutElv.php">
					<div class="modal-header">						
						<h4 class="modal-title">Ajouter Eleve</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nom* </label>
							<input type="text"  name="nom" class="form-control" required>
						</div>
            <div class="form-group">
							<label>Prenom</label>
							<input type="text" name="prenom" class="form-control" required>
						</div>
            <div class="form-group">
							<label>Date naissance</label>
							<input type="date" name="datenaissance" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Adresse</label>
							<input type="text" name ="adresse" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Télephone</label>
							<input type="number" name="telephone" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" name ="annuler" value="Annuler">
						<input type="submit" class="btn btn-success" name="ajouter" value="Ajouter">
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="f2" method="POST" action="deleteTouElv.php">
					<div class="modal-header">						
						<h4 class="modal-title">supprimer tous les eleve</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Voulez-vous vraiment supprimer ces enregistrements ?</p>
						<p class="text-warning"><small>Cette action ne peut pas être annulée.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" name="annuler" value="Annuler">
						<input type="submit" class="btn btn-danger" name="supprimer" value="Supprimer">
					</div>
				</form>
			</div>
		</div>
	</div>
	


  <script languge="javascript">
    $(document).ready(function () {
  // Activate tooltip
  $('[data-toggle="tooltip"]').tooltip();

  // Select/Deselect checkboxes
  var checkbox = $('table tbody input[type="checkbox"]');
  $("#selectAll").click(function () {
    if (this.checked) {
      checkbox.each(function () {
        this.checked = true;
      });
    } else {
      checkbox.each(function () {
        this.checked = false;
      });
    }
  });
  checkbox.click(function () {
    if (!this.checked) {
      $("#selectAll").prop("checked", false);
    }
  });
});

  </script>
</html>
