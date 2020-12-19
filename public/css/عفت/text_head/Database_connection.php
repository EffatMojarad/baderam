<?php

 // Create connection

 $con=mysqli_connect("localhost","watering_effat","95154158effat","watering_data");

 

 // Check connection

 if (mysqli_connect_errno($con))

   {

   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   exit;

   }
   $sql="INSERT INTO data2 (name)

 VALUES

 ('$_POST[name]')";

 

 if (!mysqli_query($con,$sql))

   {

   die('Error: ' . mysqli_error($con));

   }
   echo '<h1>1 record added</h1>';
echo '<a href="http://www.watering2020.ir/">بازگشت به صفحه اصلی</a>';
 


 mysqli_close($con);
  
 ?>