   <?php mysqli_report(0);?>
	 <div id='cssmenu'>
	       	<ul>
			<?php if($_SESSION['']==""){ ?>
			   <li><a href='index.php'>Home</a></li>
			   
			   <li><a href='#'>About</a></li>
			   <li><a href='contact-us.php'>Contact</a></li>
				 <li><a href='#' data-toggle="modal" data-target="#myModal">Login</a></li>
				  <li><a href='#' data-toggle="modal" data-target="#myModalR">Registration</a></li>
			<?php } else{?>
                     <li><a href='index.php'>Home</a></li>
			  
			   <li><a href='#'>About</a></li>
			   <li><a href='contact-us.php'>Contact</a></li>
			  
				 <li><a href='#'><?php echo $_SESSION['aadharnumber']; ?></a></li>
				  <li><a href='logout.php'>Logout</a></li>
			
			   <?php } ?>		
			   </ul>
			   
			   
			  </div>