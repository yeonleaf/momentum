<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";

    $logged = "Hi, ".$username;
?>	


<head>
    <meta charset="utf-8">
    <title>Momentum</title>
    <link href="./css/main.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap&subset=latin-ext" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        window.onload = function(){
            document.querySelector("#date").textContent = getTime();
            init();

            $.ajax({
                type: 'get',
                url: 'todo_get.php',
                success: function(res) {
                    $('#checklist').html(res);
                }
            })
        }

        function check_enter() {
            if (window.event.keyCode === 13){
                var todo = document.getElementById('checkinput').value;
                $.ajax({
                    type: 'post',
                    url: 'todo.php',
                    data: $("form").serialize(),
                    success: function(res) {
                        var checkli = document.getElementById('checklist');
                        var checkinp = document.getElementById('checkinput');
                        let createA = document.createElement('span');
                        createA.innerText = todo;
                        createA.id = res;
                        createA.className = 'todo';
                        createA.setAttribute("onclick", "del_todo('" + res + "')");
                        let br = document.createElement('br');
                        checkli.appendChild(createA);
                        checkli.appendChild(br);
                    }
                });
            }
        }

        function del_todo(target) {
            let data = {
                target: target
            }
            $.ajax({
                type: 'post',
                url: 'todo_del.php',
                data: data,
                success: function() {
                    $('#'+target).remove();
                }
            })
        }

    </script>
</head>

<body>
    <div id="header">
        <span id = "date">날짜</span>
        <div>
            <span id = "time">시간</span>
        </div>
        <form method=get action="http://www.google.co.kr/search" target="_blank">
            <div id="goo">
                <input type="search" name="q" class="goo_text" size=25 maxlength=255 placeholder="  Search in Google"/>
                <!-- type="image"는 "submit"역할을 하는 이미지 버튼 -->
                <input type="image" name="btnG" class="goo_button" src="./img/google.png" value="Google 검색" onclick = "window.open('http://www.google.co.kr/search')">
            </div>
        </form>
    </div>

    <div id ="main">
        <p3><?=$logged?></p3><br>
        <p3>What is your main focus today?</p3><br>
        <small class="sub_title">Click the item if you want to finish it or delete it</small><br>
        <form name = 'todo_form'>
            <input type='text' style='display:none;'></input>
            <p3><input type = 'text' id = 'checkinput' name = 'todo' onkeyup = 'check_enter()'></p3>
        </form>
        <div id = 'checklist' style="overflow:auto; weight: 300px; height: 300px;"></div>
    </div>
    <br>
    <div id="footer">
        <p class="saying">Manage your work with Momentum!</p>
        <a href="logout.php"><img src="./img/logout.png" class="logout"></a>
    </div>
    <script src = "./js/main.js"></script>
</body>
