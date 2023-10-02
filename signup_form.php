<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>momentum</title>
<link rel="stylesheet" type="text/css" href="./css/signup_form.css">
<script>
   function check_input()
   {
      if (!document.signup_form.id.value) {
          alert("이메일을 입력하세요!");    
          document.signup_form.id.focus();
          return;
      }

      if (!document.signup_form.pass.value) {
          alert("비밀번호를 입력하세요!");    
          document.signup_form.pass.focus();
          return;
      }

      if (!document.signup_form.pass_confirm.value) {
          alert("비밀번호확인을 입력하세요!");    
          document.signup_form.pass_confirm.focus();
          return;
      }

      if (!document.signup_form.name.value) {
          alert("이름을 입력하세요!");    
          document.signup_form.name.focus();
          return;
      }

      if (document.signup_form.pass.value != 
            document.signup_form.pass_confirm.value) {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
          document.signup_form.pass.focus();
          document.signup_form.pass.select();
          return;
      }

      document.signup_form.submit();
   }

   function reset_form() {
      document.signup_form.id.value = "";  
      document.signup_form.pass.value = "";
      document.signup_form.pass_confirm.value = "";
      document.signup_form.name.value = "";
      document.signup_form.id.focus();
      return;
   }

   function check_id() {
    //중복 확인을 위해 사용자가 입력한 아이디를 GET 방식으로 전달받을 수 있다. 
    //즉 사용자가 아이디 입력 창에 입력한 값 document.signup_form.id.value를 
    //signup_check_id.php의 전역변수 $_GET["id"]에 의해 전달받는다.
     window.open("signup_check_id.php?id=" + document.signup_form.id.value,
         "IDcheck",
          "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
   }
</script>
</head>
<body> 
	<section>
        <div id="main_content">
      		<div id="signup_form">
          	<form  name="signup_form" method="post" action="signup.php">
			    <h2>Sign Up</h2>
    		    	<div class="form id">
				        <label class="col1" for="id">What's Your E-Mail?</label>
                        <input type="email" name="id" placeholder="name@domain.com">
				        <a href="#"><img src="./img/check_id.gif" onclick="check_id()" class="btn"></a>             
			       	</div>
			       	<div class="clear"></div>
                    <br>
			       	<div class="form">
				        <label class="col1" for="pass">Write Down Your Password.</label>
                        <input type="password" name="pass">
				        <div class="col2">
							
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <label class="col1" for="pass_confirm">Check Your Password.</label>
				        <input type="password" name="pass_confirm">                 
			       	</div>
                    <div class="clear"></div>
                    <br>
			       	<div class="form">
				        <label class="col1" for="name">What's Your Name?</label>
				        <input type="text" name="name">            
			       	</div>
                    <div class="clear"></div>
                    <br>
			       	<div class="bottom_line"> </div>
			       	<div class="buttons">
	                	<img style="cursor:pointer" class="btn" src="./img/button_save.gif" onclick="check_input()">&nbsp;
                  	    <img id="reset_button" class="btn" style="cursor:pointer" src="./img/button_reset.gif"
                  	onclick="reset_form()">
	           	</div>
           	</form>
        	</div> <!-- signup_form -->
        </div> <!-- main_content -->
	</section> 
</body>
</html>

