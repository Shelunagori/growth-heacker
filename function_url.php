<?php
function check_url($str,$url,$type){
	if($type==1){
		return equal_to($str,$url);
	}
	if($type==2){
		$var=startsWith($str,$url);
		if(empty($var)){return 0;}else{ return 1;}
	}
	if($type==3){
		$var=endsWith($str,$url);
		if(empty($var)){return 0;}else{return 1;}
	}
	if($type==4){
		return contains($str,$url);
	}
	if($type==5){
		return not_equal_to($str,$url);
	}
	if($type==6){
		$var=not_startsWith($str,$url);
		if(empty($var)){return 1;}else{ return 0;}
	}
	if($type==7){
		$var=not_endsWith($str,$url);
		if(empty($var)){return 1;}else{return 0;}
	}
	if($type==8){
		return not_contains($str,$url);
	}
	
}
function equal_to($str,$url){
	if (strcasecmp($str, $url) == 0) {
		return 1;
	}else{
		return 0;
	}
}
function startsWith($needle, $haystack) {
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
}
function endsWith($needle, $haystack) {
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
}
function contains($str,$url){
	if (strpos($url,$str) !== false) {
		return 1;
	}else{
		return 0;
	}
}
function not_equal_to($str,$url){
	if (strcasecmp($str, $url) == 0) {
		return 0;
	}else{
		return 1;
	}
}
function not_startsWith($needle, $haystack) {
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
}
function not_endsWith($needle, $haystack) {
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
}
function not_contains($str,$url){
	if (strpos($url,$str) !== false) {
		return 0;
	}else{
		return 1;
	}
}
function remove_http($url) {
   $disallowed = array('http://', 'https://');
   foreach($disallowed as $d) {
      if(strpos($url, $d) === 0) {
         return str_replace($d, '', $url);
      }
   }
   return $url;
}
?>