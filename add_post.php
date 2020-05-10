<?php
include  "db.php";
add_todo($_POST["action"]);
header("Location: http://localhost/todo");
?>