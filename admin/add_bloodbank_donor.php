<?php 
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
  ?>
  <html>
   <head><?php include "link1.php"?></head>
   <body>  
      <div class="container">
	    <div class="col-md-offset-4 col-md-4">
		 
           <center><h2>Registration</h2></center><br>
                <form role="form" method="post">
					<label>BloodBank name/Donor</label>
					<input type="text" name="bankname" class="form-control" placeholder="BloodBank name"/><br>
					<label>Contact Number</label>
					<input type="number" name="bankcontactnumber" class="form-control" placeholder="Contact-no"/><br>
					<label>Aadhar-Card Number</label>
					<input type="number" name="aadharnumber"  class="form-control" placeholder="Aadhar-Card Number"/><br>
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password"/><br>
					<label>Category</label><br>
					 <input type="radio" value="bloodbank" name="Bd"/>&nbsp&nbsp<b>BloodBank</b>&nbsp&nbsp
					 <input type="radio" value="donor" name="Bd"/>&nbsp&nbsp<b>BloodDonor</b>
					<br><input type="submit"  name="submit" class="btn btn-success" style="margin-top:20px;"/>
					</form>   
					 </div>
	   </div>
   </body>
  </html>