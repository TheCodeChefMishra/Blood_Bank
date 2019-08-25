<?php 
include "connection.php";
  if(isset($_POST['submit']))
  {
	 $bankname=$_POST['bankname'];
	 $bankcontactnumber=$_POST['bankcontactnumber'];
	 $aadharnumber=$_POST['aadharnumber'];
	 $password=$_POST['password'];
	 
	 
	 $bq="insert into adminlogin(bloodbankname,contactno,aadharnumber,password) value('$bankname','$bankcontactnumber','$aadharnumber','$password')";
      mysqli_query($conn,$bq) or die("query not executed");
  }
		  if(isset($_POST['save']))
		  {
			  $aadharnumber=$_POST['aadharnumber'];
			  $upassword=$_POST['upassword'];
			echo   $q="select * from adminlogin where aadharnumber='".$aadharnumber."' and password='".$upassword."'";
			  $fet=mysqli_query($conn,$q) or die("query not made");
			  $count=mysqli_num_rows($fet);
			 
			  if($count>=1)
			  {
				   $sess=mysqli_fetch_array($fet);
			       $_SESSION['aadharnumber']=$sess['aadharnumber'];
			  
				  header('location:dashboard.php');
				  
			  }		  
			  else
			  {
				  echo "incorrect username or password";
			  }
		  }
 ?>   
   
   
   <html>     
     <head>
		<link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"></link>
		 <link href="blood_bankadmin.css" rel="stylesheet" type="text/css"></link>
		 <link href="menustyles.css" rel="stylesheet" type="text/css"></link>
		  <script src="dist/js/jquery-3.2.1.js"></script>
		  <script src="dist/js/menuscript.js"></script>
		 <script src="dist/js/bootstrap.min.js"></script>
		 <link href="font/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
		 <link href="animation/css/libs/animate.css" rel="stylesheet"/>
		 <script src="animation/dist/wow.min.js"></script>
		  </head>
		  <body>
		  <div class="container-fluid header">
		 
		    <div class="col-md-6"> 
			 <center><h1>Registration</h1></center>
			 <div class="col-md-offset-2 col-md-8" style="margin-top:40px; margin-bottom:40px;">
			    <form role="form" method="post">
					
					<label>BloodBank name/Donor</label>
					<input type="text" name="bankname" class="form-control" placeholder="BloodBank name/donor"/><br>
					<label>Contact Number</label>
					<input type="number" name="bankcontactnumber" class="form-control" placeholder="Contact-no"/><br>
					<label>Aadhar-Card Number</label>
					<input type="number" name="aadharnumber"  class="form-control" placeholder="Aadhar-Card Number"/><br>
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password"/><br>
				    <input type="submit"  name="submit" class="btn btn-success" style="margin-top:20px;"/>
					</form>
			   </div>
			 </div>
		    <div class="col-md-6"><center><h1>Login</h1> </center>
			    <div class="col-md-offset-2 col-md-8" style="margin-top:60px; margin-bottom:40px;">
			       <form role="form" method="post">
						
						<label>Aadhar-Card Number</label>
						<input type="number" name="aadharnumber" class="form-control" placeholder="Aadhar-Card Number"/><br>
						<label>Password</label>
						<input type="password" name="upassword" class="form-control" placeholder="Password"/>
						
						<button type="submit" value="save"  name="save" class="btn btn-success" style="margin-top:20px;">Save</button>
						</form>
						</div>
			 </div>
		   </div>
		  
		  </body>
		 </html>