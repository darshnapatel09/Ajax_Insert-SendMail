<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD']=='POST') 
{
	
	$firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $hobbies=$_POST['hobbies'];
	$file=$_FILES['file']['name']; 
	$root= "uploads/".$file;  
	move_uploaded_file($_FILES['file']['tmp_name'],$root);	 	    
			   
   
	
		$qry="INSERT INTO registration(firstname,lastname,email,password,cpassword,address,gender,city,hobbies,files) values('".$firstname."','".$lastname."','".$email."','".$password."','".$cpassword."','".$address."','".$gender."','".$city."','".$hobbies."','".$file."')";

		$res=mysqli_query($con,$qry);
		
		 if($res)
		 {
		 	echo "Successfully add record";
		 	
		 }	
		 else
		 {
			 echo "Error in record";
			 
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
        <td width="70%">' . $_POST["hobbies"]  . '</td>
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