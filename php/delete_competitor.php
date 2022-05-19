<?php

    include("connect.php");
    include("view_competitors.php");

    $insert = mysqli_query($connect, "DELETE FROM competitor_register WHERE id='$var_id'");

    if ($insert) {
        echo "
            <script>
                alert('Delete successfull!!');
                window.location = '../php/view_competitors.php'
            </script>
        ";
    }
    else {
        echo "
            <script>
                alert('Error occured!!');
                window.location = '../php/view_competitors.php'
            </script>
        ";
    }

?>
