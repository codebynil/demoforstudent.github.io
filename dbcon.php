<?php
$conn = mysqli_connect('localhost', 'root');// hostname , userid
mysqli_select_db($conn, 'student'); // variable name  , db name
if(!$conn)
{
    echo "connection failed";
}
else
{
    //echo "connection ok";
}
?>