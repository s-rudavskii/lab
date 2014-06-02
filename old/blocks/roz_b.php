<?php 

if (isset($_POST['zmist']))
	{
		$zmist = $_POST["zmist"];
		$zmist = trim($zmist);
		
		
		$zam = '<tr>
			 <td height="15" colspan="2"><img src="http://www.bohdan-books.com/img/spacer.gif" width="15" height="15" /></td>
		 </tr>';
		$na = '';
		$zmist = str_replace ($zam, $na, $zmist);
		
		$zam = '		<tr>

			 <td height="15" colspan="2"><img src="http://www.bohdan-books.com/img/spacer.gif" width="15" height="15" /></td>

		 </tr>
';
		$na = '';
		$zmist = str_replace ($zam, $na, $zmist);
		
		$zam = ' style="width:190mm" border="1" cellspacing="0" cellpadding="0"';
		$na = ' style="border-bottom:1px solid #666; margin-left:auto; margin-right:auto; width:700px;"';
		$zmist = str_replace ($zam, $na, $zmist);
		
		$zam = '
';
		$na = '';
		$zmist = str_replace ($zam, $na, $zmist);
		
		$zam = '<font size="1">';
		$na = '';
		$zmist = str_replace ($zam, $na, $zmist);
		
		$zam = 'F28E00';
		$na = '009900';
		$zmist = str_replace ($zam, $na, $zmist);
		
		$zam = '</div></font>';
		$na = '</div>';
		$zmist = str_replace ($zam, $na, $zmist);
		
		$zam = '	';
		$na = ' ';
		$zmist = str_replace ($zam, $na, $zmist);
		
		$zam = '    ';
		$na = ' ';
		$zmist = str_replace ($zam, $na, $zmist);
		
		$zam = '   ';
		$na = ' ';
		$zmist = str_replace ($zam, $na, $zmist);
		
		$zam = '  ';
		$na = ' ';
		$zmist = str_replace ($zam, $na, $zmist);
		
		$zam = '¬';
		$na = '';
		$zmist = str_replace ($zam, $na, $zmist);
		
		$zam = '…';
		$na = '...';
		$zmist = str_replace ($zam, $na, $zmist);

		$i = 0;
		do {		
		$zam = ' 
';
		$na = '
';
		$zmist = str_replace ($zam, $na, $zmist);
		
		$i++;
		}
		
		while ($i < 50);
		
		$zmist = trim($zmist);
		
		$zmist = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Видавництво - Навчальна книга Богдан</title>
</head>
<body style="background-color:#ffffff; font-family:Arial, Helvetica, sans-serif; color:#222; pedding:0px; margin:0px; text-align: center;">
<div style="width:100%; background-color:#ffffff; pedding:25px; margin:25px; text-align: center;">
<div style="font-size:24px; margin-left:auto; margin-right:auto; width:700px; text-align:center; margin-bottom:0px; padding-bottom:45px; border-bottom:1px solid #999; text-decoration:none;"><a href="http://www.bohdan-books.com/" style="text-decoration:none; color:#222;"><img src="http://3.firepic.org/3/images/2012-11/08/vz1703kms1i2.jpg" style="border:0px; margin-bottom:-30px; margin-right:50px;" />Видавництво "Навчальна книга – Богдан"</a></div>
<div style="font-size:24px; margin-left:auto; margin-right:auto; width:700px; text-align:center; margin-bottom:0px; padding-bottom:15px; border-bottom:1px solid #999; text-align:center; margin-top:20px;">
Готуються до друку книги,<br />
які можна попередньо замовити<br />
<strong style="font-size:30px; color:#070;">з додатковою знижкою 10%</strong>
</div>
<style>
table {border:0px; width:700px; margin-left:auto; margin-right:auto;}
td {border:0px; border-bottom:1px solid #999; font-size:14px; padding:5px;}
img {border:2px solid #ccc;}
</style>'.$zmist.'<br />
<table border="0" cellspacing="0" cellpadding="0" style="border-bottom:0px; margin-left:auto; margin-right:auto; width:700px;">
		<tr style="border-bottom:0px;">
			<td width="10" style="border-bottom:0px;" valign="top"><img src="http://www.bohdan-books.com/img/blue_vert.gif" width="5" height="60" style="border:0px;" /></td>
			<td style="border-bottom:0px; font-size:12px;" valign="top"><strong>Видавництво:</strong><br />
              46002, м. Тернопіль, просп. Степана Бандери, 34а<br />
              Тел./факс (0352) 52-06-07, 52-05-48, 52-19-66, 43-42-62<br />
              e-mail: <a href="mailto:office@bohdan-books.com">office@bohdan-books.com </a>l <a href="http://www.bohdan-books.com/contact/">Схема проїзду</a></td>
            <td width="10" style="border-bottom:0px;" valign="top"><img src="http://www.bohdan-books.com/img/green_vert.gif" width="5" height="60" style="border:0px;" /></td>
            <td style="border-bottom:0px; font-size:12px;" valign="top"><strong>Відділ збуту</strong>:<br />
              46008, м. Тернопіль, вул. Подільська, 44<br />
              Тел./факс. (0352) 43-42-92, 43-42-82<br />
              e-mail: <a href="mailto:zbut@bohdan-books.com">zbut@bohdan-books.com</a> l <a href="http://www.bohdan-books.com/contact/">Схема проїзду</a></td>
          </tr>
</table>
 </div>
 </div>
</body>
</html>';
		$zmist = str_replace ("
", " ", $zmist);
		$zmist = str_replace ("	", " ", $zmist);
		$i = 0;
		do {		
		$zmist = str_replace ("  ", " ", $zmist);
		$i++;
		}
		while ($i < 50);
		$zmist = str_replace ("> <", "><", $zmist);
		$zmist_n = strlen($zmist);
?>
<form action="index.php" method="post" style="text-align:center;  margin-left:auto; margin-right:auto;">
  Тут буде відформатований текст
  <textarea id="fe_text" onChange="clip.setText(this.value)"><?php echo "$zmist"; ?></textarea>
Довжина відформатованого коду <?php echo $zmist_n; ?> символ(ів)
</form>

<form action="view.php" method="post" target="_new" style="text-align:center;  margin-left:auto; margin-right:auto;">
  <input name="text" type="hidden" value='<?php echo "$zmist"; ?>'>
  <input type="submit" value="Переглянути" />
</form>
<div id="d_clip_container">
					<div id="d_clip_button" class="my_clip_button"><b>Копіювати в буфер обміну...</b></div>
				</div>
<?php } ?>