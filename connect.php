<?php
$con = mysqli_connect("localhost","root","","aboutme");
if($con)
{
    die('Connection failed');
}
if(isset($_POST['submit']))
{
$firstname = $_POST['firstname'];
$lastname =$_POST['lastname'];
$registerno = $_POST['registerno'];
$username = $_POST['username'];
$mailid = $_POST['emailid'];
$alterid = $_POST['alterid'];
$phone = $_POST['phoneno'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$pincode = $_POST['pincode'];


$sql_query = "insert into user_details(firstname,lastname,registerno,username,emailid,alterid,phoneno,address1,address2,pincode) values('$firstname','$lastname','$registerno','$username','$emailid','$alterid','$phoneno','$address1','$address2','$pincode');";

if(mysqi_query($con,$sql_query))
{
    echo "you have successfully entered the details!";
}
else{
    echo"you have unsuccessfully entered the details!";
}
mysqli_close($con);
}