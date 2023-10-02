<?php
    session_start();
    $id = $_SESSION['userid'];
    $todo = $_POST['todo'];

    $con = mysqli_connect("localhost", "root", "", "momentum_db", "3308");

    $sql1 = "insert into todo_table(memberID, todo) values ('$id', '$todo')";
    $sql2 = "select todoNum from todo_table where todo = '$todo'";

    mysqli_query($con, $sql1);
    $result = mysqli_query($con, $sql2);
    $checkadd = mysqli_fetch_row($result);
    echo $checkadd[0];

?>
