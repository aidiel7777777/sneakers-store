<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>payments</h2>
    <table>
        <tr>
             <th>No.</th> 
             <th>name</th>
             <th>Phone</th>
             <th>adress</th>
             <th>card number</th>
             <th>expiry month</th>
             <th>expiry year</th>
             <th>cvv</th>  
        </tr> 
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "SneakerStore";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $serialNumber= 1;
    if($result->num_rows>0){
        while($rows=$results->fetch_assoc()){
            echo"<tr>";
            echo"<td>".$serialNumber."</td>";
            echo"<td>".$row["name"]."</td>";
            echo"<td>".$row["phone"]."</td>";
            echo"<td>".$row["adress"]."</td>";
            echo"<td>".$row["card_number"]."</td>";
            echo"<td>".$row["expiry_month"]."</td>";
            echo"<td>".$row["expiry_year"]."</td>";
            echo"<td>".$row["cvv"]."</td>";
            echo"</tr>";
            $serialNumber++;
        }
    }else{
        echo"<tr><td colspan=8>NO payment</td></tr>";
    }
    $conn->close();
    ?>
    </table>


</body>
</html>