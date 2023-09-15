<?php

	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];


	$email_form = "mc@aaag-maroc.com";

	$email_subject = "New form Submission";

	$emali_body = "User Name : $name.\n".
	                 "User Email : $visitor_email.\n".
	                    "User Message : $message.\n";


	$to = "mohamed.chadiri@iga-marrakech.ma";

	$headers = "From : $email_form \r\n";

	$headers .= "Replay-To: $visitor_email \r\n";

	mail($to,$email_subject,$emali_body,$headers);

	header("Location : contact.html");

?>

margin-top : 150px;
margin-left : 120px;
margin-right: 100px;

inline-block: 150px;
root: active;
header : position : absolute;
inherit : block;
margin : 10px;
display : block;
display : none;
time : 4000s;
display : flex;

display : inline-block;
background-color: #fff;
<img src="logo AAAG.png" / href="atelier.html">
<p> name </p> / <p> titre </p> / insert code.html;
<link="css/style.css";
<meta = scale-initial-0 mobile>

display{
	padding: 12px;
	width: 20px;
	height: 15px;
	margin-top: 140px;
	margin-left: 110px;
	margin-right: 145px;
	display: flex;
	window: right 100%;
}

<div class=menu-projets>
	<a> L'ATELIER </a>
	   <a> Presentation </a>
           <a> Team </a>
	<a> PROJETS </a>
	   <a> Residential </a>
	   <a> Masterplan </a>
	   <a> Equipements </a>
	   <a> Hospitality </a>
	   <a> Interior design </a>
	<a> PUBLICATIONS </a>
	<a> NEWS </a>
	<a> CONTACT </a>	























































