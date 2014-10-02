<?php if (isset($_POST["zmist"]) and $_POST["zmist"] == "Вставте сюди зміст") {$_POST["zmist"] = "";} ?>
<?php include ("blocks/head.php"); ?>
<?php include ("blocks/logo.php"); ?>
	<!-- end #logo -->
<?php include ("blocks/menu.php"); ?>
	<!-- end #menu --> 
</div>
	<!-- end #header -->
<div id="page">
	<div id="content">
    <!-- Початок Тіла сайту -->    
		<div class="post">
			<h1 class="title">Форматування змісту</h1>
			<p class="byline"><small>Даний блок знімає з змісту крапки і номери сторінок.</small></p>
			<div class="entry">
				<p>
                <?php 
if (isset($_POST['zmist']))
	{
		$zmist = $_POST["zmist"];
		$zmist = htmlspecialchars($zmist);
		}
else {$zmist = "";}
?>
<form action="f_zmist.php" method="post" style="text-align:center;  margin-left:auto; margin-right:auto;">
<p style="text-align:left; margin-top:0px; margin-bottom:0px;"><input type="radio" name="for" value="0" /> Не заміняти<br />
<input checked="checked" type="radio" name="for" value="1" /> Зняти ентери перед малими буквами<br />
<input type="radio" name="for" value="2" /> Замінити малі букви на великі
<br /></p>
<textarea name="zmist" onBlur="if(this.value==''){this.value='Вставте сюди зміст';}" onFocus="if(this.value=='Вставте сюди зміст'){this.value='';}"><?php if ($zmist == "") {echo "Вставте сюди зміст";} else {echo $zmist;} ?></textarea><br />
Довжина змісту <?php $zmist_n = strlen($zmist); echo $zmist_n; ?> символ(ів)<br />
<input name="reset" type="reset" value="<?php if ($zmist == "") {echo "Очистити";} else {echo "Відмінити зміни";} ?>" />
<input name="submit" type="submit" value="Відформатувати" onClick="this.value='Форматуємо';"  />
</form>
<?php include("blocks/zmist.php"); ?>
                </p>
			</div>
		</div>
        
	</div>
	<!-- end #content -->
<?php include ("blocks/sidebar.php"); ?>
	<!-- end #sidebar -->
</div>
<!-- end #page -->
<?php include ("blocks/footer.php"); ?>