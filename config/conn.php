<?php 
 $conn = mysqli_connect("localhost", "parth", "root", "blogging");  

 if(!$conn){
   echo "<b>Connection: </b> <span style='color: red; font-weight: bold;'>Error 🔴</span> <br> => " . mysqli_connect_error();
 }else{
   echo "<b>Connection:</b> <span style='color: green; font-weight: bold;'>Success 👍</span>";
 }
?>
