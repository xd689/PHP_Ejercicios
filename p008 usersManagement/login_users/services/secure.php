<?php
define('GTPKEY', 'L8=3XZmYTf&-wej6B;s}r$');
define('SESSIONKEY', 'dJH&$mD.<Sr5qjG6B~,2Ln');

function encrypt($string) {
    return base64_encode(openssl_encrypt($string,"AES-128-ECB",GTPKEY));
}

function decrypt($string) {
    $string = base64_decode($string);
    $decrypt = openssl_decrypt($string,"AES-128-ECB",GTPKEY);
	$data = explode('&', $decrypt);
	$data[0] = '../'.$data[0];
	$data[1] = substr($data[1],4);
	return $data;
}

function goToURL($url='index.php', $msg=false, $view=false) {
    $encrypted = encrypt("$url&msg=$msg");
	$dir = ($view)? '':'../';
    $getToPost = $dir."services/getToPost.php?p=$encrypted";
    header("Location: $getToPost");    
    exit;
}

function sessionClose() {
	session_start();
	$_SESSION = array();	
	session_destroy();	
}

function sessionCheck($view=false) {
    session_start();
    if(!isset($_SESSION[SESSIONKEY])) {
        sessionClose();
        gotoURL('index.php','Recurso restringido',$view);
    }
}

?>