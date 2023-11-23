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
				<?php
				$a = $_POST['first'];
				switch ($_POST['cmb']) {
					case 0:
						delChetn($a, true);
						break;
					case 1:
						delChetn($a, false);
						break;
					case 2:
						delSost($a, false);
						break;
					case 3:
						delSost($a, true);
						break;
					default:
						delChetn($a, true);
						break;
				}
				function delChetn($number, $flag) {
					echo "<h2>Делители числа ".$number.":</h2>";
					echo "<p>";
				    for($i = 1; $i <= $number; ++$i) {
						if($number % $i == 0 && $flag == true && $i%2==0) echo $i." ";
						elseif ($number % $i == 0 && !$flag && $i%2!=0) echo $i." ";
					}
					echo "</p>";
				}
				function delSost($number, $flag) {
					echo "<h2>Делители числа ".$number.":</h2>";
					echo "<p>";
				    for($i = 1; $i <= $number; ++$i) {
						if($number % $i == 0) {
							$temp = 0;
							for($j = 2; $j < $i; ++$j) {
								if ($i%$j == 0) $temp++;
							}
							if($temp==0 && !$flag) echo $i." ";
							elseif ($temp!=0 && $flag) echo $i." ";
						}
					}
					echo "</p>";
				}
				?>
				</td>
			</tr>
        </table>
    </div>
    <br>
    </body>
</html>