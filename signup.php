<?php
    $id   = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
              
    $con = mysqli_connect("localhost", "root", "", "momentum_db", "3308");

	$sql = "insert into member_table(memberID, memberName, pass)";
	$sql .= "values('$id', '$name', '$pass')";

	$sql2 = "insert into todo_table(memberID)";
	$sql2 .= "values('$id')";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
	mysqli_query($con, $sql2);
	mysqli_close($con);     
	
	echo("
	<script>
		location.href = 'index.html';
	</script>
	");
?>

