<?php

$zmistArray = explode('
', $_POST['xml']);

$xml = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>".'
<data>
<setup source="" next="" checkCount="0" autoLoadTime="1" taskTime="0">
<book toolHide="0" fullScreen="false" hideTitle="false" hideObjects="false" margin="10" zoomMin="0.5" zoomMax="2" zoomStep="0.1">
<content title="'.$_POST['title'].'">
      <item text="" color="FFFFFF" lMargin="220" size="40"/>
      <item page="1" text="Обкладинка" color="000066" lMargin="0" size="35" />
      <item page="4" text="Зміст" color="000066" lMargin="0" size="35" />';
$n = 0;
$start =  $_POST['start'];
$pag =    $_POST['pag'];
while(isset($zmistArray[$n]) && $zmistArray[$n] != '')
{
  if($start!=0)
    $page = $start;
  else
    $page = '';
  $xml = $xml.'
      <item page="'.$page.'" text="'.$zmistArray[$n].'" color="000066" lMargin="0" size="35" />';
  $start += $pag;
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