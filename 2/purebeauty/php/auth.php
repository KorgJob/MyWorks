<?php
        $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
        $pass = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
    
        $pass = md5($pass."jfdawdawd");
    
        $mysql = new mysqli('localhost','root','','purebeauty'); 
    
        $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass' ");
        $user = $result->fetch_assoc();
    
        if(!$user) {
            header('Refresh: 5; url='.$_SERVER['HTTP_REFERER']);
            echo "<!DOCTYPE html>\n"; 
            echo "<html lang=\"ru\">\n"; 
            echo "    <head>\n"; 
            echo "        <title>Ошибка</title>\n"; 
            echo "        <script>\n"; 
            echo "          function countdownRedirect(url, msg) {\n"; 
            echo "              var TARG_ID = \"COUNTDOWN_REDIRECT\";\n"; 
            echo "              var DEF_MSG = \"Redirecting...\";\n"; 
            echo "              if( ! msg ) {\n"; 
            echo "                  msg = DEF_MSG;\n"; 
            echo "              }\n"; 
            echo "              if( ! url ) {\n"; 
            echo "                  throw new Error('You didn\'t include the \"url\" parameter');\n"; 
            echo "              }\n"; 
            echo "              var e = document.getElementById(TARG_ID);\n"; 
            echo "              if( ! e ) {\n"; 
            echo "                  throw new Error('\"COUNTDOWN_REDIRECT\" element id not found');\n"; 
            echo "              }\n"; 
            echo "              var cTicks = parseInt(e.innerHTML);\n"; 
            echo "              var timer = setInterval(function() {\n"; 
            echo "              if( cTicks ) {\n"; 
            echo "                  e.innerHTML = --cTicks;\n"; 
            echo "              } else {\n"; 
            echo "                  clearInterval(timer);\n"; 
            echo "                  document.body.innerHTML = msg;\n"; 
            echo "                  location = url; \n"; 
            echo "              }\n"; 
            echo "          }, 1000);\n"; 
            echo "          }\n"; 
            echo "      </script>\n"; 
            echo "    </head>\n"; 
            echo "    <body onload='countdownRedirect(\"<http://yandex.ru/\", \"Redirecting...\")'>\n"; 
            echo "            <h2 style=\"text-align:center; font-size:36px; font-family: sans-serif;\">Пользователь не найден, проверь введенные данные</h2>\n"; 
            echo "            <p style=\"text-align:center; font-size: 24px;\">Вы будете перемещены через <span id=\"COUNTDOWN_REDIRECT\">5</span> сек.</p>\n"; 
            echo "    </body>\n"; 
            echo "</html>\n";
            exit();
        }
        setcookie('user', $user['login'], time() + 3600, "/");
        setcookie('role',$user['role'], time() + 3600, "/");
        setcookie('email',$user['email'], time() + 3600, "/");
        setcookie('id',$user['id'], time() + 3600, "/");

        $mysql->close();
    
        header("Location: ".$_SERVER['HTTP_REFERER']);
?>