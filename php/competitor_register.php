<?php

    include("connect.php");

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $nic = $_POST['nic'];
    $age = $_POST['ageInput'];
    $mobile = $_POST['mobileNumberInput'];
    $address = $_POST['addressInput'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];

    move_uploaded_file($tmp_name, "../images/$image");

    $insert = mysqli_query($connect, "INSERT INTO competitor_register (first_name, last_name, nic, age, mobile_number, home_address, dp) VALUES ('$firstName', '$lastName', '$nic', '$age', '$mobile', '$address', '$image')");

    if ($insert) {
        echo "
            <script>
                alert('Registration successfull!!');
                window.location = '../html/competitor_register.html'
            </script>
        ";
    }
    else {
        echo "
            <script>
                alert('Error occured!!');
                window.location = '../html/competitor_register.html'
            </script>
        ";
    }

?>