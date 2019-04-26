<?php
if(isset($_POST["message"]))
{
$myfile = fopen("message.txt", "r");
$x = fread($myfile, "100000");
$txt = $x."\n".$_POST["message"]."\n";
fclose($myfile);
$myfile = fopen("message.txt", "w") or die("Unable to open file!");
fwrite($myfile, $txt);
}
fclose($myfile);

$myfile = fopen("http://192.168.6.185/message.txt", "r") or die("Unable to open file!");
echo fread($myfile, "100000"); 
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
