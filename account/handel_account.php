<?php
//start session
session_start();
if(!isset($_SESSION['email']))
{
		header('Location:../forms/index.php');
}
function clean_data($input){

	$input=htmlspecialchars($input);
	$input=trim($input);


return $input;

}
//post data
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$face=$_POST['face'];
$twitter=$_POST['twitter'];
$insta=$_POST['insta'];
//clean data
$name=clean_data($name);
$email=clean_data($email);
$password=clean_data($password);
$face=clean_data($face);
$twitter=clean_data($twitter);
$insta=clean_data($insta);

//validate data

$is_right_date=TRUE;

if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
	echo 'you must enter a valid email <br>';
	$is_right_date=False;
}


if(!filter_var($face,FILTER_VALIDATE_URL))
{
	echo 'you must enter a valid url <br>';
	$is_right_date=False;
}
if(!filter_var($twitter,FILTER_VALIDATE_URL))
{
	echo 'you must enter a valid url <br>';
	$is_right_date=False;
}
if(!filter_var($insta,FILTER_VALIDATE_URL))
{
	echo 'you must enter a valid url <br>';
	$is_right_date=False;
}

//craete ssessions
if($is_right_date==true){

	$_SESSION['name']=$name;
	$_SESSION['email']=$email;
	$_SESSION['pass']=$password;
	$_SESSION['face']=$face;
	$_SESSION['twitter']=$twitter;
	$_SESSION['insta']=$insta;
	header('Location:../home.php');
}



//