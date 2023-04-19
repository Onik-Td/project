<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'garments-management';


$db_connection = mysqli_connect($hostname,$username,$password,$dbname);

$select_query = "SELECT * FROM application_form";
$result = mysqli_query($db_connection,$select_query);


if($db_connection) {
  if(isset($_GET["action"]) && $_GET["action"] == "delete") {
    $id = $_GET["id"];
    $query = "DELETE FROM application_form WHERE id = $id";
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
    <title>Manage Career</title>
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
          createHeader('	fa fa-address-card', 'Manage Career', 'Manage Existing Career');
        ?>
        <!-- header section end -->

        <!-- form content -->
        <div class="row">

          <div class="col-md-12 form-group form-inline">
            <label class="font-weight-bold" for="">Search :&emsp;</label>
            <input type="text" class="form-control" id="" placeholder="Search " onkeyup="searchCustomer(this.value);">
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
                    <th style="width: 2%;"> ID</th>
            				<th style="width: 10%;">First_Name</th>
                    <th style="width: 15%;">Last_Name</th>
                    <th style="width: 17%;">Fathers_Name</th>
                    <th style="width: 13%;">Mothers_Name</th>
                    <th style="width: 13%;">Date_of_Birth</th>
                    <th style="width: 13%;">Gender</th>
                    <th style="width: 13%;">Religion</th>
                    <th style="width: 10%;">Marital_Status</th>
                    <th style="width: 15%;">Blood_Group</th>
                    <th style="width: 17%;">Country</th>
                    <th style="width: 13%;">Division</th>
                    <th style="width: 13%;">District</th>
                    <th style="width: 13%;">Phone</th>
                    <th style="width: 13%;">Email</th>
                    <th style="width: 10%;">Level_of_Education</th>
                    <th style="width: 15%;">Degree_Title</th>
                    <th style="width: 17%;">Result</th>
                    <th style="width: 13%;">Passing_Year</th>
                    <th style="width: 13%;">Skill</th>
                    <th style="width: 13%;">company_Name</th>
                    <th style="width: 13%;">Company_Business</th>
                    <th style="width: 10%;">Company_Location</th>
                    <th style="width: 15%;">Designation</th>
                    <th style="width: 17%;">Department</th>
                    <th style="width: 13%;">Responsibilities</th>
                    <th style="width: 13%;">Joining_From_Date</th>
                    <th style="width: 13%;">Joining_To_Date</th>
                    <th style="width: 13%;">Select_your_Position</th>
                    <th style="width: 13%;">Upload_File</th>
                    <th style="width: 15%;">Action</th>
            			</tr>
                  <?php
             foreach ($result as $value) {
             ?>

             <tr>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['First_Name']; ?></td>
            <td><?php echo $value['Last_Name']; ?></td>
            <td><?php echo $value['Fathers_Name']; ?></td>
            <td><?php echo $value['Mothers_Name']; ?></td>
            <td><?php echo $value['Date_of_Birth']; ?></td>
            <td><?php echo $value['Gender']; ?></td>
            <td><?php echo $value['Religion']; ?></td>
            <td><?php echo $value['Marital_Status']; ?></td>
            <td><?php echo $value['Blood_Group']; ?></td>
            <td><?php echo $value['Country']; ?></td>
            <td><?php echo $value['Division']; ?></td>
            <td><?php echo $value['District']; ?></td>
            <td><?php echo $value['Phone']; ?></td>
            <td><?php echo $value['Email']; ?></td>
            <td><?php echo $value['Level_of_Education']; ?></td>
            <td><?php echo $value['Degree_Title']; ?></td>
            <td><?php echo $value['Result']; ?></td>
            <td><?php echo $value['Passing_Year']; ?></td>
            <td><?php echo $value['Skill']; ?></td>
            <td><?php echo $value['company_Name']; ?></td>
            <td><?php echo $value['Company_Business']; ?></td>
            <td><?php echo $value['Company_Location']; ?></td>
            <td><?php echo $value['Designation']; ?></td>
            <td><?php echo $value['Department']; ?></td>
            <td><?php echo $value['Responsibilities']; ?></td>
            <td><?php echo $value['Joining_From_Date']; ?></td>
            <td><?php echo $value['Joining_To_Date']; ?></td>
            <td><?php echo $value['Select_your_Position']; ?></td>
            <td><?php echo $value['Upload_File']; ?></td>
 
            <td>
              <a href=""> <button type="button" class="btn btn-primary btn-sm">View</button> </a>
              <a href=""> <button type="button" class="btn btn-danger btn-sm" onclick="deleteMedicineStock(<?php echo $v['id']; ?>);">Delete</button> </a>
            </td>
            <?php } ?>
            		</thead>
            		<tbody id="customers_div">
                  <!-- <?php
                     require 'pm/manage_career.php';
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
