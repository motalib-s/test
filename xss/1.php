<?php
//XSS challange 1
//script inside script
//https://www.facebook.com/groups/328952157561088/
$xss = $_GET['xss'];
if ($xss) {
	$replacer = preg_replace("<script>", "", $xss);
		echo $replacer;
	} else {
		echo "</br>Hi!</br></br>I want you to execute: ".htmlspecialchars("<script>alert(1)</script>");
		echo "</br></br>You can inject your payload in the GET parameter 'xss' (Example: http://localhost/<font color=red>1.php?xss=</font>Your_XSS_Payload)";
	}
?>
