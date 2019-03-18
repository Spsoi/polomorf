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
## Подключи data.php чтобы получить массив который там создался
## 
require_once 'data.php';

/* ## Объявим массив в который положим результат.
$publications = array();

## создадим несколько экземпляров классов
## NewsPublication
$news1 = new NewsPublication;
$news2 = new NewsPublication;
$news3 = new NewsPublication;

## ArticlePublication
$article1 = new ArticlePublication;
$article2 = new ArticlePublication;

## PhotoReportPublication
$photo1 = new PhotoReportPublication;
$photo2 = new PhotoReportPublication;
$photo3 = new PhotoReportPublication;

## запиши в массив $publications всё что создал
$publications = array($news1, $news2, $article1, $photo1); */


foreach ($publications as $item){
	## Получаем название класса текущего объекта
	echo 'В переменной $item находится объект класса '.get_class($item).'<br>';
	## вызываем метод(функцию) которая есть в классе объекта $item
	echo'<pre>';
	print_r($item->printItem());
	echo'</pre>';
}

?>
	</body>
</html>