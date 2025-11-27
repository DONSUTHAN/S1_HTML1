<!DOCTYPE html>
<html>
<head>
    <title>Cricket Players List</title>
</head>
<body>

<h2>Indian Cricket Players</h2>

<?php
$players = array("Virat Kohli", "Rohit Sharma", "MS Dhoni", "Hardik Pandya", "Jasprit Bumrah");

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Player Name</th></tr>";

foreach ($players as $player) {
    echo "<tr>";
    echo "<td>$player</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
  
  
  
  
  <!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #e6e6e6;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>List of Indian Cricket Players</h2>

<?php

$players = array(
    "Virat Kohli",
    "Rohit Sharma",
    "Sachin Tendulkar",
    "MS Dhoni",
    "Shikhar Dhawan",
    "KL Rahul",
    "Jadeja",
    "Hardik Pandya",
    "Bhuvneshwar Kumar",
    "Ishant Sharma"
);

echo "<table>";
echo "<tr><th>S.No</th><th>Player Name</th></tr>";

$sno = 1;
foreach ($players as $player) {
    echo "<tr>";
    echo "<td>$sno</td>";
    echo "<td>$player</td>";
    echo "</tr>";
    $sno++;
}

echo "</table>";

?>

</body>
</html>



