<?php

$con = mysqli_connect('localhost', 'root', '', 'tarak');

// Check if the connection was successful
if (!$con) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Perform validation
$username = $_POST['mail'];  

$cb1 = isset($_POST['star1']) ? $_POST['star1'] : '';
$cb2 = isset($_POST['star2']) ? $_POST['star2'] : '';
$cb3 = isset($_POST['star3']) ? $_POST['star3'] : '';
$cb4 = isset($_POST['star4']) ? $_POST['star4'] : '';
$cb5 = isset($_POST['star5']) ? $_POST['star5'] : '';

if (!empty($cb1) && empty($cb2) && empty($cb3) && empty($cb4) && empty($cb5)) {
    $sql = "INSERT INTO table_name (review) VALUES ('$username','$cb1',2)";
} else if (!empty($cb1) && !empty($cb2) && empty($cb3) && empty($cb4) && empty($cb5)) {
    $sql = "INSERT INTO table_name (review) VALUES ('$username','$cb2',2)";
} else if (!empty($cb1) && !empty($cb2) && !empty($cb3) && empty($cb4) && empty($cb5)) {
    $sql = "INSERT INTO table_name (review) VALUES ('$username','$cb3',2)";
} else if (!empty($cb1) && !empty($cb2) && empty($cb3) && !empty($cb4) && empty($cb5)) {
    $sql = "INSERT INTO table_name (review) VALUES ('$username','$cb4',2)";
} else if (!empty($cb1) && !empty($cb2) && empty($cb3) && empty($cb4) && !empty($cb5)) {
    $sql = "INSERT INTO table_name (review, moviename) VALUES ('$username','$cb5', 2)";
} else {
    die("Invalid checkbox combination");
}

$rs = mysqli_query($con, $sql);
if ($rs) {
    echo "Contact Records Inserted";
} else {
    echo "Failed to insert contact records: " . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>
