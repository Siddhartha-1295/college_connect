<?php
$con=new mysqli('127.0.0.1','root','');
if(!$con)
    echo "server not connected";
if(!mysqli_select_db($con,'project'))
    echo "not connected to the database";
$ques=$_POST['message'];
$ques=urldecode($ques);
// if(isset($_POST['message']))
// {
$sel_ques_sql="SELECT question FROM tbl_question where question LIKE '$ques'";
$ques_res = mysqli_query($con,$sel_ques_sql);
$ques_cnt=mysqli_num_rows($ques_res);
if($ques_cnt>0) {
    // 1: Question Exists. Please enter a new Question !!
    echo "1";
    // $url = 'AskQuestion.html';
    // header('Location: '.$url);
}
else {
    $userid='admin';
    $ins_ques_sql="INSERT INTO tbl_question(question, userid) VALUES('$ques', '$userid')";
    if(mysqli_query($con,$ins_ques_sql)) {
    // 0: Your question is added
    echo "0";
    //$url = 'search.html';
    // header('refresh:2');
    // header('Location: '.$url);
    }
    else {
        // 2: insert query failure
        echo "2";
    }
}
//}
// else
// {
//     //please enter the question
//     echo "3";
// }
mysqli_close($con);

?>