<?php

$myconnection = mysqli_connect('localhost','root', '', 'school');

if($myconnection === false)
{
    die("error connecting to the database");
}

$firstname = $_REQUEST['firstname'];
$email = $_REQUEST['email'];
$telephone = $_REQUEST['telephone'];
$address = $_REQUEST['address'];
$postcode = $_REQUEST['postcode'];
$country = $_REQUEST['country'];
$visa = $_REQUEST['visa'];
$cardnumber = $_REQUEST['cardnumber'];
$securitycode = $_REQUEST['securitycode'];
$namecard = $_REQUEST['namecard'];

$sql = "INSERT INTO student VALUES ('$firstname', '$email', '$telephone', '$address', '$postcode', '$country', '$visa', '$cardnumber', '$securitycode', '$namecard')";

if(mysqli_query($myconnection, $sql))
{
    echo "<script type='text/javascript'>alert('This form is submitted congradulations')</script>";
}
else
{            
    echo "<script type='text/javascript'>alert('Form submission failed')</script>" .mysqli_error($myconnection);
}

mysqli_close($myconnection);

?>