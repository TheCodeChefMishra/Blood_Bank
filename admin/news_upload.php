<?php 
 include "connection.php";
 if(isset($_POST['submit']))
 {
	  $title=$_POST['title'];
	  $description=$_POST['description'];
	  $date=$_POST['date'];
	  $new=uniqid().$_FILES['img']['name'];
	  echo $path="img/".$new;
	  $r=move_uploaded_file($_FILES['img']['tmp_name'],$path);
	  $query="insert into news(title,description,date,image) values('$title','$description','$date','$new')";
	  mysqli_query($conn,$query);
 }
 
 ?>
 
 <html>
  <head>
   <?php include "link1.php"?>
   </head>
   <body>
     <div class="container"> 
	  <div class="col-md-offset-4 col-md-4"> 
	    <h2>News</h2><br><br>
    <form method="post" enctype="multipart/form-data">
     <label>Name/title</label>&nbsp&nbsp<br>
	 <input type="text" name="title"/><br><br>
	 <label>description</label>&nbsp&nbsp<br>
	 <textarea type="text"  rows="2" cols="30" name="description"></textarea><br><br>
	 <label>Date</label><br>
	 <input type="date" name="date"/><br><br>
	  <label>img upload</label>
	 <input type="file" name="img"/><br><br>
	  <input type="submit" name="submit" value="submit"/>
	 </form>
	  </div>
	 </div>
	</body>
 </html>