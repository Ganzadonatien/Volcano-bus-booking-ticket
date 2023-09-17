<?php

// Step 1: Create a database connection
$servername = "localhost";
$username = "";
$password = "NO";
$dbname = " volcano bus booking ticket";

$conn =  mysqli_connect($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];


$firstname = htmlspecialchars($firstname);
$lastname = htmlspecialchars($lastname);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
$password = htmlspecialchars($password);


$stmt = $conn->prepare("INSERT INTO your_table (firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssssi", $firstname, $lastname, $email, $password);

if ($stmt->execute()) {
    
    echo "Data inserted successfully!";
} else {
    
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>