<?php

namespace Training\sort;
/**
 * 
 * @author zhuangzhiwei
 * @todo �������͵�����
 *
 */
class SortingAlgorithm{
	/**
	 * @author zhuangzhiwei
	 * @todo ð������
	 * @param array $data
	 * @return array
	 */
	public function bubbleSort($data = []){
		if (!empty($data)){
			$count = count($data);
			for ($i = $count-1; $i > 0; $i--){
				$mark = 0; //���޽�����־
				for ($j = 0; $j < $i; $j++){
					if($data[$j] > $data[$j+1]){
						$item = $data[$j];
						$data[$j] = $data[$j+1];
						$data[$j+1] = $item;
						$mark = 1;
					}
				}
				//�޽������˳�ѭ��
				if(!$mark){
					break;
				}
			}	
		}
		return $data;
	}
	
	/**
	 * @author zhuangzhiwei
	 * @todo ��������
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
						//�޽������˳���ǰ��������Ѿ�����������
						break;
					}
				}
			}
		}
		return $data;
	}
	
	/**
	 * @author zhuangzhiwei
	 * @todo ����
	 * @param array $data
	 * @return array
	 */
	public function quickSort(&$data, $start, $end){
		
	}
}