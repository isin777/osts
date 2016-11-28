<?/*
Шаблон страницы (общий)
=======================
title - заголовок
content - текст
*/?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type"; charset="windows-1251">
	<meta name="keywords" content="ПК, принтеры, МФУ" >
	<meta name="description" content="База ПК ОСТС">
	<title>ОСТС.Учет ВиОТ | <?php echo $title?></title>
	<link rel="stylesheet" href="/templates/osts.css">
</head>
<body background="templates/Page-BgTexture.jpg">
		
	<h1><?php echo $title;?></h1>
	<?php echo $content;?>
</body>
</html>