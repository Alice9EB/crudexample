<?php 

   require_once 'db_config.php';
   $conn=mysql_connect($servername,$username,$password,$dbname);

   if(!$conn){
         die("Connection Failed" .mysql_connect_error());
   }
   $sql = "SELECT * FROM members";
   $result = $conn->query($sql);

   while ($row = $result->fetch_assoc()) 
      {
   	
   	echo $row['id'] . " : " . $row['fname'] . " : " . $row['lname'] ." : " . $row['contact'] . "<br>";

   	}
      $conn->close();
?>