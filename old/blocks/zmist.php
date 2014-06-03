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
		
		$zam = '';
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
		
		$i = 0;
		$e = 0;
		do {
		if ($e == 10) {$e = 0;}
		
		$zam = '

';
		$na = '
';
		$zmist = str_replace ($zam, $na, $zmist);
		
		$zam = '-
';
		$na = '';

		$zmist = str_replace ($zam, $na, $zmist);		
		
		$zam = "$e
";
		$na = '
';
		
		$zmist = str_replace ($zam, $na, $zmist);
		
		$i++;
		$e++;
		}
		while ($i < 100);
		
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
		
		$i = 0;
		do {		
		$zam = '.
';
		$na = '
';
		$zmist = str_replace ($zam, $na, $zmist);
		
		$zam = ' 
';
		$na = '
';
		$zmist = str_replace ($zam, $na, $zmist);
		
		$i++;
		}
		
		while ($i < 10000);
		
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

    $zmistArray = explode('
', $zmist);

    $xml = '<?xml version="1.0" encoding="utf-8" ?>
<data>
<setup source="" next="" checkCount="0" autoLoadTime="1" taskTime="0">
<book toolHide="0" fullScreen="false" hideTitle="false" hideObjects="false" margin="10" zoomMin="0.5" zoomMax="2" zoomStep="0.1">
<content title="" >
      <item text="" color="FFFFFF" lMargin="220" size="40"/>
      <item page="1" text="Обкладинка" color="000066" lMargin="0" size="35" />
      <item page="4" text="Зміст" color="000066" lMargin="0" size="35" />';
    $n = 0;
    while(isset($zmistArray[$n]))
    {
      $xml = $xml.'
      <item page="" text="'.$zmistArray[$n].'" color="000066" lMargin="0" size="35" />';
      $n++;
    }
    $xml = $xml.'
</content>
</book>
</setup>
</data>';
	unlink('LittleFox.xml');
    $file = fopen('LittleFox.xml', 'w');
    fwrite($file, $xml);
    fclose($file);


?>
    <div id="d_clip_container" style="text-align: center;">
      <a style="text-decoration: none;" href="LittleFox.xml" download="LittleFox.xml">
      <div class="my_clip_button" style="cursor: pointer; margin: 15px 0; display: block; float: right;">Завантажити .XML</div></a>
      <div id="d_clip_button" style="margin: 15px 0; display: block; float: left;" class="my_clip_button"><b>Копіювати в буфер обміну...</b></div>
    </div>
<p style="text-align:center;  margin-left:auto; margin-right:auto;">
<textarea id="fe_text" onChange="clip.setText(this.value)"><?php echo "$zmist"; ?></textarea>
Довжина відформатованого змісту <?php echo $zmist_n; ?> символ(ів)
</p>
<?php } ?>