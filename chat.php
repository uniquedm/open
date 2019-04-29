<?php
if(isset($_POST['submit']))
{
if(isset($_POST["message"]))
{
$txt = "\n".$_POST["message"]."\n";
$myfile = fopen("message.txt", "a+") or die("Unable to open file!");
fwrite($myfile, $txt);
fclose($myfile);
}
$fn = fopen("http://192.168.6.185/MyChatSystem/message.txt", "r") or die("Unable to open file!");
while(! feof($fn))  {
	$result = fgets($fn);
	echo $result."<br/>";
}
fclose($fn);
}

if(isset($_POST['update']))
{
$fn = fopen("http://192.168.6.185/MyChatSystem/message.txt", "r") or die("Unable to open file!");
while(! feof($fn))  {
	$result = fgets($fn);
	echo $result."<br/>";
}
fclose($fn);
}
?>

<HTML>
	<TITLE>X8 Chat</TITLE>
	<BODY>
		<FORM ACTION="" METHOD="POST" name="sumbit">
			<INPUT TYPE="TEXT" NAME="message">
			<INPUT TYPE="submit" value="Send" name="submit">
			<INPUT TYPE="submit" value="Update" name="update">
		</FORM>
	</BODY>
</HTML>
