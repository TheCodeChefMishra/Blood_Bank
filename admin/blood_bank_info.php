<?php 
  include "connection.php";
   $q="select * from registration where category='".bloodbank."'";
  $data=mysqli_query($conn,$q);
  ?>


<html>
 <head>
   <?php include "link1.php"; ?>
  </head>
 <body>
    <div class="container header1">
	 <center><h1>Donor information</h1></center>
	    <div class="col-md-offset-1 col-md-10">
	  <table class="table" method="post" style="margin-top:50px;">
	    <thead>
						  <tr>
							<th>BloodBank</th>
							<th>Contact-us</th>
							<th>Aadhar number</th>
							<th>Password</th>
							<th> Category</th>
						   </tr>
						 </thead>
						 <tbody>
						  
						    <?php 
              while($row=mysqli_fetch_array($data))
              {
                ?>
					<tr><td><?php echo $row['bloodbankname'];?></td>	  
					<td><?php echo $row['contactno'];?></td>	  
					<td><?php echo $row['aadharnumber'];?></td>	  
					<td><?php echo $row['password'];?></td> 
                     <td><?php echo $row['category'];?></td></tr>	  					
						  <?php
			              }
							?>
						  </tbody>
	   </table>
	   </div>
	 </div>
  </body>
 </html>