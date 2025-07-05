<?php
$file_name='date.txt';
$mode='w';
$file_handle=fopen($file_name,$mode);

    $year='2025';   $month='09';   $day='21';
    fprintf($file_handle,$year,$month,$day);
    fclose($file_handle);

?>