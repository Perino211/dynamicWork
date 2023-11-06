<?php
  $firstname= $_POST["firstname"];
  $secondname= $_POST["secondname"];
  $stdnumber= $_POST["stdnumber"];
  $stdcourse= $_POST["stdcourse"];
  
  //database connection
  $conn = new mysqli('localhost','root','','sample');

  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  }else {
    $stmt = $conn->prepare("INSERT INTO details(First_Name,Last_Name,Student_Number,Course) VALUES(?,?,?,?)");
    $stmt->bind_param("ssis",$firstname,$secondname,$stdnumber,$stdcourse);
    $stmt->execute();
    echo "Registration Successful.";
    $stmt->close();
    $conn->close();
  }
?>