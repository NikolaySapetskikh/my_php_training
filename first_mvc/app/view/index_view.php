<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>-=Список супер горячих новостей=-</title>
 </head>
 <body>
  <h1>Самые горячие новости....</h1>
  <ul>
  	<?php
  	foreach ($incoming_data as $key => $value) {?>
  		<li><a href="?page=article&article_id=<?=$key;?>"><?=$value; ?></li>
  	<?php } ?>
  	
  </ul>
 </body>
</html>