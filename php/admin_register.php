<?php

    include("connect.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confpassword = $_POST['confPassword'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];

    move_uploaded_file($tmp_name, "../images/$image");

    if ($password == $confpassword) {
        $insert = mysqli_query($connect, "INSERT INTO admins (username, password, image) VALUES ('$username', '$password', '$image')");

        if ($insert) {
            echo "
                <script>
                    alert('Registration successfull!!');
                    window.location = '../html/admin_register.html'
                </script>
            ";
        }
        else {
            echo "
                <script>
                    alert('Error occured!!');
                    window.location = '../html/admin_register.html'
                </script>
            ";
        }
    }
    else {
        echo "
            <script>
                alert('Confirm password should be equal to password!!');
                window.location = '../html/admin_register.html'
            </script>
        ";
    }

?>