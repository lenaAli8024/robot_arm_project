
<?php
$conn = new mysqli("localhost", "root", "", "robot_arm");
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM poses WHERE id=$id");
echo json_encode($result->fetch_assoc());
$conn->close();
?>
