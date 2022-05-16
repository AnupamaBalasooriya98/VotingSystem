<?php
    session_start();
    if(!isset($_SESSION['userdata'])) {
        header ('location: ../');
    }
?>

<html>
  <head>
    <title>Online Voting System - Competitor Profile</title>
    <link rel="stylesheet" href="../css/stylesheet.css" />
  </head>
  <body>
    <style>
      #backBtn {
        padding: 10px;
        border-radius: 5px;
        background-color: navy;
        color: white;
        float: left;
      }
      #logoutBtn {
        padding: 10px;
        border-radius: 5px;
        background-color: navy;
        color: white;
        float: right;
      }
    </style>
    <div id="headerSection">
      <button id="backBtn">Back</button>
      <button id="logoutBtn">Logout</button>
      <h1>Online Voting System</h1>
    </div>
    <hr />
    <div id="profile"></div>
    <div id="group"></div>
  </body>
</html>