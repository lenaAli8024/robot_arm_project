
<?php
$conn = new mysqli("localhost", "root", "", "robot_arm");
$conn->query("UPDATE poses SET status = 0 WHERE status = 1");
$conn->close();
?>
