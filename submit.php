<?php

require 'db.php';

if ($_SERVER['REQUEST_METHOD']=='POST') 
{
	
	$firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $p=md5($password);
    $cpassword=$_POST['cpassword'];
    $cp=md5($cpassword);
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $hobbies=$_POST['hobbies'];
    $hob = implode(",",$hobbies);
	   if(isset($_FILES['file']))
    {
        $photo_name =$_FILES['file']['name'];
        $photo_temp_name = $_FILES['file']['tmp_name'];
        $photo_size = $_FILES['file']['size'];
        $photo_file_extension = explode(".", $photo_name);
        $photo_file_extension = strtolower(end($photo_file_extension));
        $new_photo = time()."_".$_FILES['file']['name'];
        //$new_photo_add = $new_photo;
        if(file_exists('uploads/'.$photo_name))
        {
            $root = "uploads/".$new_photo;
        }
        else
        {
            $root = "uploads/".$photo_name;
        }
        $maxsize    = 3*1024*1024;
        $acceptable = array('jpeg','jpg','png');

        if(($photo_size >= $maxsize) || ($photo_size == 0)) {
            $_SESSION['err_message'] = 'Photo too large. Photo must be less than 2 megabytes.';
            header("location:reg.php");
            exit(0);
        }

        if((!in_array($photo_file_extension, $acceptable)) && (!empty($photo_file_extension))) {
            $_SESSION['err_message'] = 'Invalid file type. Only JPG, JPEG and PNG types are accepted.';
            header("location:reg.php");
            exit(0);
        }

        else{
            move_uploaded_file($photo_temp_name, $root);
        }
    }

		$qry="INSERT INTO registration(firstname,lastname,email,password,cpassword,address,gender,city,hobbies,files) values('".$firstname."','".$lastname."','".$email."','".$p."','".$cp."','".$address."','".$gender."','".$city."','".$hob."','".$root."')";

		$res=mysqli_query($con,$qry);
		
		if($res)
		 {
		 	echo "Record Insert Successfully";
		 }	
		 else
		 {
			 echo "Record Not Insert";
		 }
	

}
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);


$alert = '';
//$path='';

if(isset($_POST['accept'])){
    // $path = 'image/' . $_FILES["file"]["name"];
    // move_uploaded_file($_FILES["file"]["tmp_name"], $path);

    // $mail->AddAttachment($path);

 
$message = '<html> 
		<body>
		<p style="font-size : 15px;">Hello <strong style="color : green;">'. $firstname .' ,</strong><br> Below are Your Admission Details</p>
		<table style="border=1"; cellpadding="10">
		<tr style="background :#eee;>
        <td width="30%"><strong>Firstname</strong></td>
        <td width="70%">' . $_POST["firstname"] . '</td>
      </tr>
      <tr style="background :#eee;>
        <td width="30%"><strong>Lastname</strong></td>
        <td width="70%">' . $_POST["lastname"] . '</td>
      </tr>
      <tr style="background :#eee;>
        <td width="30%"><strong>Email</td></strong>
        <td width="70%">' . $_POST["email"] . '</td>
      </tr>
     
      <tr style="background :#eee;>
        <td width="30%"><strong>Address</strong></td>
        <td width="70%">' . $_POST["address"] . '</td>
      </tr>
      <tr style="background :#eee;>
        <td width="30%"><strong>Gender</strong></td>
        <td width="70%">' . $_POST["gender"] . '</td>
      </tr>
      <tr style="background :#eee;>
        <td width="30%"><strong>City</strong></td>
        <td width="70%">' . $_POST["city"] . '</td>
      </tr>
      <tr style="background :#eee;>
        <td width="30%"><strong>Hobbies</strong></td>
        <td width="70%">' . $hob  . '</td>
      </tr>
      </table>
      </body></html>
  ';

   
    $mail = new PHPMailer;
    $mail->IsSMTP();                                
    $mail->Host = 'smtp.gmail.com';        
    $mail->Port = '465';                                
    $mail->SMTPAuth = true;                            
    $mail->Username = 'demo.abc1100@gmail.com';                    
    $mail->Password = 'd#101@abc';                    
    $mail->SMTPSecure = 'ssl';                            
    $mail->From = 'demo.abc1100@gmail.com';                    
    $mail->FromName = 'demo.abc1100@gmail.com';                
    $mail->AddAddress($email, 'Admission');    
    $mail->WordWrap = 50;                            
    $mail->IsHTML(true);                            
    $mail->AddAttachment($root);                    
    $mail->Subject = 'Student Details';                
    $mail->Body = $message;                            
    if ($mail->Send())                                
    {
        $message = '<div class="alert alert-success">Application Successfully Submitted</div>';
        // unlink($root);
    } else {
        $message = '<div class="alert alert-danger">There is an Error</div>';
    }
   
}
?>