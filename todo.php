<?php
    session_start();
    $id = $_SESSION['userid'];
    $todo = $_POST['todo'];

    $con = mysqli_connect("localhost", "momentum", "spxVPjQCZzTr43AX", "momentum_db");
    $sql = "select if( isnull(todo), '1004', '0' ) from todo_table where memberID = '$id'";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_row($result);

    if($row[0] == '1004'){
        $sql2 = "update todo_table set todo='$todo' where memberID = '$id'";
    } elseif($row[0] == '0'){
        $sql2 = "insert into todo_table(memberID, todo) values ('$id', '$todo')";
        $sql3 = "select todo from todo_table where todo = '$todo'";
    }
    // "update todo_table set todo='$todo' where memberID = '$id'";
    mysqli_query($con, $sql2);
    $result2 = mysqli_query($con, $sql3);
    $checkadd = mysqli_fetch_row($result2);

    echo("
        <script>
        history.go(-1)
        </script>
    ");
?>
<form 
