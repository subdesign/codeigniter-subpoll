<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
#polls {
	border:1px solid #000;
	border-collapse: collapse;	
}

#polls tr td {
	border:1px solid #666;	
}
</style>
</head>
<body>
<?php echo anchor('subpoll/add_new_poll', 'Add new poll'); ?><br/><br/>
<?php echo $polls; ?>
</body>
</html>