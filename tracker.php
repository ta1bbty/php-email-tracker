<?php

//THIS RETURNS THE IMAGE
header('Content-Type: image/png');
readfile('favicon.png');


//THIS IS THE SCRIPT FOR THE ACTUAL TRACKING
$opened_at = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
$email = $_GET['recipient'];
$timestamp_sent_at = date('Y-m-d H:i:s',intval($_GET['sent_at']));
$college = $_GET['college'];
$location = $_GET['location'];
$txt = $email.",".$opened_at.",".$timestamp_sent_at.",".$college.",".$location.",".$_SERVER['REMOTE_ADDR'];
$myfile = file_put_contents('log_random_characters_here_121.txt', $txt.PHP_EOL , FILE_APPEND); # keep the log file name random so that no one can download it or keep it in some other directory
exit;

// The tracking url is like this
// https://your-website/tracker.php?image=favicon.png&location=delhi-ncr&college=college_name_here&recipient=recipient_email@gmail.com&sent_at=1547718830

?>
