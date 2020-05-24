  
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$marks=$_POST['mark'];
$dob=$_POST['date'];
$gender=$_POST['gender'];
echo("<h2>Registered data</h2>");
echo("<b>student's name:</b>".$name);
echo("<br><b>student's emailID:</b>".$email);
echo("<br><b>student's marks:</b>".$marks);
echo("<br><b>student's DOB:</b>".$dob);
echo("<br><b>student's gender:</b>".$gender);
?>