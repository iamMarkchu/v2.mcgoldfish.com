<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title><?php echo $meta['title']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<?php foreach($css as $k => $v):?>
		<?php echo link_tag($v);?>
	<?php endforeach; ?>
</head>
<body>