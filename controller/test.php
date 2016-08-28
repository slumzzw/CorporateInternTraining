<?php
namespace Training\controller;
include '../sort/SortingAlgorithm.php';
use Training\sort\SortingAlgorithm;

header("Content-type:text/html;charset=utf-8");
$sortdata = $_POST['sortdata'];
$data = explode(",", $sortdata);
$type = $_POST['type'];
$sortFuc = new SortingAlgorithm();
switch ($type){
	case 1:
		$data = $sortFuc->bubbleSort($data);
		break;
	case 2:
		$data = $sortFuc->insertSort($data);
		break;
	case 3:
		$data = $sortFuc->chooseSort($data);
		break;
	case 4:
		$end = count($data)-1;
		$sortFuc->quickSort($data, 0, $end);
		break;
	case 5:
		$end = count($data)-1;
		$sortFuc->mergeSort($data, 0, $end);	
		break;
}
$result = array("sortdata"=>implode(",", $data));
$result = json_encode($result);
echo $result;