<?php

function dg_est_reading_time() {
	$mycontent = article_html();
	$word = str_word_count(strip_tags($mycontent));
	$m = floor($word / 125);
	$s = floor($word % 125 / (125 / 60));

	if($m >= 1) {

	return $est = $m . ' min' . ($m == 1 ? '' : 's');
	}

	elseif($s <= 59) {

	return $est = $s . ' second' . ($s == 1 ? '' : 's');
	}
}
