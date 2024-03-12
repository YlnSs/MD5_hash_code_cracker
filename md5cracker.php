<html>
<head>
<title>MD5 HASH-CODE Cracker</title>
</head>
<body>
<h1>MD5 hash-code cracker</h1>
<p>This application takes an MD5 hash
of a four-character lower case string and 
attempts to hash all two-character combinations
to determine the original two characters</p>
<pre>
Debug output:
<?php
$output="Not found";
if(isset($_GET["md5"])){
    $time_pre=microtime(true);
    $md5_h=$_GET["md5"];
    $alphabet="abcdefghijklmnopqrstuvwxyz1234567890";
    $show=15;
    for($i=0; $i<strlen($alphabet); $i++){
        $char1=$alphabet[$i];
        for($j=0; $j<strlen($alphabet); $j++){
            $char2=$alphabet[$j];
            for($k=0; $k<strlen($alphabet); $k++){
                $char3=$alphabet[$k];
                for($l=0; $l<strlen($alphabet);$l++){
                    $char4=$alphabet[$l];
                    $try=$char1.$char2.$char3.$char4;
                    $check=hash("md5",$try);

                    if($check==$md5_h){
                        $output=$try;
                        break;
                    }
                    if($show>0){
                        echo "FIRST 15 DEBUG TRIES ARE: \n";
                        echo "$try and it's hash $check";
                        $show=$show-1;
                    }
                }
            }
        }
    }
    $time_post=microtime(true);
    echo "Elapsed-time=\n";
    echo $time_post-$time_pre;
    echo "\n";

}

?>
</pre>
<p>Debug Output: <?=htmlentities($output);?></p>
<form>
<input type="text" name="md5" size=32/><!--That is the input area that we are going to take md5 hash code from -->
<input type="submit" value="crack-MD5"/><!--Submit button and its textvalue -->
</form>
<ul>
<li><a href="md5cracker.php">Reset</a></li>
<li><a href="md5_PIN.php">MD5 PIN Maker</a></li>
<li><a href="" target="_blank">Source codes of this application</a></li>
</ul>
</body>
</html>
