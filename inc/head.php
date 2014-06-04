<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Персональна лабораторія Слави Рудавського</title>
  <link rel="stylesheet" type="text/css" href="./css/normalize.css" media="screen" />
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css" media="screen" />
  <script src="./js/jquery.js" type="text/javascript"></script>
  <script src="./js/bootstrap.min.js" type="text/javascript"></script>
  <script src="./js/script.js" type="text/javascript"></script>
</head>
<body>
<div class="body-box">
  <div class="left-menu">
    <h1><a href="./">Personal<span>Lab</span></a></h1>
    <div class="nav">
      <a href="./" class="item">Домашня</a>
      <a href="./zmist" class="item">Зміст</a>
      <a href="./anot" class="item">Анотація</a>
    </div>
  </div
  ><div class="right-content">
    <?php
    if(isset($_GET[0]))
    switch($_GET[0]){
      case 'zmist':
        include('./inc/zmist.php');
        break;
      default:
        include('./inc/404.php');
        break;
    }
    else {
    ?>
    <?php
    }
    ?>
  </div>
</div>