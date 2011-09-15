<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $poll['embed']; ?>
</head>
<body>
<div id="chart" style="width:300px; height:220px;"></div>
<?php echo $poll['js']; ?>
<br/>
<?php echo anchor('subpoll/poll_item', '&laquo; Back to Polls');?>
</body>
</html>