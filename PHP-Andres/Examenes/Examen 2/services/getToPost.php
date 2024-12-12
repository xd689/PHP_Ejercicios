<?php
$url = '../'.$_GET['url'];
$msg = $_GET['msg'];
?>
<form action="<?php echo $url;?>" method="post" id="getToPostForm">
	<input type="hidden" name="msg" value="<?php echo $msg;?>">
</form>
<script type="text/javascript">
	document.getElementById('getToPostForm').submit();	
</script>