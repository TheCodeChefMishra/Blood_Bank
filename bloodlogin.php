<?php
    include "connection.php";
  $aadharnumber=$_SESSION['aadharnumber'];
    $info="select * from registration where aadharnumber='".$aadharnumber."'";
	$data=mysqli_query($conn,$info) or die("not query");
	$info1=mysqli_fetch_array($data);
 ?>
 <html>
   <head>
   <?php include "link.php"; ?>
	 
	</head>
   <body>
     <?php include "nav.php"; ?>
						
				 
      <div class="container" style="margin-top:60px; margin-bottom:60px;">
	    <div class="col-md-offset-3 col-md-5">
	  <form role="form" method="post">
					
						  <label>BloodBank name/Donor</label>
						<input type="text" name="bankname" class="form-control" placeholder="BloodBank name/Donor" value="<?php echo $info1['bloodbankname']; ?>"/><br>
						<label>Contact Number</label>
						<input type="number" name="bankcontactnumber" class="form-control" placeholder="Contact-no" value="<?php echo $info1['contactno'];?>"/><br>
						<label>Aadhar-Card Number</label>
						<input type="number" name="aadharnumber" class="form-control" placeholder="Aadhar-Card Number" value="<?php echo $info1['aadharnumber'];?>"/><br>
						<label>Password</label>
						<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $info1['password'];?>"/><br>
						 <label>Address</label>
		 <input type="text" name="Address" class="form-control" placeholder="Bankaddress"/><br>
		 <label>City</label>
		 <select>
		   <option>Jodhpur</option>
		   <option>Ajmer</option>
		   <option>Jaipur</option>
		   <option>Pali</option>
		   <option>Barmer</option>
		   <option>Jaiselmer</option>
		   <option>Kota</option>
		   <option>Bikamer</option>
		   <option>Bharatpur</option>
		   <option>Sikar</option>
		   <option>Sirohi</option>
		   <option>Churu</option>
		   <option>Nagaur</option>
		   <option>Alwar</option>
		   <option>Bundi</option>
		  </select><br><br>
		 <label>Availbilty</label>&nbsp&nbsp&nbsp&nbsp
		 <input type="radio" name="A+"/>A<sup>+</sup>&nbsp&nbsp
		 <input type="radio" name="A-"/>A<sup>-</sup>&nbsp&nbsp
		 <input type="radio" name="b+"/>B<sup>+</sup>&nbsp&nbsp
		 <input type="radio" name="b-"/>B<sup>-</sup>&nbsp&nbsp
		 <input type="radio" name="O+"/>O<sup>+</sup>&nbsp&nbsp
		 <input type="radio" name="O-"/>O<sup>-</sup>&nbsp&nbsp
		 <input type="radio" name="AB"/>AB&nbsp&nbsp
		<br><input type="submit"  name="submit" value="submit" class="btn btn-success" style="margin-top:20px;"/>
					</form>
					</div>
				</div>	
					 <div class="container-fluid section3">
			   <div class="col-md-4" style="padding-top:50px;">
				 <center><h1 style="color:white;">Contact-us</h1></center>
			</div>
				   <div class="col-md-4" style="padding-top:50px;"></div>
				   <div class="col-md-4" style="padding-top:50px;"><center><h1 style="color:white;">Follow-us</h1></center>
						 <center style="padding-top:30px;"> <i class="fa fa-facebook fa-2x" style="color:white;" aria-hidden="true"></i>
						  &nbsp &nbsp &nbsp <i class="fa fa-twitter fa-2x" style="color:white;" aria-hidden="true"></i>
						   &nbsp &nbsp &nbsp <i class="fa fa-instagram fa-2x" style="color:white;" aria-hidden="true"></i>
							</center>
			 </div>
		  </div>
	  
    </body>
  </html>