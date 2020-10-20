<?php

    /*
    *   @author Owen Morgan (OM Solutions)
    *   @copyright OM Solutions 2018
    */
?>
<?php

$host = 'mysql-mariadb-19-104.zap-hosting.com';
$name = 'zap559160-3';
$password = '1OyWZLuG0uIx1tSy';
$dbname = 'zap559160-3';

$con = mysqli_connect($host, $name, $password, $dbname);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>