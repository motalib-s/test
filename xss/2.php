<?php
//XSS challange 2
//https://www.facebook.com/groups/328952157561088/
$illegal = "#$%^&*+-[];,/{}|:<>?~";
$xss = $_GET['xss'];
$x = strpbrk($xss, $illegal);
if($x){
	echo "XSS Detected!";
	} else {
		echo "I Like photos! Here is your photo."."</br></br>"."<img src='".$xss."'>";
		echo "</br></br>You can inject your payload in the GET parameter 'xss' (Example: http://localhost/<font color=red>1.php?xss=</font>Your_XSS_Payload)";

	}
?>
