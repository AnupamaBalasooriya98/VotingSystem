<?php

    include("connect.php");
    include("view_competitors.php");

    $id = $_POST[$var_id];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $nic = $_POST['nic'];
    $age = $_POST['ageInput'];
    $mobile = $_POST['mobileNumberInput'];
    $address = $_POST['addressInput'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];

        move_uploaded_file($tmp_name, "../images/$image");

        $insert = mysqli_query($connect, "UPDATE competitor_register SET ('$firstName', '$lastName', '$nic', '$age', '$mobile', '$address', '$image') WHERE id='$id'");

        if ($insert) {
            echo "
                <script>
                    alert('Update successfull!!');
                    window.location = '../html/edit_competitor.html'
                </script>
            ";
        }
        else {
            echo "
                <script>
                    alert('Error occured!!');
                    window.location = '../html/edit_competitor.html'
                </script>
            ";
        }
        echo "<script>alert(var id = '$var_id')</script>"

?>