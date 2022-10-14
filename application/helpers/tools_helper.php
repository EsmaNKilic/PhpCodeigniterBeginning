<?php

//2016-11-15 => 15 Kasım 2016
function get_full_date($date){

$tmp_date = explode("-",$date);
$newDate = $tmp_date[2]." ".$tmp_date[1]." ".$tmp_date[0];

echo $newDate; 
}