<?php 
// DB credentials.
//define('DB_HOST','localhost');
//define('DB_USER','root');
//define('DB_PASS','');
//define('DB_NAME','elms');
// Establish database connection.



//DB credentials.
define('DB_HOST','remotemysql.com');
define('DB_USER','Mq0byhlWiS');
define('DB_PASS','mcn3dGCJsx');
define('DB_NAME','elms');


//$dsn = "mysql:host=$host;dbname=$db;charset=$charset";


try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>