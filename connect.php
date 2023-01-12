<?php
$question = $_POST['question_input'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$option4 = $_POST['option4'];
$correct_ans = $_POST['correct_option'];

//DataBase connection
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$con)
{
    die("failed to connect!");

}else{
    $sql = "insert into mcq(question,option1,option2,option3,option4,correct_ans) values('$question','$option1','$option2','$option3','$option4','$correct_ans')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
}