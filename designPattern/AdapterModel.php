<?php
namespace Training\designPattern;

/**
 * @todo 对象适配器模式
 * @author zhuangzhiwei
 */

//目标角色，例如英语弱弱的中国球员
interface Target{
	//讲外国语言，与国际教练交流
	public function speakForeignLanguage();
	
	//讲中文
	public function speakChinese();
	
}

//源角色,例如美国教练（讲英语的）
class Adaptee{
	public function speakForeignLanguage(){
		echo "I can speak English!";
	}
}

//适配器，英语翻译官
class Adapter implements Target{
	private $adaptee;
	
	//实例化，适配英语翻译官
	function __construct(Adaptee $adaptee){
		$this->adaptee = $adaptee;
	}
	
	//翻译官翻译美国教练的语言，讲英语
	public function speakForeignLanguage(){
		$this->adaptee->speakForeignLanguage();
	}
	
	//翻译官同样会将中文
	public function speakChinese(){
		echo "I can speak Chinese!";
	}
}