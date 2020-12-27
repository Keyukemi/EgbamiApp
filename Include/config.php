<?php 
//connect to database
$conn = mysqli_connect('localhost', 'keyu', 'test1234', 'egbamiappdb');
//check connection
if (!$conn){ 
    echo 'connection error: '. mysqli_connect_error();
}
?>

