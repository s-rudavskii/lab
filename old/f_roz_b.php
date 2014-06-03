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
			<h1 class="title">Створення розсилки in print</h1>
			<p class="byline"><small>Даний блок створює розсилку з введеного коду.</small></p>
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
<form action="f_roz_b.php" method="post" style="text-align:center;  margin-left:auto; margin-right:auto;">
<textarea name="zmist" onBlur="if(this.value==''){this.value='Вставте сюди текст розсилки';}" onFocus="if(this.value=='Вставте сюди текст розсилки'){this.value='';}"><?php if ($zmist == "") {echo "Вставте сюди текст розсилки";} else {echo $zmist;} ?></textarea><br />
Довжина коду <?php $zmist_n = strlen($zmist); echo $zmist_n; ?> символ(ів)<br />
<input name="reset" type="reset" value="<?php if ($zmist == "") {echo "Очистити";} else {echo "Відмінити зміни";} ?>" />
<input name="submit" type="submit" value="Створити" onClick="this.value='Створюємо';"  />
</form>
<?php include("blocks/roz_b.php"); ?>
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