<?php  include('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Resume</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style type="text/css">
.body{
  width:850px; 
  height:750px; 
  border: 4px double #000000;  
  margin: 20px 0 0 -175px; 
}
.body2{
  width:550px; 
  height:180px; 
  border: 4px double #000000;  
  margin: 20px 0 0 -175px;
  position: absolute;
  left: 35%; 
}
.name{
  text-align: center;
  font-size: 25px;
  color: black;
  padding: 2px;
}
.pg{
  text-align: center;
  font-size: 18px;
  color: black;
  padding: 2px;
}
.job{
  font-size: 20px;
  color: black;
  padding: 2px;
}
.date{
  font-size: 25px;
  color: black;
  padding: 2px;
  position: absolute;
  right: 30%;
  top: 4%; 
}
.btn-add-info{
  position: absolute;
  left: -49%;
  top: 1%;
  width: 100px;
  height: 50px;
}
.btn-add-work{
  position: absolute;
  left: 90%;
  top: 45%;
  width: 80px;
  height: 50px;
}
.btn-edit{
  text-align: center;
  position: absolute;
  left: 50%;
  top: 76%;
  width: 80px;
  height: 50px;
}
  </style>

</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
        </div>
        <div class="sidebar-brand-text mx-3">Resume</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="table.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Table</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Resume</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tables</h6>
            <a class="collapse-item" href="">Simple Tables</a>
            <a class="collapse-item" href="">DataTables</a>
          </div>
        </div>
      </li>


      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">


        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Documents(Design & Edit)</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Forms</li>
            </ol>
          </div>

          <!-- Task Page Section-->
    <div class="col-lg-12">
        <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-body col-6 m-auto">
          <button data-target="#addInfo" id="addInfoCV" type="button" class="btn-add-info btn-success font-weight-bold" data-toggle="modal"
                        ><i class="fas fa-user-edit">Add Info</i></button>
                        <h1>Resume Simple Standard</h1>
          <div class="body">
          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
  <!--Add Info Modal Center -->
<div class="modal fade" id="addInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addInfoCV">Add</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                   <input name="name" id="name" class="form-control  mb-3" type="text" placeholder="Add Your Name" required>
                  <input name="location" id="location" class="form-control  mb-3" type="text" placeholder="Add Your Location" required>
                  <input name="phone" id="phone" class="form-control  mb-3" type="text" placeholder="Add Phone Number" required>
                  <input name="email" id="email" class="form-control  mb-3" type="email" placeholder="Add Your Email" required>
                  <input name="summary" id="summary" class="form-control  mb-3" type="text" placeholder="Add Some Summary" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="save" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>