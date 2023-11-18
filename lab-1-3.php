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
			<h1>Задание №1</h1>
		    </td>
		</tr>
		<tr>
		    <td>
			<?php
			    const NUM_E = 2.71828;
			    echo "<br>Чиcло e равно " . NUM_E;
			    $NUM_E1 = NUM_E;
			    echo "<br>\$num_e1 = " . $NUM_E1 . " - " . gettype($NUM_E1);
			    $NUM_E1 = (string) $NUM_E1;
			    echo "<br>\$num_e1 = " . $NUM_E1 . " - " . gettype($NUM_E1);
			    $NUM_E1 = (int) $NUM_E1;
			    echo "<br>\$num_e1 = " . $NUM_E1 . " - " . gettype($NUM_E1);
			    $NUM_E1 = (bool) $NUM_E1;
			    echo "<br>\$num_e1 = " . $NUM_E1 . " - " . gettype($NUM_E1);
			?>
		    </td>
		</tr>
	    </table>
	</div>
	<br>
    </body>
</html>