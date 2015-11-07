<?php
/**
 * Maps a string looking for JSON patterns
 * @param string $str Input string
 * @return array key => values and value => keys
 */

function mapstring($str) {
	$alp = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$all = $alp . '0123456789';
	$prv = '';
	$key = '';
	$qut = '';
	$cap = false;
	$mke = 0;
	
	for ($i = 0, $len = strlen($str); $i < $len; $i++) {
		$chr = $str[$i];
		
		// make
		if ($mke) {
			if ($key != '') {
				echo "$key => $val\n";
			}
			// reset
			$key = '';
			$cap = false;
			$qut = '';
			$i -= $mke;
			$mke = 0;
		}
		// capturing
		else if ($cap) {
			if (stripos($all, $chr) !== false) {
				$prv .= $chr;
			}
			else {
				$mke = 2;
			}
		}
		// quoted text
		else if ($qut != '') {
			if ($chr == $qut) {
				$mke = 1;
			}
			else {
				$prv .= $chr;
			}
		}
		// quotes found
		else if ($chr == '"' || $chr == "'") {
			$qut = $chr;
		}
		// separator
		else if ($chr == ':') {
			$key = $prv;
			$prv = '';
			$cap = false;
		}
		// capture sequence
		else if (stripos($alp, $chr) !== false) {
			$cap = true;
			$prv = $chr;
		}
	}
}