<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
</head>
<body>

<h2>Electricity Bill Calculator</h2>

<form method="post">
    Enter Units Consumed: 
    <input type="number" name="units" required>
    <input type="submit" value="Calculate">
</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $units = $_POST["units"];
    $bill = 0;

    if($units <= 100) {
        $bill = $units * 1.5;

    } elseif($units <= 200) {
        $bill = (100 * 1.5) + (($units - 100) * 2.5);

    } else {
        $bill = (100 * 1.5) + (100 * 2.5) + (($units - 200) * 4);
    }

    echo "<h3>Total Electricity Bill: ₹" . $bill . "</h3>";
}

?>

</body>
</html>
