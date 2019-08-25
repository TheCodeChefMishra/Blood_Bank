<?php 
error_reporting(0);
include "connection.php";


  if(isset($_POST['submit']))
  {
	 $bankname=$_POST['bankname'];
	 $bankcontactnumber=$_POST['bankcontactnumber'];
	 $aadharnumber=$_POST['aadharnumber'];
	 $password=$_POST['password'];
	 $Bd=$_POST['Bd'];
	 
	 $bq="insert into registration(bloodbankname,contactno,aadharnumber,password,category) value('$bankname','$bankcontactnumber','$aadharnumber','$password','$Bd')";
      mysqli_query($conn,$bq) or die("query not executed");
  }
		  if(isset($_POST['save']))
		  {
			  $aadharnumber=$_POST['aadharnumber'];
			  $upassword=$_POST['upassword'];
			echo   $q="select * from registration where aadharnumber='".$aadharnumber."' and password='".$upassword."'";
			  $fet=mysqli_query($conn,$q) or die("query not made");
			  $count=mysqli_num_rows($fet);
			 
			  if($count>=1)
			  {
				   $sess=mysqli_fetch_array($fet);
			       $_SESSION['aadharnumber']=$sess['aadharnumber'];
			  
				  header('location:bloodlogin.php');
			  }		 
			  else
			  {
				  echo "incorrect username or password";
			  }
		  }
		 
          if(isset($_POST['submit']))     
		  {   
			$category_array=implode(",",$_POST['category']);
			echo $category_array;
			
			  $name=$_POST['appliername'];
			   $email=$_POST['appliermail'];
			   $contact_no=$_POST['conatact'];
			    $addharnumber=$_POST['aadharnumber'];
			     $reason=$_POST['reason'];
				  $category=$category_array;
			 $qa="insert into applier(name,email,contact_no,addharnumber,reason,category) value('$name','$email','$contact_no','$addharnumber','$reason','$category')";
			 
		mysqli_query($conn,$qa);
     
		  }
		  
 ?>
<html>
<head>
      <title>bloodBank</title>
    
		 <?php include "link.php"; ?>
 </head>
  <body>
         
		  <!-- start header -->
		  
		  
		  <div class="container-fluid header">
           <div class="container" style="margin-top:20px;">
		    
			
           <!-- navbar start-->
		   
	 <?php include "nav.php"; ?>
						
				 </div>
				 
				 <!-- navbar end-->
			   
			  </div>  
			   
          <!-- end of header-->
		  
		  
	   <!--section part-2 start about-us-->
	 
     <div class="container-fluid">
	  <div class="container section1">
	   <div class="col-md-6">
	     <div class="row">
		   <center><h2 style="font-family:Sans Serif">ABOUT-US</h2></center>
		      <div class="row">
			    <div  class="txt1">
				 A blood bank is a center where blood gathered as a result of blood donation is stored and preserved 
				 for later use in blood transfusion. The term "blood bank" typically refers to 
				 a division of a hospital where the storage of blood product occurs and where proper 
				 testing is performed (to reduce the risk of transfusion related adverse events)
				 . However, it sometimes refers to a collection center, and indeed some hospitals also perform collection.
				  
			 </div>
			 </div>
		  </div>
	   </div>
	      
		  <!-- img part  start of section part2 about-us -->
	        
			  <div class="col-md-offset-1 col-md-5" style="margin-top:30px;">
	             <div class="panel panel-primary">
				   <div class="panel-heading"><center>News</center></div>
				   
				  </div>
	        </div>
			
			<!-- img part end of section part2 about- us-->
	  </div>
	 </div>
	    
	   <!-- end of section part2 about-us-->
	   
	    
		<!--  start of section part3 table of blood bank-->
	 
	         <div class="container-fluid">
					<div class="container">
					  <table class="table">
						<thead>
						  <tr>
							<th>BloodBank</th>
							<th>Place</th>
							<th>Availble</th>
							<th>Apply</th>
						   </tr>
						 </thead>
						 <tbody>
						   <tr>
							 <td>Paras BloodBank</td>
							 <td>Jodhpur</td>
							 <td><b>A<sup>+</sup>,B<sup>+</sup>,O<sup>-</sup>,O<sup>+</sup></b></td>
							 <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalA">Apply</button></td>
							</tr>
							<tr>
							 <td>Ambika BloodBank</td>
							 <td>Jodhpur</td>
							 <td><b>A<sup>+</sup>,B<sup>+</sup>,O<sup>-</sup>,O<sup>+</sup></b></td>
							 <td><button type="button" class="btn btn-success"data-toggle="modal" data-target="#myModalR">Apply</button></td>
							  </tr>
							 <tr>
							 <td>Umaid BloodBank</td>
							 <td>Jodhpur</td>
							 <td><b>A<sup>+</sup>,B<sup>+</sup>,O<sup>-</sup>,O<sup>+</sup></b></td>
							 <td><button type="button" class="btn btn-success"data-toggle="modal" data-target="#myModalR">Apply</button></td>
							</tr>
							<tr>
							<td>A.K. Hospital Blood Bank</td>
							 <td>Ajmer</td>
							 <td><b>A<sup>+</sup>,B<sup>+</sup>,O<sup>-</sup>,O<sup>+</sup></b></td>
							 <td><button type="button" class="btn btn-success"data-toggle="modal" data-target="#myModalR">Apply</button></td>
							</tr>
							<tr>
							<td>Mittal Hospital and Research Centre Blood Bank  </td>
							 <td>Ajmer</td>
							 <td><b>A<sup>+</sup>,B<sup>+</sup>,O<sup>-</sup>,O<sup>+</sup></b></td>
							 <td><button type="button" class="btn btn-success"data-toggle="modal" data-target="#myModalR">Apply</button></td>
							</tr>
							<tr>
							<td>J.L.N. and A.G. Hospital Blood Bank </td>
							 <td>Ajmer</td>
							 <td><b>A<sup>+</sup>,B<sup>+</sup>,O<sup>-</sup>,O<sup>+</sup></b></td>
							 <td><button type="button" class="btn btn-success"data-toggle="modal" data-target="#myModalR">Apply</button></td>
							</tr>
							<tr>
							<td>Military Hospital Blood Bank </td>
							 <td>Ajmer</td>
							 <td><b>A<sup>+</sup>,B<sup>+</sup>,O<sup>-</sup>,O<sup>+</sup></b></td>
							 <td><button type="button" class="btn btn-success"data-toggle="modal" data-target="#myModalR">Apply</button></td>
							</tr>
						  </tbody>
					   </table>
					 </div>
	          </div>
			  
			  
			  <!-- end of section part3 table of blood bank-->
			  
			  <!-- start of section part4 img of blood bank-->
			    
	        <div class="container-fluid"style="margin-bottom:100px;">
	        <div class="container section2" >
	          <div class="col-md-4">
			    <img src="wpics/blood/blood-donation-world-blood-donor-day-2017_650x400_71497271213.jpg"  width="350px;"height="250px;"/>
			   </div>
	          <div class="col-md-4">
			     <img src="wpics/blood/blood-donation-1497337465.jpg" width="350px;"height="250px;"/>
			   </div>
	          <div class="col-md-4"> 
			      <img src="wpics/blood/bblood.jpg" width="350px;"height="250px;"/>
			   </div>
			   <div class="col-md-4">
			     <img src="wpics/blood/blood.jpg" width="350px;" height="350px;"/>
				</div>
			   <div class="col-md-4">
			         <img src="wpics/blood/blood-donors-day-poster-slogans.jpg" width="350px;" height="350px;"/>
				</div>
			   <div class="col-md-4">
			      <img src="wpics/blood/blood-donation-feature.jpg" width="350px;" height="350px;"/>
				 </div>
	       </div>
         </div>
		  
		  <!-- end of section part4 img of blood bank-->
		   
    <?php include "footer.php"; ?>
 </body>

</html>
                <!-- model1 login model -->


				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Login</h4>
					  </div>
					  <div class="modal-body">
						<form role="form" name="loginfrm" method="post">
						
						<label>Aadhar-ard Number</label>
						<input type="number" name="aadharnumber" class="form-control" placeholder="Aadhar-Card Number" /><br>
						<label>Password</label>
						<input type="password" name="upassword" class="form-control" placeholder="Password"  />
						
						<button type="submit" value="save" onclick="return loginvalid()" name="save" class="btn btn-success" style="margin-top:20px;">Save</button>
						</form>
					  </div>
					  
					</div>

				  </div>
				</div>
				<script>
				function loginvalid()
				{
					var anum=document.loginfrm.aadharnumber.value;
					var pass=document.loginfrm.upassword.value;
					if(anum=="")
					{
						alert("can't leave blank aadharnumber");
						return false;
					}
					if(pass=="")
					{
						alert("can't leave blank password");
					     return false;
					}
					var ab=12;
					var tt= (''+anum).length;

						  if(tt!=ab)
						  {
							  alert("enter valid aadharnumber");
							  return false;
						  }
				}
				</script>

 <!-- login model end-->
  
  <!--registration model start -->
    
	
				 <div id="myModalR" class="modal fade" role="dialog">
			  <div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Registration</h4>
				  </div>
				  <div class="modal-body">
					<form role="form" name="regisfrm" method="post">
					
					<label>BloodBank name/Donor</label>
					<input type="text" name="bankname" class="form-control" placeholder="BloodBank name"/><br>
					<label>Contact Number</label>
					<input type="number" name="bankcontactnumber" class="form-control" placeholder="Contact-no"  /><br>
					<label>Aadhar-Card Number</label>
					<input type="number" name="aadharnumber" value="<?php echo $_SESSION['aadharnumber']?>" class="form-control" placeholder="Aadhar-Card Number"/><br>
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password" /><br>
					<label>Category</label><br>
					 <input type="radio" value="bloodbank" name="Bd"/>&nbsp&nbsp<b>BloodBank</b>&nbsp&nbsp
					 <input type="radio" value="donor" name="Bd"/>&nbsp&nbsp<b>BloodDonor</b>
					<br><input type="submit"  name="submit" onclick="return regisvalid();" class="btn btn-success" style="margin-top:20px;"/>
					</form>
				  </div>
				  
				</div>

			  </div>
			</div>
			
<!-- registration model end-->
          <script>
				function regisvalid()
				{
					var name= document.regisfrm.bankname.value;
					var number= document.regisfrm.bankcontactnumber.value;
					var aadharnumber=document.regisfrm.aadharnumber.value;
					var pass= document.regisfrm.password.value;
					var bank= document.regisfrm.Bd.value;
					var donor=document.regisfrm.Bd.value;
					
					
					if(name=="")
					{
						alert("can't leave blank aadharnumber");
						return false;
					}
					if(number=="")
					{
						alert("can't leave blank contactnumber");
					     return false;
					}
					if(aadharnumber=="")
					{
						alert("can't leave blank aadharnumber");
						return false;
					}
					if(pass=="")
					{
						alert("can't leave blank password");
						return false;
					}
					if(!(bank&&donor))
					{
						alert("can't leave blank");
						return false;
					}
				
					var ab=12;
					var tt= (''+aadharnumber).length;

						  if(tt!=ab)
						  {
							  alert("enter valid aadharnumber");
							  return false;
						  }
				}
				
				</script>
  <!-- start apply -->
       <div id="myModalA" class="modal fade" role="dialog">
			  <div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Applier</h4>
				  </div>
				  <div class="modal-body">
					<form role="form" method="post">
					
					<label>Applier Name</label>
					<input type="text" name="appliername" class="form-control" placeholder="BloodBank name" required /><br>
					 <label>Email</label>
					 <input type="email" name="appliermail" class="form-control" placeholder="mail address" required /><br>
					<label>Contact Number</label>
					<input type="number" name="contact" class="form-control" placeholder="Contact-no" required /><br>
					<label>Aadhar-Card Number</label>
					<input type="number" name="aadharnumber" class="form-control" placeholder="Aadhar-Card Number" required /><br>
					<label>Reason</label>
					<input type="text" name="reason" class="form-control" placeholder="reason" required /><br>
					<label>category</label>
					<input type="checkbox" name="category[]" value="A+"/>A+
					<input type="checkbox" name="category[]" value="A-"/>A-
					<input type="checkbox" name="category[]" value="B+"/>B+
					 <input type="checkbox" name="category[]" value="B-"/>B-
					<input type="checkbox" name="category[]" value="O"/>O
					<input type="checkbox" name="category[]" value="AB"/>AB<br>
					<input type="submit"  name="submit" class="btn btn-success" style="margin-top:20px;"/>
					</form>
				  </div>
				  
				</div>

			  </div>  
			</div>
  <!-- end apply-->