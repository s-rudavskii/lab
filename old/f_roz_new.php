<?php
function _substr($text, $length)
{
    $length = strripos(substr($text, 0, $length), ' ');
    return substr($text, 0, $length);
}
$resp = file_get_contents('http://www.bohdan-books.com/catalog/pcat_0_1/');
$row = mb_convert_encoding($resp, "utf-8", "windows-1251");
$str=strpos($row, '<table');
$row=substr($row, $str);
$str=strpos($row, '<script type="text/javascript">');
$row=substr($row, 0, $str);
$rows = str_replace ("</table>", "</table> |", $row);
$books = explode("|", $rows);
$_POST["zmist"] = $row;
if(isset($_POST["submit"])) {
    $text = "";
    $i = 0;
    while($i < 20) {
        if($_POST["list-".$i]) {
            $text = $text.$books[$i];
        }
        $i++;
    }
}
?>
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
			<h1 class="title">Автоматизована розсилка <b style="color: red;">BETA</b></h1>
			<p class="byline"><small>Даний блок створює розсилку на основі даних з сайту.</small></p>
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
<form action="f_roz_new.php" method="post" style="text-align:center;  margin-left:auto; margin-right:auto;">
<div style="text-align: left; margin: 15px 0;">
<?php
$i = 0;
while ($i < 20) {
    $book = $books[$i];
    $str=strpos($book, '<b>');
    $book=substr($book, $str);
    $str=strpos($book, '</a>');
    $book=substr($book, 0, $str);
    $book = strip_tags($book);
    if(isset($_POST["submit"])) {
        ($_POST["list-".$i]) ? $c = "checked" : $c = "";
    }
    else {
        ($i < 10) ? $c = "checked" : $c = "";
    }
    echo '<label style="margin:7px 0; display:block;"><input type="checkbox" name="list-'.$i.'" '.$c.' value="1">'.$book.'</label>';
    $i++;
}
?></div>
<input name="submit" type="submit" value="Створити" onClick="this.value='Створюємо';"  />
</form>
<?php if(isset($_POST["submit"])) {
    $_POST["zmist"] = $text;
    include("blocks/roz.php");
} ?>
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