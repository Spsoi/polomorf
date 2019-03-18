<!doctype html>
<html lang="ru">
<html>
	<head>
	<meta charset="utf-8">
		<title>
			Publication
		</title>
	</head>
	<body>
<?php
## Собрать все нужные данные и поместить в один массив
## подключим классы которые мы объявили в classes.php
require_once 'classes.php';

## Объявим массив в который положим результат.
$publications = array();

$connection = mysqli_connect("localhost","root","","polimorfizm");
	if (mysqli_connect_errno){
		echo "Не возможно подключится к MySQL". mysqli_connect_error();
	}
		## по очереди получаем доступ к каждой выбранной записи
		## Заливаем всю таблицу в переменную
	$result = mysqli_query($connection, "SELECT * FROM publication");
		while ( $row = mysqli_fetch_assoc($result)){
			## наполняем массив объектами в этом цикле
			$publications[] = new $row['type']($row);
		
		}



/* echo'<pre>';
print_r($publications); */
?>
	</body>
</html>