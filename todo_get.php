<?php

    session_start();
    $id = $_SESSION['userid'];
    $sql = "select todoNum, todo from todo_table where memberID = '$id'";
    $con = mysqli_connect("localhost", "root", "", "momentum_db", "3308");

    if ($result = mysqli_query($con, $sql)) {
        $resultHTML = "";
        while ($cur = mysqli_fetch_row($result)) {
            $resultHTML.="<span id=\"$cur[0]\" class=todo onclick=\"del_todo('$cur[0]')\">".$cur[1]."</span><br>";
        }
        echo $resultHTML;
    }

?>