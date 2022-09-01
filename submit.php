<?php
//Open koneksi ke DB
$servername = "localhost";
$database = "deddyrenny";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


      //if(isset($_POST['save'])){
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $name = $_POST["name"];
            $instagram_acc = $_POST["ig"];
            $wishes = $_POST["message"];
            $sql = "INSERT INTO wishes (name, instagram, wishes) VALUES ('".$name."','".$instagram_acc."','".$wishes."')";
            $result = $conn->query($sql);
              //    if ($result === TRUE) {
              //     echo "New record created successfully";
              //    } else {
              //       echo "Error: " . $sql . "<br>" . $db->error;
              //      }
          // if($result) header("Location: index.php");
	
        }
?>