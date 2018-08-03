<?php
$myfile = fopen('myfile_'.date('m-d-Y_hia').'.txt', "a") or die("Unable to open file!");

$name = $_POST['name'];
$txtn = "Name: ";
fwrite($myfile,$txtn);
fwrite($myfile,$name);

$txt = "\r\nEmail: ";
fwrite($myfile,$txt);
$email = $_POST['email'];
fwrite($myfile, $email);

$txt = "\r\nComments: ";
fwrite($myfile,$txt);
$comments = $_POST['comments'];
fwrite($myfile, $comments);

fclose($myfile);

if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "simranjeetsingh1497@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['name'];
  $comment = $_REQUEST['comments'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }

header("location:index.php");
?>