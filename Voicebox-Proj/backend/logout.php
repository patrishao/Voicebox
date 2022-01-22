<?php session_start(); ?>

<?php

$_SESSION['userID'] = null;
$_SESSION['email'] = null;
$_SESSION['username'] = null;
$_SESSION['nickname'] = null;
$_SESSION['password'] = null;
$_SESSION['bio'] =  null;
$_SESSION['userCoverPhoto'] = null;
$_SESSION['userProfPhoto'] = null;

header("Location: ../index.php");
