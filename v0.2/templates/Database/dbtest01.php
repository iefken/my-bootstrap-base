<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 3/04/2018
 * Time: 8:51
 */

$servername = "localhost";
$username = "mysqluser";
$password = "mysqlpassword";
$dbname = "mytestdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql =
"DROP TABLE myguests;
CREATE TABLE IF NOT EXISTS `MyGuests` (
`MyGuestsId` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL DEFAULT '',
  `lastname` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`MyGuestsId`)
    );";


if ($conn->multi_query($sql) === TRUE) {
    echo "Table dropped and created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>