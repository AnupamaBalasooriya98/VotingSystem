<?php

$connect=mysqli_connect('localhost','root','', 'online_voting_system') or die('Connection failed!');

if($connect) {
    echo "
        <script>
            alert('Connected!');
            window.location = '#'
        </script>";
}
else {
    echo "
        <script>
            alert('Not connected!');
            window.location = '#'
        </script>";
}

?>