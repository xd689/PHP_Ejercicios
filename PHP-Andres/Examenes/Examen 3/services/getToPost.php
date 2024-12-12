<?php
	require_once('secure.php');
	$data = decrypt($_GET['p']);
?>

<form action="<?php echo $data[0];?>" method="post" id="getToPostForm">
	<input type="hidden" name="msg" value="<?php echo $data[1];?>">
</form>
<script type="text/javascript">
	document.getElementById('getToPostForm').submit();	
</script>