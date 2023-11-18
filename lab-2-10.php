<!DOCTYPE html>
<html lang="ru">
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Задание №3</title>
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
			<h1>Задание №3</h1>
		    </td>
		</tr>
		<tr>
		    <td>
			<table>
			<?php
			    for($i=0; $i<10; ++$i) {
				echo "<tr>";
				for($j=1; $j<=10; ++$j) {
				    echo ($j%2==0) ? "<td style=\"color: red;\">".($j+$i*10)."</td>":"<td>".($j+$i*10)."</td>";
				}
				echo "</tr>";
			    }
			?>
			</table>
		    </td>
		</tr>
	    </table>
	</div>
	<br>
    </body>
</html>