<!DOCTYPE html>
<html lang="ru">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание №2</title>
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
				if ($_POST['cmb'] == 0 ) {
					echo $_POST['first']." + ".$_POST['second']." = ".$_POST['first']+$_POST['second'];
				} elseif ($_POST['cmb'] == 1 ) {
					echo $_POST['first']." - ".$_POST['second']." = ".$_POST['first']-$_POST['second'];
				} elseif ($_POST['cmb'] == 2 ) {
					echo $_POST['first']." * ".$_POST['second']." = ".$_POST['first']*$_POST['second'];
				} else {
					if ($_POST['second']!=0) {
						echo $_POST['first']." / ".$_POST['second']." = ".$_POST['first']/$_POST['second'];
					} else {
						echo "Делить на ноль нельзя.";
					}
				}
				?>
				</td>
			</tr>
        </table>
    </div>
    <br>
    </body>
</html>