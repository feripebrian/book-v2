<?php

/**
 * Global function for application
 *
 */

function access_menu($path,$title,$access=array(),$template='<a href="{URL}">{TITLE}</a>',$onMethod = FALSE)
{
	$ci					= get_instance();
	$default_controller = isset($ci->router->routes['default_controller']) ? $ci->router->routes['default_controller'] : 'welcome';
	$current_controller	= $ci->uri->segment(2,$default_controller);
	$current_method		= $ci->uri->segment(3,'index');
	$p					= explode('/',$path);
	$controller			= $p[0];
	$method				= isset($p[1]) ? $p[1] : 'index';
	$class_on			= '';

	if(strtoupper($current_controller)==strtoupper($p[0])) $class_on = 'on';
	if($onMethod){
		$class_on = '';
		if(strtoupper($current_controller)==strtoupper($p[0]) AND strtoupper($current_method)==strtoupper($p[1])) $class_on = 'on';
	}

	$replacer = array(
		'{URL}'			=> site_url($ci->config->item('admin_path').'/admin/'.$path),
		'{TITLE}'		=> stripslashes(strip_tags($title)),
		'{CLASS_ON}'	=> $class_on
	);

	if(isset($access[$controller.'/'.$method])){
		return str_replace(array_keys($replacer),array_values($replacer),$template);
	}
}

function rupiah($s){
	return number_format($s,0,',','.');
}

function time_to_unixts($time){
	$p = explode(':',$time);
	$h = isset($p[0]) ? (int) $p[0] : 0;
	$m = isset($p[1]) ? (int) $p[1] : 0;
	$s = isset($p[2]) ? (int) $p[2] : 0;
	return ($h*3600)+($m*60)+$s;
}

function id_date($date){
	$str = strtotime($date);
	$m = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
	return date('d', $str).' '.$m[intval(date('m', $str))].' '.date('Y', $str);
}

function cdate($date,$format='d M Y'){
	$str = strtotime($date);
	return date($format,$str);
}

function toMonth($month){
	$month = intval($month);
	$m = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
	return $m[$month];
}

function search_filter($str){
	return trim(rtrim(ltrim(urlencode($str))));
}

function in($text){
	$replaced = array("\n","\t","\r");
	if($text=='') return '';
	$text = preg_replace('/[^(\x20-\x7F)]*/','', $text); /* remove non-ascii */
	return htmlentities(str_replace(array_values($replaced),'',$text));
}

function out($text){
	if($text=='') return '';
	return stripslashes(html_entity_decode($text));
}

function ext($str){
	$t = explode('.',$str);
	$c = count($t)-1;
	return $t[$c];
}

function time_span($t1,$t2){
	$t1 = (int) strtotime($t1);
	$t2 = (int) strtotime($t2);
	$t = $t2-$t1;
	if($t<0) $t=0;
	$res = secondsToTime($t);
	$ret = '';
	if( ! empty($res['h']) OR ! empty($res['m']) ){
		$ret = str_pad($res['h'], 2, "0", STR_PAD_LEFT).':'.str_pad($res['m'], 2, "0", STR_PAD_LEFT);
	}

	return $ret;
}

function secondsToTime($seconds)
{
    // extract hours
    $hours = floor($seconds / (60 * 60));
	
    // extract minutes
    $divisor_for_minutes = $seconds % (60 * 60);
    $minutes = floor($divisor_for_minutes / 60);

    // extract the remaining seconds
    $divisor_for_seconds = $divisor_for_minutes % 60;
    $seconds = ceil($divisor_for_seconds);

    // return the final array
    $obj = array(
        "h" => (int) $hours,
        "m" => (int) $minutes,
        "s" => (int) $seconds,
    );

    return $obj;
}

function get_query_string()
{
	$qs = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '';
	return $qs;
}

function kekata($x) {
	$x = abs($x);
	$angka = array("", "satu", "dua", "tiga", "empat", "lima",
	"enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
	$temp = "";
	if ($x <12) {
		$temp = " ". $angka[$x];
	} else if ($x <20) {
		$temp = kekata($x - 10). " belas";
	} else if ($x <100) {
		$temp = kekata($x/10)." puluh". kekata($x % 10);
	} else if ($x <200) {
		$temp = " seratus" . kekata($x - 100);
	} else if ($x <1000) {
		$temp = kekata($x/100) . " ratus" . kekata($x % 100);
	} else if ($x <2000) {
		$temp = " seribu" . kekata($x - 1000);
	} else if ($x <1000000) {
		$temp = kekata($x/1000) . " ribu" . kekata($x % 1000);
	} else if ($x <1000000000) {
		$temp = kekata($x/1000000) . " juta" . kekata($x % 1000000);
	} else if ($x <1000000000000) {
		$temp = kekata($x/1000000000) . " milyar" . kekata(fmod($x,1000000000));
	} else if ($x <1000000000000000) {
		$temp = kekata($x/1000000000000) . " trilyun" . kekata(fmod($x,1000000000000));
	}
		return $temp;
}

function terbilang($x, $style=4) {
	if($x<0) {
		$hasil = "minus ". trim(kekata($x));
	} else {
		$hasil = trim(kekata($x));
	}
	switch ($style) {
		case 1:
			$hasil = strtoupper($hasil);
			break;
		case 2:
			$hasil = strtolower($hasil);
			break;
		case 3:
			$hasil = ucwords($hasil);
			break;
		default:
			$hasil = ucfirst($hasil);
			break;
	}
	return $hasil;
}

function valid_url($str){
	if( $str == '' ) return FALSE;
	if( preg_match('/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i', $str) ){
		return TRUE;
	}
	return FALSE;
}