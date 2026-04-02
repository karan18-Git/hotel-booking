<?php
$mysqli = new mysqli("localhost", "root", "", "hbwebsite");

if ($mysqli->connect_error) {
    die("Database Connection Failed: " . $mysqli->connect_error);
} else {
    echo "Database Connected Successfully!";
}
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$mysqli = new mysqli("localhost", "root", "", "hbwebsite");

// Check connection
if ($mysqli->connect_error) {
    die("Database Connection Failed: " . $mysqli->connect_error);
} else {
    echo "Database Connected Successfully!";
}
?>
<?php
echo "PHP is working!";
?>
