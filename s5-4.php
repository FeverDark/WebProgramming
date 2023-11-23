<!DOCTYPE html>
<html lang="ru">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание №4</title>
    <style>
        body {
	background-color: #f3f2ff;
	color: #000;
	text-align: center;
        } 
        a {
	color: #000;
	font-size: 24px;
        }
    </style>
    </head>
    <body>
    <div>
        <table style="margin-left: auto;margin-right: auto;">
			<tr>
				<td>
				<?php
				$logins = array(
					"admin"  => array(true, "Администратор"),
					"root" => array(true, "Root-пользователь"),
					"db" => array(true, "пользователь ДБ"),
					"owner" => array(true, "Владелец"),
				);
				if (!empty($logins[$_POST['login']][0])) {
					echo "<h2>Здравствуйте, ".$logins[$_POST['login']][1].".</h2>";
				} else {
					echo "<h2>Вы не зарегистрированный пользователь!</h2>";
				}
				?>
				</td>
			</tr>
        </table>
    </div>
    <br>
    </body>
</html>