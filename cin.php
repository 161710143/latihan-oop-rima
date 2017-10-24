<?php

require_once 'orang.php';

$orang = new orang ('rima' , 'bandung' , 'x-rpl' , 'ada');

echo "nama =".$orang->get_nama()."<br>";
echo "tempat =".$orang->get_tempat()."<br>";
echo "kelas =".$orang->get_kelas()."<br>";
echo "status =".$orang->get_status()."<br>";

?>