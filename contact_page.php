<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Onik Td</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
	<style>

.container {
  position: relative;
  text-align: center;
  color: white;
}
	
	.fa {
  padding: 5px;
font-size: 18px;
width: 33px;
text-align: center;
text-decoration: none;
border-radius: 5px;
}

.fa:hover {
    opacity: 0.9;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-facebook:hover {
  background: #dddddd;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-twitter:hover {
  background: #dddddd;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
}
.fa-linkedin:hover {
  background: #dddddd;
  color: white;
}

.fa-youtube {
  background: #c30000;
  color: white;
}
.fa-youtube:hover {
  background: red;
  color: white;
}
.fa-instagram {
  background: #125688;
  color: white;
}
.fa-pinterest {
  background: #cb2027;
  color: white;
}
	
	</style>
</head>
<body>
<nav class="navbar navbar-expand bg-dark navbar-dark">

    <div class="container">
        <a href="" class="navbar-brand">Onik Td</a>
        
        <ul class="navbar-nav mx-auto">
            <li><a href="home.html" class="nav-link">Home</a></li>
            <li><a href="index.html" class="nav-link">About</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Garments</a>
                <ul class="dropdown-menu">
                    <li><a href="merchandising.html" class="dropdown-item">Merchandising</a></li>
                    <li><a href="cad" class="dropdown-item">CAD</a></li>
                    <li><a href="Sample.html" class="dropdown-item">Sample</a></li>
                    <li><a href="Store.html" class="dropdown-item">Store</a></li>
                    <li><a href="Production Planning.html" class="dropdown-item">Production Planning</a></li>
                    <li><a href="Cutting.html" class="dropdown-item">Cutting</a></li>
                    <li><a href="Sewing.html" class="dropdown-item">Sewing</a></li>
                    <li><a href="Wash.html" class="dropdown-item">Wash</a></li>
                    <li><a href="Finishing.html" class="dropdown-item">Finishing</a></li>
                </ul>
            </li>
            <li><a href="contact_page.php" class="nav-link">Contact</a></li>
            <li><a href="career_page.php" class="nav-link">Career</a></li>
            <li><a href="login.html" class="nav-link">Login</a></li>
        </ul>

<!-- clock start -->
<canvas id="canvas" width="100" height="100"
        style="background-color:#222121">
        </canvas>
        
        <script>
        var canvas = document.getElementById("canvas");
        var ctx = canvas.getContext("2d");
        var radius = canvas.height / 2;
        ctx.translate(radius, radius);
        radius = radius * 0.90
        setInterval(drawClock, 1000);
        
        function drawClock() {
          drawFace(ctx, radius);
          drawNumbers(ctx, radius);
          drawTime(ctx, radius);
        }
        
        function drawFace(ctx, radius) {
          var grad;
          ctx.beginPath();
          ctx.arc(0, 0, radius, 0, 2*Math.PI);
          ctx.fillStyle = 'white';
          ctx.fill();
          grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
          grad.addColorStop(0, '#333');
          grad.addColorStop(0.5, 'white');
          grad.addColorStop(1, '#333');
          ctx.strokeStyle = grad;
          ctx.lineWidth = radius*0.1;
          ctx.stroke();
          ctx.beginPath();
          ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
          ctx.fillStyle = '#333';
          ctx.fill();
        }
        
        function drawNumbers(ctx, radius) {
          var ang;
          var num;
          ctx.font = radius*0.15 + "px arial";
          ctx.textBaseline="middle";
          ctx.textAlign="center";
          for(num = 1; num < 13; num++){
            ang = num * Math.PI / 6;
            ctx.rotate(ang);
            ctx.translate(0, -radius*0.85);
            ctx.rotate(-ang);
            ctx.fillText(num.toString(), 0, 0);
            ctx.rotate(ang);
            ctx.translate(0, radius*0.85);
            ctx.rotate(-ang);
          }
        }
        
        function drawTime(ctx, radius){
            var now = new Date();
            var hour = now.getHours();
            var minute = now.getMinutes();
            var second = now.getSeconds();
            //hour
            hour=hour%12;
            hour=(hour*Math.PI/6)+
            (minute*Math.PI/(6*60))+
            (second*Math.PI/(360*60));
            drawHand(ctx, hour, radius*0.5, radius*0.07);
            //minute
            minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
            drawHand(ctx, minute, radius*0.8, radius*0.07);
            // second
            second=(second*Math.PI/30);
            drawHand(ctx, second, radius*0.9, radius*0.02);
        }
        
        function drawHand(ctx, pos, length, width) {
            ctx.beginPath();
            ctx.lineWidth = width;
            ctx.lineCap = "round";
            ctx.moveTo(0,0);
            ctx.rotate(pos);
            ctx.lineTo(0, -length);
            ctx.stroke();
            ctx.rotate(-pos);
        }
        </script>
        
<!-- clock end -->


<body onload="initClock()">
  <!--digital clock start-->
  <div class="datetime">
     <div class="time">
      <span id="hour">00</span>:
      <span id="minutes">00</span>:
      <span id="seconds">00</span>
      <span id="period">AM</span>
    </div> 
    <div class="date">
      <span id="dayname">Day</span>,
      <span id="month">Month</span>
      <span id="daynum">00</span>,
      <span id="year">Year</span>
    </div>
  </div>
  <!--digital clock end-->

  <script type="text/javascript">
  function updateClock(){
    var now = new Date();
    var dname = now.getDay(),
        mo = now.getMonth(),
        dnum = now.getDate(),
        yr = now.getFullYear(),
        hou = now.getHours(),
        min = now.getMinutes(),
        sec = now.getSeconds(),
        pe = "AM";

        if(hou >= 12){
          pe = "PM";
        }
        if(hou == 0){
          hou = 12;
        }
        if(hou > 12){
          hou = hou - 12;
        }

        Number.prototype.pad = function(digits){
          for(var n = this.toString(); n.length < digits; n = 0 + n);
          return n;
        }

        var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
        var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
        var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
        for(var i = 0; i < ids.length; i++)
        document.getElementById(ids[i]).firstChild.nodeValue = values[i];
  }

  function initClock(){
    updateClock();
    window.setInterval("updateClock()", 1);
  }
  </script>
   </div>

    </div>
</nav>

<div class="">
    <div class="w3-row-padding">
      <div class="w3-col s4 text-center py-4">
        <h4>Contact</h4>
  
      </div>
          
          <div class="col-lg-6 m-auto">
            <form action="pm/contact.php" method="post">

              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="input" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Phone No</label>
                <input type="phone" class="form-control" name="phone_no" placeholder="Enter Your Phone No">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Message</label>
            <textarea name="message" class="form-control"></textarea>   
           </div>


            <div class="col-lg-12 pt-3">
                                        <?php
                                           if (isset($_SESSION['success'])) {
                                         ?>
                                      <div class="alert alert-success text-success">
                                        <?php
                                        echo $_SESSION['success'];
                                        session_unset();
                                         ?>
                                      </div>
                                      <?php } ?>
                                      </div> 



              <div class="pt-3 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
  
  

          </div>
          <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
