<?php
echo '<pre>';
$db = mysql_connect('127.0.0.1', 'calliste_magento', '6knVqQMrJHH8');
mysql_select_db('calliste_magento', $db);
$sql = mysql_query("SELECT * FROM catalog_category_entity_varchar where attribute_id = 41 AND store_id = 0 GROUP BY value");
while ($row = mysql_fetch_array($sql, MYSQL_NUM)) {
  $row[3] = 1;
  $row[5] = "'" . mysql_real_escape_string($row[5]) . "'";
  print_r($row);

  mysql_query("INSERT INTO catalog_category_entity_varchar
          VALUES (null, ".$row[1].",".$row[2].",".$row[3].",".$row[4].",".$row[5].")
          ON DUPLICATE KEY UPDATE value = " . $row[5]) or die(mysql_error());
}

 