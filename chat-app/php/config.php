<?php 
$conn = mysqli_connect("localhost", "root", "", "chat");
if (!$conn){
echo "Can't connect to Database" . mysqli_connect_error(); 
}
?> 