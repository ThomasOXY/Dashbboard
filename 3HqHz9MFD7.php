
<?php
/*
$DB_HOST = "innodb.endora.cz";
$DB_NAME = "spalet1646394871";
$DB_USER = "spalet1646394871";
$DB_PASS = "78+nYc*C%!sH6+YI";
*/

$DB_HOST = "localhost";
$DB_NAME = "rada";
$DB_USER = "root";
$DB_PASS = "";

$dbc = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME)
or die('Error connecting to MySQL server');

if(isset($_POST['delete'])){
$query = "TRUNCATE TABLE `comments` ";
$sql = "INSERT INTO comments (ID)
VALUES ('0')";        // replace yourTable with one to delete
$result = mysqli_query($dbc,$query);
$query_run = mysqli_query($dbc, $sql);

header('Location: dashboard.php');
}
else {
echo "Sorry";
}
?>