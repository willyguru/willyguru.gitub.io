<?php 
// DB credentials.
define('DB_HOST','id14542800_jaymoht');
define('DB_USER','id14542800_jaymoh');
define('DB_PASS','4b&jv|zsMGrqb_l>');
define('DB_NAME','id14542800_cpms');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>