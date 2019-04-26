<?php
$myfile = fopen("message.txt", "w") or die("Unable to open file!");
if(isset($_POST["message"]))
{
$txt = $_POST["message"]."\n";
fwrite($myfile, $txt);
}
fclose($myfile);

$myfile = fopen("http://192.168.6.185/message.txt", "r") or die("Unable to open file!");
echo fread($myfile, "15"); 
fclose($myfile);
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
