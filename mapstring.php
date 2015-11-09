<?php
/**
 * Maps a string looking for JSON patterns
 * @param string $str Input string
 * @return array key => values and value => keys
 */

function mapstring($str) {
	$all = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.';
	$len = strlen($str);
	$key = '';
	$val = '';
	$qut = '';
	$run = 0;
	
	for ($i = 0; $i < $len; $i++) {
		$chr = $str{$i};
		
		// quoted text
		if ($qut) {
			// quotes ended
			if ($chr == $qut) {
				$qut = '';
			}
			else {
				$val .= $chr;
			}
		}
		// open quotes
		else if ($chr == '"' || $chr == "'") {
			$qut = $chr;
		}
		// make
		else if (strpos(',]};', $chr) !== false) {
			// format the value
			if ($key) {
				echo "$key => $val\n";
			}
			$key = '';
			$val = '';
			$run = 0;
		}
		// key value switcher
		else if (strpos(':=', $chr) !== false) {
			$key = $val;
			$val = '';
		}
		// new divisor
		else if (strpos('{[', $chr) !== false) {
			$key = '';
			$val = '';
		}
		// letters, numbers and dots
		else if (stripos($all, $chr) !== false) {
			$val .= $chr;
		}
	}
}