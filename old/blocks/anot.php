<?php 

if (isset($_POST['zmist']))
	{
		$zmist = $_POST["zmist"];
		$zmist = strip_tags($zmist);
		$zmist = trim($zmist);
		$zmist = $zmist."
";
		
				$zam = '\r';
		$na = '
';
		$zmist = str_replace ($zam, $na, $zmist);

		$zam = '\n';
		$na = '
';
		$zmist = str_replace ($zam, $na, $zmist);
		
		$zam = "\r";
		$na = '
';
		$zmist = str_replace ($zam, $na, $zmist);

		$zam = "\n";
		$na = '
';
		
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
		
		$zam = '-
';
		$na = '';
		$zmist = str_replace ($zam, $na, $zmist);
		
		if(!isset($_POST['br']) or $_POST['br'] != 1) {
		
		$zam = '
';
		$na = ' ';
		$zmist = str_replace ($zam, $na, $zmist);
		}
		else {
		$zam = '-';
		$na = '';
		$zmist = str_replace ($zam, $na, $zmist);
		}
		
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
		$zmist_n = strlen($zmist);
		$zmist = htmlspecialchars($zmist);
?>
<form action="index.php" method="post" style="text-align:center;  margin-left:auto; margin-right:auto;">
Тут буде відформатований текст
<textarea id="fe_text" onChange="clip.setText(this.value)"><?php echo "$zmist"; ?></textarea>
Довжина відформатованої анотації <?php echo $zmist_n; ?> символ(ів)
</form><br />
<br />
<div id="d_clip_container">
					<div id="d_clip_button" class="my_clip_button"><b>Копіювати в буфер обміну...</b></div>
				</div>
<?php } ?>