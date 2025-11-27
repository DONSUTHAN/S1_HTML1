<?php

$students = array("Arun", "Deepa", "Rahul", "Meera", "Jithin");

echo "<h3>Original Array:</h3>";
print_r($students);

asort($students);
echo "<h3>Sorted Array (Ascending - asort):</h3>";
print_r($students);
  
arsort($students);
echo "<h3>Sorted Array (Descending - arsort):</h3>";
print_r($students);

?>

