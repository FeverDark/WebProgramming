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
			<h1>Задание №4</h1>
		    </td>
		</tr>
		<tr>
		    <td>
			<table>
			<?php
			    $A = rand(0, 499);
			    $flag = false;
			    echo "Случайное число: ".$A;
			    for ($i = 0; $i <= floor(sqrt($A)); ++$i) {
				$j = sqrt($A - $i ** 2);
    				if (fmod($j, 1) <= 0) {
        			    echo "<br>Можно представить в виде суммы квадратов чисел $i и $j";
				    $flag = true;
				}
			    }
			    if ($flag == false) echo "<br>Нельзя представить в виде суммы квадратов чисел";
			?>
		    </td>
		</tr>
	    </table>
	</div>
	<br>
    </body>
</html>