<?php
require('connection.php');

session_start();
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['member_id'])){
 header("location:access-denied.php");
}
?>
<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css2/font-awesome.min.css">
    <link rel="stylesheet" href="css2/bootstrap.min.css">

    <link rel="stylesheet" href="css2/demo.css" />
    <link rel="stylesheet" href="css2/templatemo-style.css">

    <script type="text/javascript" src="js2/modernizr.custom.86080.js"></script>
    <script language="JavaScript" src="js/user.js"></script>
</head>
</head><body bgcolor="tan">

<center><b><font color = "brown" size="6">Simple PHP Polling System</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>STUDENT HOME </h1>
<a href="student.php">Home</a> | <a href="vote.php">Current Polls</a> | <a href="manage-profile.php">Manage My Profile</a> | <a href="changepass.php">Change Password</a>| <a href="logout.php">Logout</a>
</div>
<div id="container">
<p> Click a link above to do some stuff.</p>
</div>
<div class="footer-link">
                    <p>Copyright © 2022 R.H.M. Premakumara IT18203240 </p>
                </div>
</div>
</body></html>