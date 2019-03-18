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
$publications = array($news1, $news2, $article1, $photo1);

/* echo '<pre>';
print_r ($publications); */

?>
	</body>
</html>