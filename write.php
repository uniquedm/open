<?php
if(isset($_POST["message"]))
{
$txt = $_POST["message"]."\n";
$myfile = fopen("message.txt", "a+") or die("Unable to open file!");
fwrite($myfile, $txt);
fclose($myfile);
}
$fn = fopen("http://192.168.6.185/message.txt", "r") or die("Unable to open file!");
while(! feof($fn))  {
	$result = fgets($fn);
	echo $result."<br/>";
}
fclose($fn);
?>

<HTML>
	<TITLE>X8 Chat</TITLE>
	<BODY>
		<FORM ACTION="" METHOD="POST">
			<INPUT TYPE="TEXT" NAME="message">
			<INPUT TYPE="submit" value="Send">
		</FORM>
	</BODY>
</HTML>
