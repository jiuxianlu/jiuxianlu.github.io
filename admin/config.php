<?php
session_start();
error_reporting(0);
include('../inc/cdkj.config.php'); 
define('SYSPATH',$cdkj['path']);
$rep='foot';
if($_SESSION['admin_cdkj']!==base64_decode('Y2NmYTdjMGNjN2IxYTRlOA===')){
	header("location: ./login.php");
	exit;
}
$nav='';
function md5ff($str=1){
	return md5($str.'ff371');
}
?>