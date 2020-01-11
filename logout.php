<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<body>

<?php
	echo "<p align='center' style='margin-top:15%'><font color=green size='5pt'>Logged Out Successfully!!!</p>";
	$_SESSION['status']="shut_down";
	session_destroy();
	exit(header("refresh:1 ; url=index.html"));
?>

</body>
</html>