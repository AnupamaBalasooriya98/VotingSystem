<html>
  <head>
    <title>Online Voting System - View Competitors</title>
    <link rel="stylesheet" href="../css/stylesheet.css" />
  </head>
  <body>
    <style>
      #backBtn {
        padding: 10px;
        border-radius: 5px;
        background-color: navy;
        color: white;
        float: left;
      }
      #logoutBtn {
        padding: 10px;
        border-radius: 5px;
        background-color: navy;
        color: white;
        float: right;
      }
      #addCompetitorBtn {
        padding: 10px;
        border-radius: 5px;
        background-color: navy;
        color: white;
        float: right;
      }
    </style>

    <div id="headerSection">
      <button id="backBtn" onclick="location.href='../html/admin_dashboard.html'">Back</button>
      <button id="logoutBtn" onclick="location.href='../php/login.php'">Logout</button>
      <h1>Online Voting System</h1>
    </div>

    <hr />

    <div id="bodySection">
      <br /><br />
      <button id="addCompetitorBtn"  onclick="location.href='../html/competitor_register.html'">
        Add Competitor
        </button>
    </div>
    
    <script>
      function editButton() {
        location.href='../html/edit_competitor.html';
      }

      function deleteButton() {
        location.href='../php/delete_competitor.php';
      }
    </script>

    <?php
        include("connect.php");
        
        $result = mysqli_query($connect, "SELECT * FROM competitor_register");
        $var_id = mysqli_fetch_array($result)['id'];

        echo "<table border='1px solid black' align='center'>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Mobile Number</th>
                <th>Home Address</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>";

        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['mobile_number'] . "</td>";
            echo "<td>" . $row['home_address'] . "</td>";
            echo "<td>" . $row['dp'] . "</td>";
            echo "<td>" . "<button type='submit' id='editBtn' onclick='editButton()'>Edit</button>" . "<button type='submit' id='deleteBtn' onclick='deleteButton()'>Delete</button>" . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_close($connect);
    ?>
  </body>
</html>
