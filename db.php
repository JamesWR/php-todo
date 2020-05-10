<?php

try{
  $user = 'root';
  $pw = '';
  $server="localhost";
  $database="todo";

  $conn = new mysqli($server,$user,$pw,$database);
  if($conn->connect_error) {
      die("connection faild: " . $conn->connect_error);
  }

} catch (Exception $e) {
  echo "Failed : " . $e->getMessage() . "\n";
  exit;
}

function db_query($sql){
    global $conn;
    $q_result = $conn->query($sql);
    $result = [];
    if($q_result && $q_result->num_rows > 0) {
        while ($row = $q_result->fetch_assoc()){
            array_push($result, $row);
        }
    } else {
        echo 'this thing happend';
        echo $conn->error;
    }
    return $result;
}

function db_edit($sql){
    global $conn;
    $q_result = $conn->query($sql);
    $result = [];
    if(!$q_result) {
        echo 'this thing happend';
        echo $conn->error;
    }
    return $result;
}

function get_todos(){
    return db_query("SELECT * FROM todos");
}

function add_todo($action){
    $q = "INSERT INTO `todos` (`ID`, `action`, `done`) VALUES (NULL, '".$action."', '0')";
    return db_edit($q);
}

function update_todo($done, $id){
    $q = "UPDATE `todos` SET `done` = " . ($done ? "'1'" : "'0'") . " WHERE `todos`.`ID` = " . $id;
    echo "Q: " . $q;
    return db_edit($q);
}

function create_table(){
    return db_edit("CREATE TABLE `todo`.`todos` ( `ID` INT NOT NULL AUTO_INCREMENT , `action` VARCHAR(50) NOT NULL , `done` BOOLEAN NOT NULL , PRIMARY KEY (`ID`)) ENGINE = MyISAM;");
}



?>