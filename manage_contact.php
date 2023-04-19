<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'garments-management';


$db_connection = mysqli_connect($hostname,$username,$password,$dbname);

$select_query = "SELECT * FROM contact";
$result = mysqli_query($db_connection,$select_query);


if($db_connection) {
  if(isset($_GET["action"]) && $_GET["action"] == "delete") {
    $id = $_GET["id"];
    $query = "DELETE FROM contact WHERE id = $id";
    $result = mysqli_query($db_connection, $query);
    if(!empty($result))
      showMedicinesStock("0");
  }
}
 //$s=mysql_query("SELECT * FROM  customar_info where source_point='$_SESSION[source_point]' && destination_point='$_SESSION[destination]'");
$count = 0;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manage Contact</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/manage_customer.js"></script>
    <script src="js/validateForm.js"></script>
    <script src="js/restrict.js"></script>
  </head>
  <body style="max-height: 100%;">
    <!-- including side navigations -->
    <?php include("sections/sidenav.html"); ?>

    <div class="container-fluid">
      <div class="container">

        <!-- header section -->
        <?php
          require "php/header.php";
          createHeader('	fa fa-address-card', 'Manage Contact', 'Manage Existing Contact');
        ?>
        <!-- header section end -->

        <!-- form content -->
        <div class="row">

          <div class="col-md-12 form-group form-inline">
            <label class="font-weight-bold" for="">Search :&emsp;</label>
            <input type="text" class="form-control" id="" placeholder="Search Customer" onkeyup="searchCustomer(this.value);">
          </div>

          <div class="col col-md-12">
            <hr class="col-md-12" style="padding: 0px; border-top: 2px solid  #02b6ff;">
          </div>

          <div class="col col-md-12 table-responsive">
            <div class="table-responsive">
            	<table class="table table-bordered table-striped table-hover">
            		<thead>
            			<tr>
            				<th style="width: 2%;">SL.</th>
                    <th style="width: 10%;">ID</th>
            				<th style="width: 13%;">Name</th>
                    <th style="width: 13%;">Email</th>
                    <th style="width: 17%;">Phone No</th>
                    <th style="width: 13%;">Message</th>
                    <th style="width: 15%;">Action</th>
                
            			</tr>
                  <?php
             foreach ($result as $value) {
             ?>

             <tr>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['phone_no']; ?></td>
            <td><?php echo $value['message']; ?></td>
            
            <td>
              <a href=""> <button type="button" class="btn btn-primary btn-sm">View</button> </a>
              <a href=""> <button type="button" class="btn btn-danger btn-sm" onclick="deleteMedicineStock(<?php echo $v['id']; ?>);">Delete</button> </a>
            </td>
            <?php } ?>
            		</thead>
            		<tbody id="customers_div">
                  <!-- <?php
                     require 'pm/manage_contact.php';
                    showCustomers(0);
                  ?> -->
            		</tbody>
            	</table>
            </div>
          </div>

        </div>
        <!-- form content end -->
        <hr style="border-top: 2px solid #ff5252;">
      </div>
    </div>
  </body>
</html>
