<?php 

   $servername="127.0.0.1";
   &username="root";
   $password="";
   $dbname="cruddatabase";

    $conn=mysql_connect($servername,$username,$password,$dbname);

   if(!$conn){
   		die("Connection Failed" .mysql_connect_error());
   }
   echo "Connection Success";

?>