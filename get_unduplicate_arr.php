<?php
include './db_array/db_word_id.php';
include './db_array/db_globRegxml.php';
include './db_array/db_tmpxml.php';
include './db_array/db_duplicate_word.php';
require_once('./utility.php');

$duplicate_arr = array();

$o_arr = $globRegxml['oberBegriff'];
foreach ($o_arr as $ober) {
	$oname = trimUTF8BOM($ober['oname']);
	if(!in_array($oname, $duplicate_word)){
		$tmp = array_search($oname, $word_id);
		$unduplicate_arr[$tmp] = $ober;
	}else{
		$tmp = array_search($oname, $word_id);
		$duplicate_arr[$tmp][] = $ober;
	}
}

$o_arr = $tmpxml['oberBegriff'];
foreach ($o_arr as $ober) {
	$oname = trimUTF8BOM($ober['oname']);
	if(!in_array($oname, $duplicate_word)){
		$tmp = array_search($oname, $word_id);
		$unduplicate_arr[$tmp] = $ober;
	}else{
		$tmp = array_search($oname, $word_id);
		$duplicate_arr[$tmp][] = $ober;
	}
}


// split both globReg & tmpxml to duplicate($unduplicate_arr) & unduplicated($duplicate_arr);
// pre_print_r($unduplicate_arr);
array_to_file($unduplicate_arr);
array_to_file($duplicate_arr);
// all the unduplicate words array are put in $unduplicate_arr;
// pre_print_r($unduplicate_arr['A0003']); // unduplicated obers
// Next to reset id for each array;
pre_print_r("<h3><p>divide both tmpxml and globReg to unduplicate_arr&duplicate_arr</p></h3><a href='./duplicate_to_arr.php'>Next</a></h3>");
