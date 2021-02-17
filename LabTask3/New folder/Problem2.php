<?php
$color = array('white', 'green', 'red') ;
for($i=0;$i<3;$i++){echo $color[$i].",";}
?>
<html>
<head>
</head>
<body>


<ul>
  <li><?php echo$color[1]?></li>
  <li><?php echo$color[2]?></li>
  <li><?php echo$color[0]?></li>
</ul>
</body></html>
