<?/*
Шаблон страницы выбора цехов
=======================
$all_ceh - список цехов:
CEX - идентификатор цеха
NAIM - наименование цеха
*/?>
<hr width="100%">
<h3><a href="index.php">Поиск по инвентарному номеру</a></h3>
<hr width="100%">
<h2>Выбор цеха</h2>
<hr width="100%">
<table>
	<?php for ($i=0; $i < (count($all_ceh)-1); $i++): ?>
	<tr>
		<td><a href="ceh.php?id=<?=$all_ceh[$i]['CEX']?>"><?=$all_ceh[$i]['NAIM']?></a></td>
		<?/*<td><?=$all_ceh[$i]['CEX']?></td>*/?>
	</tr>
	<?php endfor?>
</table>
<br>
<hr width="100%">
