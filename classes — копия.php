<!doctype html>
<html lang="ru">
<html>
	<head>
	<meta charset="utf-8">
		<title>
			classes
		</title>
	</head>
	<body>
<?php
class Publication{
	
	## Свойства которые точно соотвествуют полям базы данных.
	public $id;
	public $title;
	public $date;
	public $short_content;
	public $content;
	public $preview;
	public $author_name;
	public $type;
	
		function __construct(){
			
		}
		
}

class NewsPublication extends Publication
{
	public function printItem(){
		echo '<br> Вызван метод '.__METHOD__;
		echo '<br> Это новость';
		echo'<hr>';
		
	}
}

class ArticlePublication extends Publication
{
	public function printItem(){
		echo '<br> Вызван метод '.__METHOD__;
		echo '<br> Это статья';
		echo'<hr>';
	}
}

class PhotoReportPublication extends Publication
{
	public function printItem(){
		echo '<br> Вызван метод '.__METHOD__;
		echo '<br> Это фотоотчёт';
		echo'<hr>';
	}
}

?>
	</body>
</html>