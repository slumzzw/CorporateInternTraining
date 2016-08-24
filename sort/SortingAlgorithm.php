<?php

namespace Training\sort;
/**
 * 
 * @author zhuangzhiwei
 * @todo 几种类型的排序
 *
 */
class SortingAlgorithm{
	/**
	 * @author zhuangzhiwei
	 * @todo 冒泡排序
	 * @param array $data
	 * @return array
	 */
	public function bubbleSort($data = []){
		if (!empty($data)){
			$count = count($data);
			for ($i = $count-1; $i > 0; $i--){
				$mark = 0; //有无交换标志
				for ($j = 0; $j < $i; $j++){
					if($data[$j] > $data[$j+1]){
						$item = $data[$j];
						$data[$j] = $data[$j+1];
						$data[$j+1] = $item;
						$mark = 1;
					}
				}
				//无交换则退出循环
				if(!$mark){
					break;
				}
			}	
		}
		return $data;
	}
	
	/**
	 * @author zhuangzhiwei
	 * @todo 插入排序
	 * @param array $data
	 * @return array
	 */
	public function insertSort($data = []){
		if (!empty($data)){
			$count = count($data);
			for ($i = 1; $i < $count; $i++){
				$item = $data[$i];
				for($j = $i-1; $j>=0; $j--){
					if($item < $data[$j]){
						$data[$j+1] = $data[$j];
						$data[$j] = $item;
					}else {
						//无交换则退出，前面的数组已经是有序数组
						break;
					}
				}
			}
		}
		return $data;
	}
	
	/**
	 * @author zhuangzhiwei
	 * @todo 快排
	 * @param array $data
	 * @return array
	 */
	public function quickSort(&$data, $start, $end){
		
	}
}