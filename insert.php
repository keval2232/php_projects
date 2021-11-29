<?php
if (isset($_POST['uname'])){
$server= 'localhost';
$username='root';
$password= "";
$con= mysqli_connect($server,$username,$password);
if(!$con){
    die("Conncection to database is failed");
    mysqli_connect_error();
}
$uname=$_POST['uname'];
//echo $uname;
$age=$_POST['age'];
$gender = $_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
echo "Conncetion sucessfully";
$sql="INSERT INTO `trip`.`trip` (`uname`, `age`, `gender`, `email`, `phone`) VALUES ('$uname', '$age', '$gender', '$email', '$phone')";
if ($con->query($sql)==true)
{
    echo "Inserted sucessfully";
}
else
{
    echo "ERROR :$sql <br> $con->error";
}
$con->close();
}
?>