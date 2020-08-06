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
$statement = $mysqli->prepare("select * from users where username = ? and password = ?");
$statement->bind_param("ss", $username, $password);

$statement->execute();

// if we have results from sql user query
$result = $statement->get_result();
if ($result->num_rows > 0) {
    echo "Number of rows ... " . $statement->num_rows . "<br>";
    // output data of each row
  while($row = $result->fetch_assoc()) {
    if ($row['username'] == $username && $row['password'] == $password) {
        echo "Login success! Welcome <b>" . $row['username'] . "</b><br>";
    } else {
        echo "Failed to login!";
    }
  }
} else {
    die("Username or password not found");
}

$statement->close();
$mysqli->close();