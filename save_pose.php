
<?php
$conn = new mysqli("localhost", "root", "", "robot_arm");
$motor1 = $_POST['motor1'];
$motor2 = $_POST['motor2'];
$motor3 = $_POST['motor3'];
$motor4 = $_POST['motor4'];
$motor5 = $_POST['motor5'];
$motor6 = $_POST['motor6'];
$conn->query("INSERT INTO poses (motor1, motor2, motor3, motor4, motor5, motor6, status) VALUES ('$motor1', '$motor2', '$motor3', '$motor4', '$motor5', '$motor6', 1)");
$conn->close();
?>
