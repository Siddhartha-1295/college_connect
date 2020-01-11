<?php
//include "addquestion.php"; 
//echo $ques;
$con=new mysqli('127.0.0.1','root','');
if(!$con)
    echo "server not connected";
if(!mysqli_select_db($con,'project'))
    echo "not connected to the database";
$ans=$_POST['answerto'];
$questionid=$_POST['questionid'];

$questionid=urldecode($questionid);
$ans=urldecode($ans);
//$exists="SELECT question FROM questions where question LIKE '$ques'";
$exec=mysqli_query($con,"SELECT question FROM tbl_question where questionid = '$questionid'");
$numcnt=mysqli_num_rows($exec);
if($numcnt > 0)
{
    $sql=mysqli_query($con,"INSERT INTO tbl_answer(answer, questionid, userid) VALUES('$ans', '$questionid', '')");
    //Your answer is added to db !!
    echo "0";
}
// else
// {
// //$sql="INSERT INTO questions(answer) VALUES('$ans')";
// /*if(mysqli_query($con,$sql))
// {
//     $output ="Your question is added";
//   echo $output;
//     header("refresh:2; url=search.html");
// }*/

else
{
    //Your answer is not added!!
    echo "1";
}
mysqli_close($con);

?>