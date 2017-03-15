<?php
echo "This is another php script running on the raspberrypi!";

$servername="localhost";
$username = "root";
$password = "cit480";
$dbname = "Kibblebit";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}

echo "hi";

$sql = "SELECT * FROM  Feedings WHERE *";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc()){
echo $row;

}


}else{
echo $row;
}


?>
