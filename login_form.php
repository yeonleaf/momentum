<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>momentum</title>
<link href="./css/login_form.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./js/login.js"></script>
</head>
<body> 
	<section>
        <div id="main_content">
      		<div id="login_box">
	    		<div id="login_title">
		    		<span>Log In</span>
	    		</div>
	    		<div id="login_form">
          		<form  name="login_form" method="post" action="login.php">		       	
                  	<ul>
                    <li><input type="text" name="id" placeholder="Your ID" ></li>
                    <li><input type="password" id="pass" name="pass" placeholder="Password" ></li> <!-- pass -->
                  	</ul>
                  	<div id="login_btn">
					  <a href="#"><img src="./img/login.png" id="log_btn" onclick="check_input()"></a>
					  <br><br>
					  <a href="signup_form.php"><img src="./img/signup.png" id="sign_btn"></a>
                  	</div>		    	
           		</form>
        		</div> <!-- login_form -->
    		</div> <!-- login_box -->
        </div> <!-- main_content -->
	</section> 
</body>
</html>

