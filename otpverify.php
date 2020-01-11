<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$otpval=$_POST['pass'];
if($_SESSION["random_val"] == $otpval){
	
	$connect=mysqli_connect('127.0.0.1','root','');
	if(!mysqli_select_db($connect,'project'))
	{
		echo "database not selected";
	}
	    $first_name = $_SESSION["first_name"];
		$last_name= $_SESSION["last_name"];
		$roll_number = $_SESSION["rollno"];
		$birthday = $_SESSION["birthday"];
		$gender = $_SESSION["gender"];
	    $mail = $_SESSION["mailid"];
	    $pass = $_SESSION["pass"];
		$phone = $_SESSION["phone"];
	$insert_query="INSERT INTO student(roll_number,first_name,last_name,birthday,mail,gender,pass,phone) VALUES('$roll_number','$first_name','$last_name','$birthday','$mail','$gender','$pass','$phone')";
	$insert_exec=mysqli_query($connect,$insert_query);
	//$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
	//$bulk = new MongoDB\Driver\BulkWrite;
	//$bulk->insert([
	//      'first_name' => $_SESSION["first_name"],
	//	  'last_name' => $_SESSION["last_name"],
	//	  'roll_number' => $_SESSION["rollno"],
	//	  'birthday' => $_SESSION["birthday"],
	//	  'gender' => $_SESSION["gender"],
	//      'mail' => $_SESSION["mailid"],
	 //     'pass' => $_SESSION["pass"],
	   //   'phone' => $_SESSION["phone"]
	//]);
	//$manager->executeBulkWrite('university.student',$bulk);
	echo "<p align='center' style='margin-top:15%'><font color=green size='5pt'>Registration Successful!!!</p>";
	echo "<p align='center' style='margin-top:2%'><font color=green size='5pt'>Please Login To Your Account</p>";
	session_unset();
	session_destroy();
	
	header("refresh:2; url=index.html");	
}
else{
	session_unset();
	session_destroy();
	echo "<p align='center' style='margin-top:15%'><font color=red size='5pt'>Invalid Credentials</p>";
	echo "<p align='center' style='margin-top:2%'><font color=red size='5pt'>Please Re-enter your details Correctly</p>";
	header("refresh:2; url=index.html");
}
?>
<style type=”text/css”>
p{
	align:center;
}
</style>
</body>
</html>