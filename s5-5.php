<!DOCTYPE html>
<html lang="ru">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание №5</title>
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
				$sum = 0;
				$sum += $_POST["radio1"];
				$sum += $_POST["radio2"];
				$sum += $_POST["radio3"];
				$sum += $_POST["radio4"];
				$sum += $_POST["radio5"];
				$sum += $_POST["radio6"];
				$sum += $_POST["radio7"];
				$sum += $_POST["radio8"];
				$sum += $_POST["radio9"];
				$sum += $_POST["radio10"];
				$sum += $_POST["radio11"];
				$sum += $_POST["radio12"];
				$sum += $_POST["radio13"];
				$sum += $_POST["radio14"];
				$sum += $_POST["radio15"];
				$sum += $_POST["radio16"];
				$sum += $_POST["radio17"];
				$sum += $_POST["radio18"];
				$sum += $_POST["radio19"];
				echo "<h2>";
				if ($sum > 15) {
					echo $_POST["name"].", у вас покладистый характер.";
				} elseif ($sum <= 15 && $sum >=8) {
					echo $_POST["name"].", вы не лишены недостатков, но с вами можно ладить.";
				} else {
					echo $_POST["name"].", вашим друзьям можно посочувствовать.";
				}
				echo "</h2>";
				?>
				</td>
			</tr>
        </table>
    </div>
    <br>
    </body>
</html>