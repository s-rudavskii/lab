<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Форматування (с) Слава Рудавський</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<script type="text/javascript" src="ZeroClipboard.js"></script>
	<script language="JavaScript">
		var clip = null;
		
		function $(id) { return document.getElementById(id); }
		
		function init() {
			clip = new ZeroClipboard.Client();
			clip.setHandCursor( true );
			
			clip.addEventListener('load', function (client) {
				debugstr("Флеш модуль встановлений.");
			});
			
			clip.addEventListener('mouseOver', function (client) {
				// update the text on mouse over
				clip.setText( $('fe_text').value );
			});
			
			clip.addEventListener('complete', function (client, text) {
				debugstr("Текст скопійовано в буфер обміну." );
			});
			
			clip.glue( 'd_clip_button', 'd_clip_container' );
		}
		
		function debugstr(msg) {
			var p = document.createElement('p');
			p.innerHTML = msg;
			$('d_debug').appendChild(p);
		}
	</script>
</head>
<body onLoad="init()">