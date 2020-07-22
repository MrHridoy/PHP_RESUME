<?php include('connect.php');?>
<?php $id=$_REQUEST['id'];
$results = mysqli_query($connect, "SELECT * FROM tbl_cv  where id='".$id."'");?>
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
	right: 5%;
	top: 2%; 
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
	top: 47%;
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
        <a class="nav-link" href="home.php">
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
          <?php 
            while ($row = mysqli_fetch_array($results)) { ?>
						<h1 class="name font-weight-bold"><?php echo $row["name"]; ?></h1>
						<h2 class="name">Location:<?php echo $row["location"]; ?>/Phone:<?php echo $row["phone"]; ?>/Email:<?php echo $row["email"]; ?></h2><br><br>
						<h1 class="name">Summary</h1>
						<p class="pg"><?php echo $row["summary"]; ?></p><br><br><br><br>

						<button data-id="<?php echo $row["id"]; ?>" data-title="<?php echo $row["title"]; ?>" data-company="<?php echo $row["company"]; ?>" data-texts="<?php echo $row["texts"]; ?>" data-dates="<?php echo $row["dates"]; ?>" 
              data-target="#addWork" id="addWorkCV" type="button" class="btn-add-work btn-success font-weight-bold fas fa-fw fa-box" data-toggle="modal">Add</button>

						<h1 class="name font-weight-bold">Work Experience</h1>
						<div class="body2">
						<h2 class="job">Job Title:<?php echo $row["title"]; ?></h2>
						<h2 class="job">Company:<?php echo $row["company"]; ?></h2>
						<h2 class="job">Text:<?php echo $row["texts"]; ?></h2>
						<h2 class="date">Date:<?php echo $row["dates"]; ?></h2>
						</div>
						<button data-id="<?php echo $row["id"]; ?>" data-name="<?php echo $row["name"]; ?>" data-location="<?php echo $row["location"]; ?>" data-phone="<?php echo $row["phone"]; ?>" data-email="<?php echo $row["email"]; ?>" data-summary="<?php echo $row["summary"]; ?>" data-title="<?php echo $row["title"]; ?>" data-company="<?php echo $row["company"]; ?>" data-texts="<?php echo $row["texts"]; ?>" data-dates="<?php echo $row["dates"]; ?>" data-target="#editCV" id="editCVInfo" type="button" class="btn-edit btn-warning font-weight-bold" data-toggle="modal"><i class="fas fa-cogs"> Edit</i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
  <?php 
} ?>
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

<!--Add Work Modal Center -->
<div class="modal fade" id="addWork" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addWorkCV">Add Work Experience</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="update.php" method="POST" enctype="multipart/form-data">
              <?php  
              $id=$_REQUEST['id'];
              $results = mysqli_query($connect, "SELECT * FROM tbl_cv  where id='".$id."'"); 
              while ($row = mysqli_fetch_array($results)) { ?>
				      <input name="id" id="id" value="<?php echo $row['id']?>" type="text">
                <div class="modal-body">
                   <input name="title" id="title" value="<?php echo $row['title']?>" class="form-control  mb-3" type="text" placeholder="Add Job Title">
	                <input name="company" id="company" value="<?php echo $row['company']?>"  class="form-control  mb-3" type="text" placeholder="Add Company Name">
	                <input name="texts" id="texts" value="<?php echo $row['texts']?>"  class="form-control  mb-3" type="text" placeholder="Add Some Text">
	                <input name="dates" id="dates" value="<?php echo $row['dates']?>" class="form-control  mb-3" type="date" placeholder="Add Date">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="update" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
  <?php 
} ?>
<!--Edit Modal Center -->
<div class="modal fade" id="editCV" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCVInfo">Edit Resume</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="full_update.php" method="POST" enctype="multipart/form-data">
              <?php  
              $id=$_REQUEST['id'];
              $results = mysqli_query($connect, "SELECT * FROM tbl_cv  where id='".$id."'"); 
              while ($row = mysqli_fetch_array($results)) { ?>
            	<input name="id" id="id" value="<?php echo $row['id']?>" type="text" />
                <div class="modal-body">
                	<input name="name" id="name" value="<?php echo $row['name']?>" class="form-control  mb-3" type="text" placeholder="Update Your Name" required>
	                <input name="location" id="location" value="<?php echo $row['location']?>" class="form-control  mb-3" type="text" placeholder="Update Your Location" required>
	                <input name="phone" id="phone" value="<?php echo $row['phone']?>" class="form-control  mb-3" type="text" placeholder="Update Phone Number" required>
	                <input name="email" id="email" value="<?php echo $row['email']?>" class="form-control  mb-3" type="email" placeholder="Update Your Email" required>
	                <input name="summary" id="summary" value="<?php echo $row['summary']?>" class="form-control  mb-3" type="text" placeholder="Update Some Summary" required>
                  <input name="title" id="title" value="<?php echo $row['title']?>" class="form-control  mb-3" type="text" placeholder="Update Job Title">
                  <input name="company" id="company" value="<?php echo $row['company']?>"  class="form-control  mb-3" type="text" placeholder="Update Company Name">
                  <input name="texts" id="texts" value="<?php echo $row['texts']?>"  class="form-control  mb-3" type="text" placeholder="Update Some Text">
                  <input name="dates" id="dates" value="<?php echo $row['dates']?>" class="form-control  mb-3" type="date" placeholder="Update Date">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="full_update" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
  <?php 
} ?>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  	<script>
      /*-----Add Work Modal Update Scripts-----*/
    $('#addWork').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var title = button.data('title')
        var company = button.data('company')
        var texts = button.data('texts')
        var dates = button.data('dates')
        var modal = $(this)
        modal.find('.modal-title').text('Add Work Experience')
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #title').val(title);
        modal.find('.modal-body #company').val(company);
        modal.find('.modal-body #texts').val(texts);
        modal.find('.modal-body #dates').val(dates);

    });
    /*-----Add Work Modal Update Scripts-----*/
    $('#editCV').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var name = button.data('name')
        var location = button.data('location')
        var phone = button.data('phone')
        var email = button.data('email')
        var summary = button.data('summary')
        var title = button.data('title')
        var company = button.data('company')
        var texts = button.data('texts')
        var dates = button.data('dates')
        var modal = $(this)
        modal.find('.modal-title').text('Add Work Experience')
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #location').val(location);
        modal.find('.modal-body #phone').val(phone);
        modal.find('.modal-body #email').val(email);
        modal.find('.modal-body #summary').val(summary);
        modal.find('.modal-body #title').val(title);
        modal.find('.modal-body #company').val(company);
        modal.find('.modal-body #texts').val(texts);
        modal.find('.modal-body #dates').val(dates);

    });
	</script>
</body>
</html>
