

<?php
/**
 * Created by PhpStorm.
 * User: chins
 * Date: 2/18/2016
 * Time: 1:04 AM
 */

define("HOST", '110.4.46.121');
define("USER", 'admin_1');
define("PASSWORD", 'adminswe01');
define("DATABASE", 'swe_db'); //cinema replaced with your name

//TODO : Find optimisation for replacing echo with return statement
$conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
if (mysqli_connect_errno()) {
    echo "<p>Connection failed:" . mysqli_connect_error() . "</p>\n";
} //Uncomment if need to test connection.
else {
    echo "Connection is successful!";
    echo "</br>";
}

?>