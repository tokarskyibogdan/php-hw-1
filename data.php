<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "1";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT ID, name, sname, sex, age, gender, birthday, familystatus, socialstatus, adress, timespend, sitef, books, textarea, day, email, categories, level FROM person";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Last Name</th><th>Sex</th><th>Age</th><th>Gender</th><th>Birth Date</th><th>Family Status</th><th>Social Status</th><th>Adress</th><th>Time Spend</th><th>Site Frequency</th><th>Books</th><th>Comment</th><th>Day</th><th>Email</th><th>Categories</th><th>Level</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["ID"]."</td><td>".$row["name"]."</td><td>".$row["sname"]."</td><td>".$row["sex"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["birthday"]."</td><td>".$row["familystatus"]."</td><td>".$row["socialstatus"]."</td><td>".$row["adress"]."</td><td>".$row["timespend"]."</td><td>".$row["sitef"]."</td><td>".$row["books"]."</td><td>".$row["textarea"]."</td><td>".$row["day"]."</td><td>".$row["email"]."</td><td>".$row["categories"]."</td><td>".$row["level"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
?>