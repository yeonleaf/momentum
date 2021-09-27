<?php
    $id   = $_POST["id"];
    $pass = $_POST["pass"];

   $con = mysqli_connect("localhost", "momentum", "spxVPjQCZzTr43AX", "momentum_db");
   $sql = "select * from member_table where memberID='$id'";
   $result = mysqli_query($con, $sql);

   $num_match = mysqli_num_rows($result);

   if(!$num_match) 
   {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다!')
             history.go(-1)
           </script>
         ");
    }
    else
    {
        $row = mysqli_fetch_array($result);
        $db_pass = $row["pass"];

        mysqli_close($con);

        if($pass != $db_pass)
        {

           echo("
              <script>
                window.alert('비밀번호가 틀립니다!')
                history.go(-1)
              </script>
           ");
           exit;
        }
        else
        {
            session_start();
            $_SESSION["userid"] = $row["memberID"];
            $_SESSION["username"] = $row["memberName"];

            echo("
              <script>
                location.href = 'main.php';
              </script>
            ");
        }
     }        
?>
