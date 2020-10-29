<?php

$path = "database.db";

try {
  $conn = new PDO("sqlite:$path");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE myDBPDO;";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Database created successfully<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
<?php
// class SQLitePDO extends PDO {
//     function __construct($filename) {
//         $filename = realpath($filename);
//         parent::__construct('sqlite:' . $filename);

//         $key = ftok($filename, 'a');
//         $this->sem = sem_get($key);
//     }

//     function beginTransaction() {
//         sem_acquire($this->sem);
//         return parent::beginTransaction();
//     }

//     function commit() {
//         $success = parent::commit();
//         sem_release($this->sem);
//         return $success;
//     }

//     function rollBack() {
//         $success = parent::rollBack();
//         sem_release($this->sem);
//         return $success;
//     }
// }

// $sqlite = new SQLitePDO('database.sqlite');

// $sqlite->beginTransaction();


?>