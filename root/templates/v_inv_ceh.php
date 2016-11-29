<?/*
Шаблон страницы вывода инв номеров цеха
=======================
$invent_ceh- техника по цеху:
NAIT - наименование техники
INV - инвентарный номер
NAIM - наименование цеха
CEX - номер цеха
NAIO - объект
MESTO - Место расположения
USIK - Пользователь
FIOC - Ответственный за эксплуатацию по в цехе
GVP - Год выпуска

$ob_ceh - объекты цеха
FIOO - Ответственный за эксплуатацию по объекту
NAIO - наименование объекта
KOB - код объекта

$nait_ceh - виды техники цеха

*/?>
<hr width="100%">
<h2><a href="index.php">Поиск по инвентарному номеру</a> | <a href="ceh.php">Выбор цеха</a></h2>
<hr width="100%">

<?//выводим подразделения?>
<?php
if ($ob_ceh[0] == true)
{

	echo('
	<table >');
		echo('

		<tr>');
	if ($_GET['id'] == '95')
	{
		for ($i=0; $i < 18; $i++)
		{
		echo('<td><a href="ceh.php?id=' . $_GET['id'] . '&ob=' .$ob_ceh[$i]['KOB'].'">'.$ob_ceh[$i]['NAIO'].'</a></td>');
		}
		echo('</tr>');

		echo('<tr>');
		for ($i=18; $i < (count($ob_ceh)-1); $i++)
		{
			echo('<td><a href="ceh.php?id=' . $_GET['id'] . '&ob=' .$ob_ceh[$i]['KOB'].'">'.$ob_ceh[$i]['NAIO'].'</a></td>');
		}
		echo('</tr>');


	}
	else
	{
		for ($i=0; $i < (count($ob_ceh)-1); $i++)
		{
			echo('<td><a href="ceh.php?id=' . $_GET['id'] . '&ob=' .$ob_ceh[$i]['KOB'].'">'.$ob_ceh[$i]['NAIO'].'</a></td>');
		}
		echo('</tr>');
		//выводим	ответственных
		echo('<tr>');
		for ($i=0; $i < (count($ob_ceh)-1); $i++)
		{
			echo(

				'<td>' . $ob_ceh[$i]['FIOO'] . '</td>');
		}
	}
	echo('</tr>');
	echo ('</table>');
}
?>
<hr width="100%">
<p>Количество единиц вычислительной и орг.техники:&nbsp;&nbsp;&nbsp;-&nbsp;<?=(count($invent_ceh)-1)?></p>

<?php
if ($ob_ceh[0] == false)
{
echo('<b>Ответственный за эксплуатацию:</b>&nbsp;&nbsp;' . $invent_ceh[0]['FIOC'] . '<br/>');
}
?>
<br/>
<?//выводим виды техники цеха?>
<table>
<tr>
<?php for ($i=0; $i < (count($nait_ceh)-1); $i++): ?>
<td><a href="ceh.php?nait=<?=$nait_ceh[$i]['KODT']?>&id=<?=$_GET['id']?>"><?=$nait_ceh[$i]['NAIT']?>
	</a></td>
<?php endfor?>

<td><a href="ceh.php?id=<?=$_GET['id']?>"><?='Вся техника'?>
	</a></td>
</tr>
</table>
<br>
<?//выводим перечень техники?>
<table>
<tr>
	<td>Инвентарный номер:</td>
	<td>Вид техники:</td>
	<?php if ($ob_ceh[0] == true):?>
	<td>Подразделение:</td>
	<?php endif?>
	<td>Место расположения:</td>
	<td>Пользователь:</td>
	<td>Год выпуска:</td>
</tr>
<?php for ($i=0; $i < (count($invent_ceh)-1); $i++): ?>
 <tr>
	<td><a href="ceh.php?inv=<?=$invent_ceh[$i]['INV']?>"><?=$invent_ceh[$i]['INV']?>
	</a></td>
	<td><?=$invent_ceh[$i]['NAIT']?></td>
	<?php if ($ob_ceh[0] == true):?>
	<td><?=$ob_ceh[($invent_ceh[$i]['KOB']-1)]['NAIO']?></td>
	<?php endif?>
	<td><?=$invent_ceh[$i]['MESTO']?></td>
	<td><?=$invent_ceh[$i]['USIK']?></td>
	<td><?=$invent_ceh[$i]['GVP']?></td>
</tr>
<?php endfor?>
</table>
<br>
<hr width="100%">
