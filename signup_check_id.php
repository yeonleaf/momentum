<!DOCTYPE html>
<head>
<title>Check for duplicate IDs</title>
<meta charset="utf-8">
<style>
h3 {
   padding-left: 5px;
   border-left: solid 5px #edbf07;
}
#close {
   margin:20px 0 0 80px;
   cursor:pointer;
}

#close_btn {
   height : 50px; width : 150px;
}

</style>
</head>
<body>
<h3>Check for duplicate IDs</h3>
<p>
<?php
   $id = $_GET["id"];

   if(!$id) 
   {
      echo("<li>Please enter your ID!</li>");
   }
   else
   {
      $con = mysqli_connect("localhost", "root", "", "momentum_db", "3308");
      $sql = "select * from member_table where memberID='$id'";
      $result = mysqli_query($con, $sql);
      $num_record = mysqli_num_rows($result);

      if ($num_record)
      {
         echo "<li>ID ".$id." is already in use.</li>";
         echo "<li>Please use a different ID.</li>";
      }
      else
      {
         echo "<li>ID ".$id." is available.</li>";
      }
    
      mysqli_close($con);
   }
?>
</p>
<div id="close">
   <img src="./img/close.png" id="close_btn" onclick="javascript:self.close()">
</div>
</body>
</html>

