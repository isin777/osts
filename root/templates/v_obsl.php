<?/*
������ �������� ������������ �� ������������ ������
=======================

$obsl_inv - �������� �� ������������:

*/?>
<h2><a href="index.php">����� �� ������������ ������</a> | �������� ������������ | <a href="ceh.php?inv=<?=$_GET['inv_obs']?>">�-�� <?=$_GET['inv_obs']?></a></h2>
<br><br>
<hr width="100%">

<table>
<?php for ($i=0; $i < (count($obsl_inv)-1); $i++): ?>
<tr>
	<td>����: <?=$obsl_inv[$i]['DT1']?></td>
	<td>��� �����: <?=$obsl_inv[$i]['NAIJ']?></td>
	<td>���������: <?=$obsl_inv[$i]['NAIR']?></td>
	<td>�����������: <?=$obsl_inv[$i]['FIO']?></td>
</tr>
<?php endfor?>
</table>

<br><br>
<hr width="100%">
