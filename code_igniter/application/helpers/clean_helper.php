<?php

function cleanElement($str,$CI){
	return $CI->db->escape_str(strip_tags(trim($str)));
}

function cleanArray($array,$CI){
	foreach ($array as $key => $value) {
		$array[$key] = cleanElement($value, $CI);
	}
	return $array;
}

function myClean($var,$CI){
	if(is_array($var)){
		return cleanArray($var, $CI);
	}else{
		return cleanElement($var, $CI);
	}
}
