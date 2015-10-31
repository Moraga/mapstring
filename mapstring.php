<?php
/**
 * Maps a string looking for JSON patterns
 * @param string $str Input string
 * @return array key => values and value => keys
 */

function mapstring($str) {
	$kys = [];
	$vls = [];
	$alp = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$all = $alp . '0123456789';
	$prv = '';
	$key = '';
	$qut = '';
	$cap = false;
	$dep = 0;
	$mke = 0;
	
	for ($i = 0, $len = strlen($str); $i < $len; $i++) {
		$chr = $str[$i];
		
		// make
		if ($mke) {
			if ($key) {
				// key => values
				if (!isset($kys[$key]))
					$kys[$key] = [];
				$kys[$key][] = $prv;
				// value => keys
				if (!isset($vls[$prv]))
					$vls[$prv] = [];
				$vls[$prv][] = $key;
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
	
	return ['key' => $kys, 'val' => $vls];
}