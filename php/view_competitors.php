<?php
    include("../api/connect.php");
    
    $result = mysqli_query($connect, "SELECT * FROM competitor_register");

    echo "<table border='1'>
        <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        </tr>";

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($connect);
?>