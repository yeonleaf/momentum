<?php

    session_start();
    $id = $_POST['id'];
    $target = $_POST['target'];
    $sql = "delete from todo_table where todoNum = '$target'";
    $con = mysqli_connect("localhost", "root", "", "momentum_db", "3308");
    $result = mysqli_query($con, $sql);

?>