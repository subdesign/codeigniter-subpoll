<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php echo ($this->session->flashdata('message')) ? $this->session->flashdata('message') : '';?>
<br/>
<?php echo $poll['question'];
      echo $poll['poll_form'];
?>
<br/>
<?php echo anchor('subpoll/poll_result', 'View the results &raquo;');?>
</body>
</html>