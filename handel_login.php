<?php
//start session
session_start();
if(!isset($_SESSION['email']))
{
		header('Location:/forms/index.php');
}
function clean_data($input){

	$input=htmlspecialchars($input);
	$input=trim($input);


return $input;

}
//post data
$email=$_POST['email'];
$password=$_POST['pass'];

//clean data
$email=clean_data($email);
$password=clean_data($password);

//validate data

$is_right_date=TRUE;
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
	echo 'you must enter a valid email';
	$is_right_date=False;
}


if($is_right_date){


	$_SESSION['email']=$email;
		$_SESSION['pass']=$password;
	header('Location:allProducts.php');
}



//