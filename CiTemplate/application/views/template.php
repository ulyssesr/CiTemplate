<!DOCTYPE>
<html>
<head>
<title>Applications - <?=$title;?></title>
<link rel="stylesheet" href="/php/style.css"/>
</head>
<body>
<div id="page">
 <div id="header" onclick="location.href='#';" style="cursor:pointer;">
  <h1><a href=""></a></h1>
 </div>
 <div id="contents" class="narrowcolumn">
  <div class="navigation">
   <h3>
    <?php foreach($nav_list  as $i => $nav_item): ?>
     <?= anchor($nav_item, $nav_item) ?> | 
    <?php endforeach ?>
   </h3>
  </div>
  <?=$contents;?>
  </div>
  <div style="clear:both;"></div>
  <div id="footer">
  </div>
</div>
</body>
</html>