<?/*
������ �������� ����� �-�� �� ������������ ������
=======================

$invent- ������� �� ������������:
INV - ����������� �����
NAIT - ������������ �������
NAIM - ������������ ����
CEX - ����� ����
NAIO - ������
MESTO - ����� ������������
USIK - ������������
FIOO - ������������� �� ������������
GVP - ��� �������

$har - �������������� �������
NAIX - ������������ �-��
XK - �������� �-��
*/?>
<h2><a href="index.php">����� �� ������������ ������</a> | <a href="ceh.php">����� ����</a> | <a href="ceh.php?id=<?=$invent['CEX']?>">�������� <?=$invent['NAIM']?></a></h2>
<br><br>
<hr width="100%">
<h2 align="center" ><?=$invent['NAIT']?></h2>
<hr width="100%">
<h4 align="center">����������� �����: <?=$invent['INV']?></h4>
<table >
<tr>
	<td>���: <?=$invent['CEX']?> <?=$invent['NAIM']?></td>
	<td>�������������: <?=$invent['NAIO']?></td>
	<td>����� ������������: <?=$invent['MESTO']?></td>
</tr>
<tr>
	<td>������������: <?=$invent['USIK']?></td>
	<td>������������� �� ������������: <?=$invent['FIOO']?><?=$invent['FIOC']?></td>
	<td>��� �������: <?=$invent['GVP']?></td>
</tr>
</table>
<h4 align="center">��������������</h4>
<table>
<?php for ($i = 0; $i < (count($har)-1); $i++): ?>
	<tr>
		<td><?=$har[$i]['NAIX']?></td>
		<td><?=$har[$i]['XK']?></td>
	</tr>
<?php endfor?>
</table>


	<h2><a href="obsl.php?inv_obs=<?=$invent['INV']?>"><p align="center"><?=������������?></p></a></h2>

<br><br>
<hr width="100%">
