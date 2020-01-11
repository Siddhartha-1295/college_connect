<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add answer</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Askquestioncss/askutil.css">
	<link rel="stylesheet" type="text/css" href="Askquestioncss/askmain.css">
<!--===============================================================================================-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <link href="css/search.css" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container main_font">
   <br />
   <div class="form-group header">
    <!-- <button type="submit" style="float:right"><a href="Hii\hii.html">Logout</a></button>-->
    <!--<span class="input-group-addon"><input type="button" href="popupform.html" value="Ask" onclick="popupform.html"></span>-->
    <span class="logo" style="color:#b92b27">C. C.</span>
    <a href="search.html" style="margin: 2px" ><span class="input-group-addon nav_item">Home</span></a>
    <a href="Answers.html"><span class="input-group-addon nav_item">Answers</span></a>
    <a href="AskQuestion.html" style="margin: 2px;"><span class="input-group-addon nav_item">Ask Question</span></a>
     <input type="text" class="input-group-addon input_nav_item" name="search_text" id="search_text" placeholder="Search College Connect" class="form-control" />
     <a href="profile.php"><span class="input-group-addon nav_item">profile</span></a>
     <a href="hiiphp.php" style="margin: 2px;"><span class="input-group-addon nav_item">logout</span></a>
   </div>
   <br />
  </div>
	<div class="container-contact100">
		<div class="contact100-map" data-map-y="-73.986422" data-scrollwhell="0" data-draggable="1"></div>
        <?php
			$questionid=$_GET['questionid'];
			$con=new mysqli('127.0.0.1','root','');
			if(!$con)
				echo "server not connected";
			if(!mysqli_select_db($con,'project'))
				echo "not connected to the database";
				$exec=mysqli_query($con,"SELECT question FROM tbl_question where questionid = '$questionid'");
				$exec_val = mysqli_fetch_assoc($exec);
				$question = $exec_val['question'];
				mysqli_close($con);
        ?>
		<div class="wrap-contact100">
			<form id="myForm" class="contact100-form validate-form" action="addanswertodb.php" method="POST">
				<span class="contact100-form-title">
                    <?php
                        echo $question;
                    ?>
                </span>
                <input type="hidden" name="questionid" value="<?php echo $questionid;?>"/>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea class="input100" name="answerto" placeholder="Write your answer here?"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit">Add answer</button>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
      
      $(document).ready(function(){
		$('#myForm').ajaxForm(function(data) {
			if(data === "0") {
				alert("Answer is added Successfully !!")
				window.location.href = "search.html";
			} else if (data === "1") {
                alert("Failed to insert your answer!!");
            } else {
				alert("SQL query failure. Please input Question once again !!");
			} 
            });
	  });

	</script>
</body>
</html>
