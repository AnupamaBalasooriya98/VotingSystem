<?php

    session_start();
    include("connect.php");

    $nic = $_POST['nic'];
    $password = $_POST['password'];

    $check = mysqli_query($connect, "SELECT * FROM competitor_register WHERE nic='$nic' AND password='$password'");

    if (mysqli_num_rows($check) > 0) {
        $userdata = mysqli_fetch_array($check);
        $groups = mysqli_query($connect, "SELECT * FROM competitor_register");
        $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);

        $_SESSION['userdata'] = $userdata;
        $_SESSION['groupsdata'] = $groupsdata;

        echo "
            <script>
                alert('Login Successfull!');
                window.location = '../php/competitor_profile.php'
            </script>
        ";
    }
    else {
        echo "
            <script>
                alert('Invalid credentials!');
                window.location = '../'
            </script>
        ";
    }

?>