<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
//$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
//$query = new MongoDB\Driver\Query([]);
//$rows = $manager->executeQuery('university.student', $query);
$con=mysqli_connect('127.0.0.1','root','');
if(!mysqli_select_db($con,'project'))
{
    echo "database not selected";
}
$query="SELECT * FROM student";
$rows=mysqli_query($con,$query);
$flag=0;
foreach ($rows as $row) {
	if($row['mail'] == $_POST['mail'] or $row['roll_number'] == $_POST['roll_number'] or $row['phone'] == $_POST['phone']){
		echo "<p align='center' style='margin-top:15%'><font color=blue size='5pt'>You already Registered with these Credentials!!!</p>";
		echo "<p align='center' style='margin-top:2%'><font color=blue size='5pt'>Please Login to Continue</p>";
		$flag=1;
		break;
	}
}
if($flag==1){
	session_destroy();
	header("refresh:3 ; url=index.html");
}
else{
	$to = $_POST['mail'];
	$subject = "OTP - Verification";
	$_SESSION["random_val"] = rand(100001,999999);
	$txt = "Your One Time Password is : " . $_SESSION["random_val"] . "\n" . "Please enter the OTP to proceed" . "\n" .  "Thank You" . "\n" . "College Connect";
	$headers = "From: collegeconnectcvr1@gmail.com" . "\r\n" . "CC: collegeconnectcvr1@gmail.com";
	$_SESSION["mailid"] = $_POST['mail'];
	$_SESSION["rollno"] = $_POST['roll_number'];
	$_SESSION["first_name"] = $_POST['first_name'];
	$_SESSION["last_name"] = $_POST['last_name'];
	$_SESSION["birthday"] = $_POST['birthday'];
	$_SESSION["gender"] = $_POST['gender'];
	$_SESSION["pass"] = $_POST['pass'];
	$_SESSION["phone"] = $_POST['phone'];
	if(mail($to,$subject,$txt,$headers)){
		header("refresh:2; url=otp.php");
	}
	else{
		echo "<p align='center' style='margin-top:15%'><font color=red size='5pt'>Please Enter a Valid Email-Id</p>";
		header("refresh:4; url=index.html");
	}
}
?>

</body>
</html>