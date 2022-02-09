<?php
session_start();
include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href=
	"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
	<!-- jQuery library -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</script> -->
	<!-- Popper JS -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
	</script> -->
	<!-- Latest compiled JavaScript -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
	</script> -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<script src="js/app.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body><br>
	<h2 class="text-center text-success">
		Validation using JQuery
	</h2>
		<?php
  require 'message.php';

  ?>
  <div class="container" id="result">
  	
  </div>
	<div class="container">
		<div class="col-lg-8 m-auto d-block">
		<form  id="first_form" name="first_form" method="post" action="" enctype="multipart/form-data">

				<div class="form-group">
    			<label for="firstname" class="font-weight-bold"> First Name: </label>
    			<input type="text" id="firstname" name="firstname" class="form-control">
  			</div>

				<div class = "form-group">
    			<label for="last_name" class="font-weight-bold"> Last Name: </label>
    			<input type="text" id="lastname" name="lastname" class="form-control">
  			</div>

  			<div class = "form-group">
    			<label for="email" class="font-weight-bold"> Email: </label>
    			<input type="email" id="email" name="email" class="form-control">
  			</div>

  			<div class = "form-group">
    			<label for="password" class="font-weight-bold"> Password: </label><br>
    			<input type="password" id="password" name="password" class="form-control">
  			</div>
  			<div class = "form-group">
    			<label for="cpassword" class="font-weight-bold"> Confirm Password: </label>
    			<input type="password" id="cpassword" name="cpassword" style="line-height:2;width:685px;border-color:#dee2e6;border-radius:4px;padding-left:10px;">
    			<i class="fa fa-eye"  id="open"></i>
    			<i class="fa fa-eye-slash"  id="close"></i>
  			</div>
  			<div class="form-group">
  			  <label for="address" class="font-weight-bold"> Address: </label>
					<textarea id="address" name="address" class="form-control"></textarea>
  			</div>
   			<div class="form-group">
    			<label for="gender" class="font-weight-bold">Gender: </label>
					<input type="radio" name="gender" id="gendermale" value="Male">
					<label>Male</label>
					<input type="radio" name="gender" id="genderfemale" value="Female">
					<label>Female</label>
					<p id="genderlabel"></p>
  			</div>
  			<div class="form-group">
    			<label for="city" class="font-weight-bold"> City: </label>
					<select id="city" class="form-control" name="city">
      			<option selected="" value="Select">Select City</option>
      			<option value="Surat">Surat</option>
      			<option value="Ahemdabad">Ahemdabad</option>
      			<option value="Vadodra">Vadodra</option>
      			<option value="Rajkot">Rajkot</option>
    			</select>
  			</div>
  			<div class="form-group" id="hobbycheck"> 
    			<label for="hobby" class="font-weight-bold"> Hobbies: </label>
					<div class="form-check form-check-inline">
            <input class="form-check-input hobby_class" type="checkbox"  value="playing" name="hobbies[]" >
            <label class="form-check-label" for="playing">Playing</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input hobby_class" type="checkbox"  value="Singing" name="hobbies[]" >
            <label class="form-check-label" for="Singing">Singing</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input hobby_class" type="checkbox"  value="Reading" name="hobbies[]" >
            <label class="form-check-label" for="Reading">Reading</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input hobby_class" type="checkbox"  value="Writing" name="hobbies[]" >
            <label class="form-check-label" for="Writing">Writing</label>
          </div>
          <p id="hobbylabel"></p>
  			</div> 
  
  			
  			<div class="form-group">
			  	<label for="file" class="font-weight-bold">Choose Photo:</label>
 	   			<input type="file" id="file" name="file">
 	   			<img src=""  id="imgpreview" height="100px" width="100px">
 	   		</div>
 	   		<p id="photolabel"></p>
 	
 				<div class="form-group" >
  				<label for="emailme" class="font-weight-bold"> Check for Email: </label>
  				<input type="checkbox" id="accept" name="accept" value="1"> Email me
  			</div>
  	 	<div class="form-group">
    			<!-- <input type="submit" name="submit" value="Submit" id="submit" class="font-weight-bold btn btn-primary btn-block mt-3"><br> -->
				<input type="submit" value="Submit" name="btnsub" id="btnsub"  class="btn btn-primary d-block text-center form-control" />
				
				</div>
  			
			</form>
	  </div>
	</div>

	<!-- Including app.js jQuery Script -->
	
</body>
</html>
