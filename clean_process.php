<?php
require_once 'simple_html_dom.php';

function pre_print_r($var){
  echo "<pre>";
	print_r($var);
	echo "</pre>";
    echo "<br />";
}

//improt abbyy处理后的纯文本文件
//然后读取文件每一行为 数组。
$keywds = file("./text/1035.txt");
preg_replace('/\n{2,}/', '\n', $keywds);

/*
//检测 是否有 数字开头的一行。
$subject = $keywds;
$pattern = '/^\d-?/';
$fl_array = preg_grep($pattern,$subject);
pre_print_r($fl_array);
*/


/*
$a = " - und industrieller Kapitalist 267 268 275278 280 284-287 290 328 577";
$pattern = '/\d{6,}/';
preg_match($pattern, $a,$matches);
pre_print_r($matches);
$replacement = substr($matches[0],0,3)."-".substr($matches[0],3,3);
$b = preg_replace($pattern, $replacement, $a);
pre_print_r($b);
*/



//test if 555777 exist;
/*
for ($i=0; $i <=count($clean_arr) ; $i++) { 
	$pattern = '/\d{6,}/';
 	$fl_array = preg_grep($pattern,$clean_arr);
}

pre_print_r($fl_array);
*/

//[464] => - und industrieller Kapitalist 267 268 275278 280 284-287 290 328 577
//[477] => - seine Kosten 263 264 283-287 289296 300

// for ($i=0; $i <count($keywds) ; $i++) { 
// //	$subject = $keywds[$i];
// 	$pattern = '/\d{6,}/';
// 	$matchCount = preg_match($pattern, $keywds[$i],$matches);

// 	if($matchCount==0){
// }else{
// 		$replacement = substr($matches[0],0,3)."-".substr($matches[0],3,3);
// 		$clean_arr=preg_replace($pattern, $replacement, $keywds);
// 		pre_print_r($clean_arr);
// 		}
// };


// for ($i=0; $i <count($clean_arr) ; $i++) { 
// 	// echo $i." : ".trim($clean_arr[$i])."<br />";
// 	$item = trim($clean_arr[$i]);
// 	if(empty($item)){
// 		// remove lines only have space.
// 		unset($clean_arr[$i]);
// 	}else{
// 	echo trim($clean_arr[$i])."<br />";
// 	}
// }

for ($i=0; $i <count($keywds) ; $i++) { 
	// echo $i." : ".trim($keywds[$i])."<br />";
	$item = trim($keywds[$i]);
	if(empty($item)){
		// remove lines only have space.
		unset($keywds[$i]);
	}else{
	echo trim($keywds[$i])."<br />";
	}
}
