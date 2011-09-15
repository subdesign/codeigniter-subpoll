<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>  
<script type="text/javascript">
jQuery( function ( $ ) {
	$( '#btnAdd' ).click( function() {
		var num = $( '.clonedInput' ).length;		
		var newNum	= new Number( num + 1 );		
		var newElem = $( '#input' + num ).clone().attr( 'id', 'input' + newNum );
		newElem.children( ':first' ).attr( 'id', 'answer' + newNum ).attr( 'name', 'answer' + newNum ).val('');
		$( '#input' + num ).after( newElem );
		$( '#btnDel' ).attr( 'disabled', false );
		if ( newNum == 10 )
			$( '#btnAdd' ).attr( 'disabled', 'disabled' );
	});
	
	$( '#btnDel' ).click( function() {
		var num = $( '.clonedInput' ).length;		
		$( '#input' + num ).remove();				
		$( '#btnAdd' ).attr( 'disabled', false );	

		if ( num-1 == 1 )
			$( '#btnDel' ).attr( 'disabled', 'disabled' );
	});
			
	$( '#btnDel' ).attr( 'disabled', 'disabled' );
});
</script>
</head>

<body>
<?php
echo form_open('subpoll/add_new_poll');
echo form_fieldset('Poll Question');
echo form_input('poll');
echo form_fieldset_close();
echo '<br/>';
echo form_fieldset('Answers');
echo form_button(array('name' => 'btnAdd', 'type' => 'button', 'id' => 'btnAdd', 'content' => 'Add answer'));
echo form_button(array('name' => 'btnDel', 'type' => 'button', 'id' => 'btnDel', 'content' => 'Remove answer', 'disabled' => 'disabled'));
?>
<br/><br/>
<div id="input1" class="clonedInput" style="margin-bottom: 4px;">
<input id="name1" type="text" name="answer1" /></div>
<div>
<?php 
echo form_fieldset_close();
echo validation_errors();
echo form_submit('submit', 'Save');
echo form_close();
?>
</body>
</html>