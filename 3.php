<?php
//XSS challange 1
//<script src=>
//https://www.facebook.com/groups/328952157561088/
$xss = $_GET['xss'];
$finder = preg_match_all('#(http|https|data|confirm|alert|prompt)#i', $xss);
if ($finder) {
	echo "XSS Detected!";} else 
	{
		echo "<html>Kewool, I see safe string! ".$xss."</html>";
		echo "</br></br>You can inject your payload in the GET parameter 'xss' (Example: http://localhost/<font color=red>1.php?xss=</font>Your_XSS_Payload)";

	}
?>