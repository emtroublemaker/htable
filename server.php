<?php

//Connecting to Database
$host = "localhost";
$user = "root";
$pass = "";
$db = "hrungame";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

//Check Connection
if($conn->connect_error){
    die("Connection Failed!! ".$conn->connect_error);
    }
    else{
        echo "Connection Successful!!";
    }

$score=[];
$score = mysqli_real_escape_string($conn, $_POST['score']);
echo "<script>console.log($score)</script>";
$sql = "INSERT INTO htable VALUES ('$score')";
echo $score;
$tmp = "<script>".$score."</script>";
    echo $tmp;

if($conn->query($sql)==TRUE){
    echo 'Page Saved!';
}
    else{
        echo "Error: ".$sql."<br>".$conn->error;
    }
$conn->close();
?>