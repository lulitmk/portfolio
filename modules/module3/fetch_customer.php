<?php
 include '../../db/connection.php';
 include '../../db/db_func.php';

 $sql = "SELECT * FROM customer";

 $results = $db->query($sql);

 if ($results->num_rows > 0) {
    echo "<table border=1>
        <tr><th>NAME</th><th>ID</th><th>EMAIL</th><th>TEL</th></tr>     
     ";
    while ($row = $results->fetch_assoc()) {
       echo "<tr><td>".$row['name']."</td><td>".$row['id']."</td>
       <td>".$row['email']."</td><td>".$row['tel']."</td></tr>";
    }
    echo "</table>";
 }
