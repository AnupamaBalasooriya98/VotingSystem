<?php

$connect=mysqli_connect('localhost','root','', 'online_voting_system') or die('Connection failed!');

if($connect) {
    echo "Connected!";
}
else {
    echo 'Not connected!';
}

?>