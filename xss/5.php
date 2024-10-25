<?php
//XSS challange 1
//https://www.facebook.com/groups/328952157561088/
$xss = $_GET['xss'];
$finder = preg_match_all('#(src|var|eval|onmouseover|onload|onclick|onmouseout|>|<|onerror)#i', $xss);
if ($finder) {
	echo "XSS Detected!";} else 
	{
		echo "<html>Kewool, I see safe string! lets print it here. (Hint: I love EventHandlers)</br>";//.$xss."</html>";
		echo '<input type="text" name="text" value="'.$xss.'" width="600" height="600"></html>';
		echo "</br></br>You can inject your payload in the GET parameter 'xss' (Example: http://localhost/<font color=red>1.php?xss=</font>Your_XSS_Payload)";

	}
	//echo "I Like photos! Here is your photo."."</br></br>"."<img src='".$replacer."'>";
?>