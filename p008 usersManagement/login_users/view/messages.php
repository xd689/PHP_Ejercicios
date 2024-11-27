<?php
function getMessage() {
    if(isset($_POST['msg'])) echo $_POST['msg'];    
}
?>