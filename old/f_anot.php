<?php if (isset($_POST["zmist"]) and $_POST["zmist"] == "Вставте сюди анотацію") {$_POST["zmist"] = "";} ?>
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
			<h1 class="title">Форматування анотації</h1>
			<p class="byline"><small>Даний блок знімає непотрібні символи, переноси стрічок.</small></p>
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
<form action="f_anot.php" method="post" style="text-align:center;  margin-left:auto; margin-right:auto;">
<p style="text-align:left;"><input type="checkbox" name="br" value="1" /> Не знімати переноси стрічок</p>
<textarea name="zmist" onBlur="if(this.value==''){this.value='Вставте сюди анотацію';}" onFocus="if(this.value=='Вставте сюди анотацію'){this.value='';}"><?php if ($zmist == "") {echo "Вставте сюди анотацію";} else {echo $zmist;} ?></textarea><br />
Довжина анотації <?php $zmist_n = strlen($zmist); echo $zmist_n; ?> символ(ів)<br />
<input name="reset" type="reset" value="<?php if ($zmist == "") {echo "Очистити";} else {echo "Відмінити зміни";} ?>" />
<input name="submit" type="submit" value="Відформатувати" onClick="this.value='Форматуємо';"  />
</form>
<?php include("blocks/anot.php"); ?>
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