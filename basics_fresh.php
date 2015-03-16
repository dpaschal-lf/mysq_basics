<?php

$conn = mysqli_connect('localhost', 'root', '', 'lf_db');

$result = mysqli_query($conn,'SELECT * FROM student_grades');

while($row = mysqli_fetch_assoc($result))
{
    print("Name = ");print_r($row).print('<br>');
}

//$v = "This is second.";
//print("This is first.". print_r($v,true));

?>