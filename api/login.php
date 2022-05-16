<?php

    include("connect.php");

    $nic = $_POST['nic'];
    $password = $_POST['password'];

    $check = mysqli_query($connect, "SELECT * FROM competitor_register WHERE nic='$nic' AND password='$password'");

    if (mysqli_num_rows($check) > 0) {
        $userdata = mysqli_fetch_array($check);

        $_SESSION['userdata'] = $userdata;
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