<?php 
function do_hash($str,$algo = 'sha256'){
	return hash($algo, $str);
}
