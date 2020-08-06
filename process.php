<?php
// Get values passed from form in login.php file
$username = $_POST['user'];
$password = $_POST['pass'];

// connect to the server and select database
$mysqli = new mysqli("localhost", "root", "", "login");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

// to prevent mysql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = $mysqli->real_escape_string($username);
$password = $mysqli->real_escape_string($password);



// query the database for user
$result = $mysqli->query("select * from users where username = '$username' and password = '$password'");

// if we have results from sql user query
if ($result->num_rows > 0) {
    // output data of each row
  while($row = $result->fetch_assoc()) {
    if ($row['username'] == $username && $row['password'] == $password) {
        echo "Login success! Welcome ".$row['username'];
    } else {
        echo "Failed to login!";
    }
  }
} else {
    die("Username or password not found");
}

$mysqli->close();