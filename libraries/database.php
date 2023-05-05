
<?php
function connectdb (){
    $servername = "localhost";
    $username = "gc_admin";
    $password = "/.]9Qx5hzDU9xboS";
    $db = "boardroom";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);
    
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
    //echo "Connected successfully";
}

?>