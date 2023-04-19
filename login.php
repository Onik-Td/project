<?php
    $id = $_POST['id'];
    $pass = $_POST['pass'];
	
    $con = new mysqli("localhost","root","","garments-management");
			
    if($con->connect_error){
        die("Failed to connect:".$con->connect_error);
    }
    else{	
        $stmt = $con->prepare("select * from reg where id = ?");
        $stmt ->bind_param('s',$id);
        $stmt ->execute();
        $stmt_result = $stmt ->get_result();
        if($stmt_result->num_rows > 0){
               $data = $stmt_result->fetch_assoc();
            if($data['pass']=== $pass){
                // echo "<h2>Welcome</h2>";
               // echo "<a href='pm/home.php'>home</a>";
                header('Location: pm/home.php?');
               
            }
            else{
                echo "<h2>invalid ID or Passward</h2>";
            } 
        }
        else{
            echo "<h2>invalid ID or Passward</h2>";
        } 
    }
?>