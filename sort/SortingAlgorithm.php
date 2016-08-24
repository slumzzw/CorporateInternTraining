<?php

namespace Training\sort;
/**
 *
 * @author zhuangzhiwei
 * @todo 几种类型的排序
 *
 */
class SortingAlgorithm
{
    /**
     * @author zhuangzhiwei
     * @todo 冒泡排序
     * @param array $data
     * @return array
     */
    public function bubbleSort($data = [])
    {
        if (!empty($data)) {
            $count = count($data);
            for ($i = $count - 1; $i > 0; $i--) {
                $mark = 0; //有无交换标志
                for ($j = 0; $j < $i; $j++) {
                    if ($data[$j] > $data[$j + 1]) {
                        $item         = $data[$j];
                        $data[$j]     = $data[$j + 1];
                        $data[$j + 1] = $item;
                        $mark         = 1;
                    }
                }
                //无交换则退出循环
                if (!$mark) {
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
    public function insertSort($data = [])
    {
        if (!empty($data)) {
            $count = count($data);
            for ($i = 1; $i < $count; $i++) {
                $item = $data[$i];
                for ($j = $i - 1; $j >= 0; $j--) {
                    if ($item < $data[$j]) {
                        $data[$j + 1] = $data[$j];
                        $data[$j]     = $item;
                    } else {
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
    public function quickSort(&$data, $start, $end)
    {
        if (!empty($data)) {
            $low  = $start;
            $high = $end;
            //同时移动low和high，进行快排操作
            while ($low != $high) {
                while ($data[$low] <= $data[$start] && $low != $high) {
                    $low++;
                }
                while ($data[$high] >= $data[$start] && $low != $high) {
                    $high--;
                }
                $item        = $data[$low];
                $data[$low]  = $data[$high];
                $data[$high] = $item;
            }
            if ($low != $start && $data[$low] > $data[$start]) $low--;
            $item         = $data[$start];
            $data[$start] = $data[$low];
            $data[$low]   = $item;

            //递归进入快排
            if ($low - 1 > $start) $this->quickSort($data, $start, $low - 1);
            if ($high + 1 < $end) $this->quickSort($data, $low + 1, $end);
        }
    }

    /**
     * @author zhuangzhiwei
     * @todo 选择排序
     * @param array $data
     * @return array
     */
    public function chooseSort($data = [])
    {
        if (!empty($data)) {
            $count = count($data);
            for ($i = 0; $i < $count; $i++) {
                $key = $i;
                for ($j = $i + 1; $j < $count; $j++) {
                    if ($data[$j] < $data[$key]) {
                        $key = $j;
                    }
                }
                if ($key != $i) {
                    $item       = $data[$key];
                    $data[$key] = $data[$i];
                    $data[$i]   = $item;
                }
            }
        }
        return $data;
    }

    /**
     * @author zhuangzhiwei
     * @todo 归并排序
     * @param array $data
     * @return array
     */
    public function mergeSort(&$data, $start, $end)
    {
        if (!empty($data)) {
            if ($start < $end) {
                //递归分组
                $mid = ($start + $end) / 2;
                $this->mergeSort($data, $start, $mid);
                $this->mergeSort($data, $mid + 1, $end);

                //合并数组
                $temp = [];
                $low  = $start;
                $high = $mid + 1;
                while ($low <= $mid && $high <= $end) {
                    if ($data[$low] < $data[$high]) {
                        $temp[] = $data[$low];
                        $low++;
                    } else {
                        $temp[] = $data[$high];
                        $high++;
                    }
                }
                //写入不需比较的数据
                while ($low <= $mid) {
                    $temp[] = $data[$low];
                    $low++;
                }

                while ($high <= $end) {
                    $temp[] = $data[$high];
                    $high++;
                }
                //将排序好的部分写回原数组
                $length = count($temp);
                for ($i = 0; $i < $length; $i++) {
                    $data[$start + $i] = $temp[$i];
                }
            }
        }
    }
}