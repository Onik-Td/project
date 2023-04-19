<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Onik Td</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <style>
        .container {
  position: relative;
  text-align: center;
  color: white;
}
    </style> -->
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
                    <li><a href="cad.html" class="dropdown-item">CAD</a></li>
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

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2  class="text-center">Application Form</h2>
                    </div>

            <!-- <p><span class="text-center">Personal Informatioin</span></p>
             -->
                    <h4 style="background-color: rgb(148, 148, 245);" class="text-center">Personal Information</h4>
                    <div class="card-body">
                        <form action="pm/career.php" method="post">
                            <div class="row mt-2">
                                <label for="" class="col-md-4">First Name : </label>
                                <div class="col-md-8">
                                    <input type="text" name="First_Name" placeholder="Enter First_Name" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Last Name : </label>
                                <div class="col-md-8">
                                    <input type="text" name="last_Name" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Father's Name : </label>
                                <div class="col-md-8">
                                    <input type="text" name="Fathers_Name" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Mother's Name : </label>
                                <div class="col-md-8">
                                    <input type="text" name="Mothers_Name" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Date of Birth : </label>
                                <div class="col-md-8">
                                    <input type="date" name="Date_of_Birth" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Gender : </label>
                                <div class="col-md-8">
                    
                                    <select name="Gender" id="" class="form-control">
                                        <option value="" selected>Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>                                       
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Religion: </label>
                                <div class="col-md-8">
                    
                                    <select name="Religion"  id="txtReligion" class="form-control" onchange="changeReligionView()">
                                        <option value="" selected>Select</option>
                                        <option value="Buddhism" >Buddhism</option>
                                        <option value="Christianity" >Christianity</option>
                                        <option value="Hinduism" >Hinduism</option>
                                        <option value="Islam" >Islam</option>
                                        <option value="Jainism" >Jainism</option>
                                        <option value="Judaism" >Judaism</option>
                                        <option value="Sikhism" >Sikhism</option>
                                        <option value="Others" >Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Marital Status : </label>
                                <div class="col-md-8">
                    
                                    <select name="Marital_Status" id="cboMStatus" class="form-control" >
                                        <option value="" selected="">Select</option>
                                        <option value="2" >Unmarried</option>
                                        <option value="1" > Married </option>
                                        <option value="3" > Single </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Blood Group : </label>
                                <div class="col-md-8">
                    
                                    <select name="Blood_Group" id="cboMStatus" class="form-control" >
                                        <option value="" selected="">Select</option>
                                        <option value="A+" >A(+ve)</option>
                                            <option value="A-" >A(-ve)</option>
                                            <option value="B+" >B(+ve)</option>
                                            <option value="B-" >B(-ve)</option>
                                            <option value="O+" >O(+ve)</option>
                                            <option value="O-" >O(-ve)</option>
                                            <option value="AB+" >AB(+ve)</option>
                                            <option value="AB-" >AB(-ve)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Country : </label>
                                <div class="col-md-8">
                    
                                    <select name="Country" id="" class="form-control">
                                        <option value="" selected>Select</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                     
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Division : </label>
                                <div class="col-md-8">
                    
                                    <select name="Division" id="" class="form-control">
                                        <option value="" selected>Select</option>
                                        <option value="">Dhaka</option>
                                        <option value="">Khulna</option>
                                        <option value="">Rajshahi</option>
                                        <option value="">Chattogram</option>
                                        <option value="">Sylhet</option>
                                        <option value="">Mymensingh</option>
                                        <option value="">Barishal</option>
                                        <option value="">Rangpur</option>
                                    
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row mt-2">
                                <label for="" class="col-md-4">District : </label>
                                <div class="col-md-8">
                                    <!-- <input type="text" name="address" class="form-control"> -->
                                    <select name="District" id="" class="form-control">
                                        <option value="" selected="">Select District</option>
 <option value='1'>Brahmanbaria</option><option value='2'>Bagerhat</option><option value='3'>Bandarban</option>
 <option value='4'>Barishal</option><option value='5'>Bhola</option><option value='6'>Bogura</option>
 <option value='7'>Barguna</option><option value='8'>Chandpur</option><option value='9'>Chapainawabganj</option>
 <option value='10'>Chattogram</option><option value='11'>Chuadanga</option><option value='12'>Cumilla</option>
 <option value='13'>Cox's Bazar</option><option value='14'>Dhaka</option><option value='15'>Dinajpur</option>
 <option value='16'>Faridpur</option><option value='17'>Feni</option><option value='18'>Gaibandha</option>
 <option value='19'>Gazipur</option><option value='20'>Gopalganj</option><option value='21'>Habiganj</option>
 <option value='22'>Jamalpur</option><option value='23'>Jashore</option><option value='24'>Jhalakathi</option>
 <option value='25'>Jhenaidah</option><option value='26'>Joypurhat</option><option value='27'>Khagrachhari</option>
 <option value='28'>Khulna</option><option value='29'>Kishoreganj</option><option value='30'>Kurigram</option>
 <option value='31'>Kushtia</option><option value='32'>Lalmonirhat</option><option value='33'>Laksmipur</option>
 <option value='34'>Madaripur</option><option value='35'>Magura</option><option value='36'>Manikganj</option>
 <option value='37'>Meherpur</option><option value='38'>Moulvibazar</option><option value='39'>Munshiganj</option>
 <option value='40'>Mymensingh</option><option value='41'>Naogaon</option><option value='42'>Narail</option>
 <option value='43'>Narayanganj</option><option value='44'>Narsingdi</option><option value='45'>Natore</option>
 <option value='46'>Netrokona</option><option value='47'>Nilphamari</option><option value='48'>Noakhali</option>
 <option value='49'>Pabna</option><option value='50'>Panchagarh</option><option value='51'>Patuakhali</option>
 <option value='52'>Pirojpur</option><option value='53'>Rajbari</option><option value='54'>Rajshahi</option>
 <option value='55'>Rangamati</option><option value='56'>Rangpur</option><option value='57'>Satkhira</option>
 <option value='58'>Shariatpur</option><option value='59'>Sherpur</option><option value='60' >Sirajganj</option>
 <option value='61'>Sunamganj</option><option value='62'>Sylhet</option><option value='63'>Tangail</option>
 <option value='64'>Thakurgaon</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Phone : </label>
                                <div class="col-md-8">
                                    <input type="number" name="Phone" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Email : </label>
                                <div class="col-md-8">
                                    <input type="email" name="Email" class="form-control">
                                </div>
                            </div>
                              
                                      <!-- Education -->
                            <h4 style="background-color: rgb(148, 148, 245);" class="text-center">Education</h4>

                            
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Level of Education : </label>
                                <div class="col-md-8">
                            <select required="required" class="form-control" name="Level_of_Education" id="cboEduLevel" onchange="getEduTitle(this,'','','');"><option value="-3">PSC/5 pass</option>
                                <option value="" selected="">Select</option>
                                <option value="0">JSC/JDC/8 pass</option>
                                <option value="1">Secondary</option>
                                <option value="2">Higher Secondary</option>
                                <option value="3">Diploma</option>
                                <option value="4">Bachelor/Honors</option>
                                <option value="5">Masters</option>
                                <option value="6">PhD (Doctor of Philosophy)</option></select>
                        
                            </div>
                        </div>

                        <div class="row mt-2">
                            <label for="" class="col-md-4">Degree Title : </label>
                            <div class="col-md-8">
                                <!-- Bachelor/Honors -->
                        <select class="form-control aria-disabled" name="Degree_Title" id="txtExamTitle" onchange="DisableOtherEduType();">
                            <option value="Bachelor of Science (BSc)">Bachelor of Science (BSc)</option>
                            <option value="Bachelor of Arts (BA)">Bachelor of Arts (BA)</option>
                            <option value="Bachelor of Commerce (BCom)">Bachelor of Commerce (BCom)</option>
                            <option value="Bachelor of Commerce (Pass)">Bachelor of Commerce (Pass)</option>
                            <option value="Bachelor of Business Administration (BBA)">Bachelor of Business Administration (BBA)</option>
                            <option value="Bachelor of Medicine and Bachelor of Surgery(MBBS)">Bachelor of Medicine and Bachelor of Surgery(MBBS)</option>
                            <option value="Bachelor of Dental Surgery (BDS)">Bachelor of Dental Surgery (BDS)</option>
                            <option value="Bachelor of Architecture (B.Arch)">Bachelor of Architecture (B.Arch)</option>
                            <option value="Bachelor of Pharmacy (B.Pharm)">Bachelor of Pharmacy (B.Pharm)</option>
                            <option value="Bachelor of Education (B.Ed)">Bachelor of Education (B.Ed)</option>
                            <option value="Bachelor of Physical Education (BPEd)">Bachelor of Physical Education (BPEd)</option>
                            <option value="Bachelor of Law (LLB)">Bachelor of Law (LLB)</option>
                            <option value="Doctor of Veterinary Medicine (DVM)">Doctor of Veterinary Medicine (DVM)</option>
                            <option value="Bachelor of Social Science (BSS)">Bachelor of Social Science (BSS)</option>
                            <option value="Bachelor of Fine Arts (B.F.A)">Bachelor of Fine Arts (B.F.A)</option>
                            <option value="Bachelor of Business Studies (BBS)">Bachelor of Business Studies (BBS)</option>
                            <option value="Bachelor of Computer Application (BCA)">Bachelor of Computer Application (BCA)</option>
                            <option value="Fazil (Madrasah Hons.)">Fazil (Madrasah Hons.)</option>
                            <option value="Bachelor in Engineering (BEngg)">Bachelor in Engineering (BEngg)</option>
                            <option value="Bachelor of Science (Pass)">Bachelor of Science (Pass)</option>
                            <option value="Bachelor of Arts (Pass)">Bachelor of Arts (Pass)</option>
                            <option value="Bachelor of Law (Pass)">Bachelor of Law (Pass)</option>
                            <option value="Bachelor of Social Science (Pass)">Bachelor of Social Science (Pass)</option>
                            <option value="Bachelor of Business Studies (Pass)">Bachelor of Business Studies (Pass)</option>
                            <option value="Fazil (Madrasah Pass)">Fazil (Madrasah Pass)</option>
                            <option value="others" undefined="">Other</option>
                        </select>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <label for="" class="col-md-4">Result : </label>
                        <div class="col-md-8">
                            <input type="" name="Result" class="form-control">
                           
                        </div>
                    </div>

                    <div class="row mt-2">
                        <label for="" class="col-md-4">Passing Year : </label>
                        <div class="col-md-8">
<select class="form-control" name="Passing_Year" id="cboPassingYear"><option value="" selected="">Year</option>
    <option value="2028">2028</option><option value="2027">2027</option><option value="2026">2026</option>
    <option value="2025">2025</option><option value="2024">2024</option><option value="2023">2023</option>
    <option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option>
    <option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option>
    <option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option>
    <option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option>
    <option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option>
    <option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option>
    <option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option>
    <option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option>
    <option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option>
    <option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option>
    <option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option>
    <option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option>
    <option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option>
    <option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option>
    <option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option>
    <option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option>
    <option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option>
    <option value="1971">1971</option><option value="1970">1970</option>
    <option value="1969">1969</option><option value="1968">1968</option></select>
                        </div>
                    </div>
                    
                    <div class="row mt-2">
                        <label for="" class="col-md-4">Skill : </label>
                        <div class="col-md-8"  >
                            <textarea id="txtDuty" name="Skill" cols="30" rows="4" class="form-control "></textarea>
                            
                        </div>

                          <!-- Experience -->

                    <h4 style="background-color: rgb(148, 148, 245);" class="text-center">Add Experience </h4>
                    
                        <div class="row mt-2">
                        <label for="" class="col-md-4">company Name :</label>
                        <div class="col-md-8">
                            <input type="text" name="company_Name" class="form-control">
                        </div>
                        </div>

                        <div class="row mt-2">
                            <label for="" class="col-md-4">Company Business : </label>
                            <div class="col-md-8">
                                <input type="text" name="Company_Business" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Company Location : </label>
                            <div class="col-md-8">
                                <input type="text" name="Company_Location" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Designation :</label>
                            <div class="col-md-8">
                                <input type="text" name="Designation" class="form-control">
                            </div>
                            </div>
    
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Department  : </label>
                                <div class="col-md-8">
                                    <input type="text" name="Department" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Responsibilities : </label>
                                <div class="col-md-8"  >
                                    <textarea id="txtDuty" name="Responsibilities" cols="30" rows="4" class="form-control "></textarea>
                                    
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Joining From Date : </label>
                                <div class="col-md-8">
                                    <input type="date" name="Joining_From_Date" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Joining To Date : </label>
                                <div class="col-md-8">
                                    <input type="date" name="Joining_To_Date" class="form-control">
                                </div>
                            </div>
                           <!-- Apply Post -->
                           <h4 style="background-color: rgb(148, 148, 245);" class="text-center">Apply : </h4>
                           <div class="row mt-2">
                            <label for="" class="col-md-4">Select your Position : </label>
                            <div class="col-md-8">
                                
                                <select name="Select_your_Position" id="selected_Cat" class="form-control from-control-login">
                                    <option value="" selected="">Select</option>
                                    <option value="1">Accounting/Finance</option>
                                    <option value="2">Bank/Non-Bank Fin. Institution</option>
                                    <option value="3">Supply Chain/Procurement</option>
                                    <option value="4">Education/Training</option>
                                    <option value="5">Engineer/Architect</option>
                                    <option value="6">Garments/ Textile</option>
                                    <option value="7">General Management/Admin</option>
                                    <option value="8">IT/Telecommunication</option>
                                    <option value="9">Marketing/Sales</option>
                                    <option value="10">Media/Advertisement/Event Mgt.</option>
                                    <option value="11">Medical/Pharma</option>
                                    <option value="12">NGO/Development</option>
                                    <option value="13">Research/Consultancy</option>
                                    <option value="14">Secretary/Receptionist</option>
                                    <option value="15">Data Entry/Operator/BPO</option>
                                    <option value="16">Customer Service/Call Centre</option>
                                    <option value="17">HR/Org. Development</option>
                                    <option value="18">Design/Creative</option>
                                    <option value="19">Production/Operation</option>
                                    <option value="20">Hospitality/ Travel/ Tourism</option>
                                    <option value="21">Beauty Care/ Health &amp; Fitness</option>
                                    <option value="22">Law/ Legal</option>
                                    <option value="23">Electrician/ Construction/ Repair</option>
                                    <option value="24">Security/Support Service</option>
                                    <option value="25">Driving/Motor Technician</option>
                                    <option value="26">Agro (Plant/Animal/Fisheries)</option>
                                    <option value="27">Commercial</option></select>
    
                            </div>
                        </div>  

                        <div class="row mt-2">
                            <label for="" class="col-md-4">Upload File : </label>
                            <div class="col-md-8">
                                <input type="file" name="Upload_File" class="form-control">
                            </div>
                        </div>
                     
                        

                            <div class="row mt-2">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" class="btn btn-success" value="Save data">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/bootstrap.bundle.js"></script>
</body>
</html>