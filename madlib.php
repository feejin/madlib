<?php
// convert plain text list to array
function getlist($f) {
	return array_unique(explode("\n", trim(file_get_contents('lists/' . $f . '.txt'))));
}

// get random word, no duplicates
function getword($arr, $pluralsAllowed=true) {
	global $m;
	while ($word = $arr[mt_rand(0, count($arr) -1)]) {
		if ( ! $pluralsAllowed && substr($word, -1) === 's') {
			$word = substr($word, 0, -1);
		}
		if ( ! strstr($m, $word)) {
			return $word;
		}
	}
}

// quick method of handling random plurals
function opinionjoin() {
	return mt_rand(0, 1) ? 's are ' : ' is ';
}

// assign lists to variables
$lists = array(
	'company1',
	'company2',
	'actions',
	'opinion1',
	'opinion2',
	'product',
	'feature1',
	'feature2',
	'benefit1',	
	'benefit2',	
	'benefit3',
	'benefit4'
);

foreach ($lists as $list) {
	${$list} = getlist($list);
}

// build madlib
$m = '';
$m .= 'At <span class="highlight">' . ucwords(strtolower(getword($company1) . ' ' . getword($company2))) . '</span>';
$m .= ' we ' . strtolower(getword($actions));
$m .= ' that ' . strtolower(getword($opinion1, false)) . opinionjoin() . strtolower(getword($opinion2));
$m .= '. That&rsquo;s why <span class="highlight">' . getword($product) . '</span>';
$m .= ' offers ' . getword($feature1) . ' ' . getword($feature2);
$m .= ' that ' . getword($benefit1) . ' ' . getword($benefit2) . ' ' . getword($benefit4);
