<?php

    session_start();
    include("connect.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = mysqli_query($connect, "SELECT * FROM login WHERE username='$username' AND password='$password'");

    if (mysqli_num_rows($check) > 0) {
        $userdata = mysqli_fetch_array($check);
        $groups = mysqli_query($connect, "SELECT * FROM login");
        $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);

        $_SESSION['userdata'] = $userdata;
        $_SESSION['groupsdata'] = $groupsdata;

        echo "
            <script>
                alert('Login Successfull!');
                window.location = '../html/admin_dashboard.html'
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