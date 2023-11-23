<!DOCTYPE html>
<html lang="ru">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание №1</title>
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
				if ((int)$_POST['first'] == (int)$_POST['second']) {
					echo "Числа равны.";
				} elseif ((int)$_POST['first'] > (int)$_POST['second']) {
					echo "Число ".$_POST['first']." больше.";
				} else {
					echo "Число ".$_POST['second']." больше.";
				}
				?>
				</td>
			</tr>
        </table>
    </div>
    <br>
    </body>
</html>