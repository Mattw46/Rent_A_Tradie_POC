<?php
/*
  Base functions to run database queries.
  Depends on dbconfig.php
*/

//require 'dbconfig.php';

/* Takes query as a string and returns associative array */
function query($queryString) {
  require 'dbconfig.php';

  $dsn = "mysql:host=$host;dbname=$db";

  try {
    // create a PDO connection
    $conn = new PDO($dsn, $username, $password);

    // display message if connection is successful
    if ($conn) {
      echo "Connected to database\n";
    }

    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();
    //$result = $stmt->fetchAll();
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    /*if(!$arr) exit('No rows');
    var_export($arr);
    echo "Username: ".$arr[0]['username']."\n";*/
    $stmt = null;
    return $arr;

    } catch (PDOExecption $e) {
      echo $e->getMessage();
    }
}

//query("test");
?>
