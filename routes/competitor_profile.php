<?php
    session_start();
    if(!isset($_SESSION['userdata'])) {
        header ('location: ../');
    }
?>

<html>
    <head>
        <title>Online Voting System - Competitor Profile</title>
    </head>
    <body>
        <button>Back</button>
        <button>Logout</button>
        <h1>Online Voting System</h1>
        <hr>
    </body>
</html>