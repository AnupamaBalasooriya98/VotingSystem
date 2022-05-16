<?php
    include("../php/connect.php");
    
    $result = mysqli_query($connect, "SELECT * FROM competitor_register");

    echo "<table border='1'>
        <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        </tr>";

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($connect);
?>