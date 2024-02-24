<?php
$md5="PIN is not computed";
if(isset($_GET["md5_input"])){
  $md5=hash("md5", $_GET["md5_input"]);
}
?>
<!DOCTYPE html>
<head>
<title>MD5 PIN COMPUTER</title>
</head>
<body>
<pre>
<h1>MD 5 PIN MAKER</h1>
<p> MD5: <?=htmlentities($md5)?>;</p>
<form>
<input type="text" name="md5_input" size=4/>
<input type="submit" value="Compute md5 PIN"/>
</form>
</pre>
<ul>
<li><a href="md5_PIN.php">Reset</a></li>
<li><a href="md5cracker.php">MD 5 Password Cracker</a></li>
</ul>
</body>
</html>