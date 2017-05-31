<?php
class calc {
 
	static function sum($arg1, $arg2) {
		if(!is_int($arg1) || !is_int($arg2)){
			return "erreur";
		}
		$res = $arg1 + $arg2;
		return $res;
	}
 
	static function minus($arg1, $arg2) {
		if(!is_int($arg1) || !is_int($arg2)){
			return "erreur";
		}
		$res = $arg1 - $arg2;
		return $res;
	}
 
	static function multi($arg1, $arg2) {
		if(!is_int($arg1) || !is_int($arg2)){
			return "erreur";
		}
		$res = $arg1 * $arg2;
		return $res;
	}
 
	static function divid($arg1, $arg2) {
		if(!is_int($arg1) || !is_int($arg2)){
			return "erreur";
		}
		if ($arg2 == 0) return 'erreur';
		$res = $arg1 / $arg2;
		return $res;
	}
 
}
?>