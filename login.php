<?php
	session_start();
	$_SESSION['status']="Active";
?>
<!DOCTYPE html>
<html>
<body>

<?php
	//$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
	
	//$query = new MongoDB\Driver\Query([]);
	
	//$rows = $manager->executeQuery('university.student', $query);
	//$flag=0;
	//foreach ($rows as $row) {
	//	if($row->mail == $_POST['mail']){
	//		if($row->roll_number == $_POST['roll_number']){
	//			if($row->pass == $_POST['pass']){
	//				$flag=1;
	/*				break;
				}
				else{
					$flag=0;
				}
			}
			else{
					$flag=0;
			}
		}
		else{
					$flag=0;
		}
	}*/
	
	$con=mysqli_connect('127.0.0.1','root','');
	if(!mysqli_select_db($con,'project'))
	{
		echo "database not selected";
	}
	$query="SELECT * FROM student";
	$rows=mysqli_query($con,$query);
	$flag=0;
	foreach ($rows as $row) {
		if($row['mail'] == $_POST['mail'] and $row['roll_number'] == $_POST['roll_number']){
			$flag=1;
			break;
		}
	}
	if($flag==1){
		header("refresh:1 ; url=search.html");
	}
	else{
		echo "<p align='center' style='margin-top:15%'><font color=red size='5pt'>Invalid Credentials!!!</p>";
		echo "<p align='center' style='margin-top:2%'><font color=red size='5pt'>Please re-enter your Details.";
		header("refresh:1 ; url=index.html");
	}

?>

</body>
</html>
	