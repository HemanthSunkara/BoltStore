<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "bolt";

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the users table if it doesn't exist.
$sql = "CREATE TABLE IF NOT EXISTS orders (
    id int(15) NOT NULL auto_increment,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    message varchar(255) NOT NULL,
    contactNo int(10) NOT NULL,
    date timestamp NOT NULL default CURRENT_TIMESTAMP,
    PRIMARY KEY  (id)
  ) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;";

if (mysqli_query($connection, $sql)) {
    echo "Users table created successfully.";
} else {
    echo "Error creating users table: " . mysqli_error($connection);
}

mysqli_close($connection);
?>