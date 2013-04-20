<?php

function cleanElement($str,$CI){
	return $CI->db->escape_str(strip_tags($str));
}
