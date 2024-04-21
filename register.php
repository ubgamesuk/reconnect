<?php
$conn=mysqli_connect("localhost","root","","reconnect");
if($conn){
    echo "Connected";
}
else{
    echo "Failed";
}

?>