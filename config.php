<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 3/11/18
 * Time: 14:35
 */

<?php
   define('DB_SERVER', 'localhost:8888');
   define('DB_USERNAME', 'admin');
   define('DB_PASSWORD', '12345678');
   define('DB_DATABASE', 'database');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>