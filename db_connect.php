<?php

// Credentials
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the data from the database
$sql = "SELECT * FROM dv_test.t2";
global $RESULT;
$RESULT = $conn->query($sql);

// Close connection
$conn->close();
