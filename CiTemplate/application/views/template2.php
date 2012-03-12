<!DOCTYPE>
<html>
<head>
<title>Applications - <?=$title;?></title>
<link rel="stylesheet" href="/php/style.css"/>
<script type="text/javascript" src="/php/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="/php/tiny_mce/my_tiny.js"></script>
</head>
<body>
<div id="page">
<div id="strip"></div>
<div id="header" onclick="location.href='#';" style="cursor:pointer;">
 <h1><a href=""></a></h1>
</div>
<div id="googleheader">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-3054947306505000";
/* 728x90, created 10/8/08 */
google_ad_slot = "6291140491";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
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
