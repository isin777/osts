<?/*
������ �������� ������ ��� ������� ����
=======================
$invent_ceh- ������� �� ����:
NAIT - ������������ �������
INV - ����������� �����
NAIM - ������������ ����
CEX - ����� ����
NAIO - ������
MESTO - ����� ������������
USIK - ������������
FIOC - ������������� �� ������������ �� � ����
GVP - ��� �������

$ob_ceh - ������� ����
FIOO - ������������� �� ������������ �� �������
NAIO - ������������ �������
KOB - ��� �������

$nait_ceh - ���� ������� ����

*/?>
<hr width="100%">
<h2><a href="index.php">����� �� ������������ ������</a> | <a href="ceh.php">����� ����</a></h2>
<hr width="100%">

<?//������� �������������?>
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
		//�������	�������������
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
<p>���������� ������ �������������� � ���.�������:&nbsp;&nbsp;&nbsp;-&nbsp;<?=(count($invent_ceh)-1)?></p>

<?php
if ($ob_ceh[0] == false)
{
echo('<b>������������� �� ������������:</b>&nbsp;&nbsp;' . $invent_ceh[0]['FIOC'] . '<br/>');
}
?>
<br/>
<?//������� ���� ������� ����?>
<table>
<tr>
<?php for ($i=0; $i < (count($nait_ceh)-1); $i++): ?>
<td><a href="ceh.php?nait=<?=$nait_ceh[$i]['KODT']?>&id=<?=$_GET['id']?>"><?=$nait_ceh[$i]['NAIT']?>
	</a></td>
<?php endfor?>

<td><a href="ceh.php?id=<?=$_GET['id']?>"><?='��� �������'?>
	</a></td>
</tr>
</table>
<br>
<?//������� �������� �������?>
<table>
<tr>
	<td>����������� �����:</td>
	<td>��� �������:</td>
	<?php if ($ob_ceh[0] == true):?>
	<td>�������������:</td>
	<?php endif?>
	<td>����� ������������:</td>
	<td>������������:</td>
	<td>��� �������:</td>
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
