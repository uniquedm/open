<HTML>
<TITLE>X8 Chat</TITLE>
<BODY>
	<FORM action="<?php $_PHP_SELF?>" method="post">
		<input type="text" name="x" >
 		<input type="submit" value="Send">
	</FORM>
</BODY>
<?php
	if(isset($_POST["x"]))
	{
		echo "Sent:".$_POST["x"]."<br/>";
		$myfile = fopen("message.txt", "w") or die("Unable to open file!");
		fwrite($myfile, $_POST["x"]);
	}
	$myfile = fopen("http://192.168.7.112/message.txt", "r") or die("Unable to open file!");
	echo "Message: ".fread($myfile,filesize("message.txt"));
	fclose($myfile);
?>
