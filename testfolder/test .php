<?php
	$servername = "localhost";
	$username = 'root';
	$password = '';
	$db_name = 'account_database';

$conn = new mysqli($servername, $username, $password, $db_name) 
or die('failure to connect<br>' );
	
	echo ('connection success!<br>');

$sql = "CREATE TABLE accounts
(
	ID int(6) NOT NULL,
	lastname varchar(20) NOT NULL,
	firstname varchar(20) NOT NULL,
	level int(3) NOT NULL DEFAULT '1',
	points int(6) NOT NULL DEFAULT '0'
);
if ($conn->query($sql) === TRUE) {
    echo ('Table MyGuests created successfully');
} 
else {
    echo ('Error creating table:') . $conn->error;
}

$conn->close();

?>