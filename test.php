<?php
//Step1
 $db = mysqli_connect('localhost','root','root','famlog')
 or die('Error connecting to MySQL server.');
?>

<html>
    <head>
        <title>Runnable 3-tier</title>
    </head>
    <body>
        <h1>Runnable 3-tier Set up</h1>
        <h2>FAMLOG</h2>
<?php
$sql = "SELECT * FROM personal";
$result = mysqli_query($db, $sql);

echo "Personal Items List";
echo "<br>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "| Name: " . $row["name"]. " | Quantity: " . $row["quantity"]. " | Priority: " . $row["priority"]. " | Notes: " . $row["notes"]. " | Date: " . $row["date"] . " |". "<br>";
    }
} else {
    echo "0 results";
}

//Step 4
mysqli_close($db);
?>

</body>
</html>
