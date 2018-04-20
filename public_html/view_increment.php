 <?php

header("Content-Type: text/html; charset=ISO-8859-1");
$servername = "vprep.in";
$username = "vprepfortest";
$password = "12345";
$dbname = "testPrepDb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$id = $_GET["id"];


$sql = "update study_material set views=views+1 where id=$id";
$result = $conn->query($sql);

$count = 0;

echo "done";
$conn->close();

?>