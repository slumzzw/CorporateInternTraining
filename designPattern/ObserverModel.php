<?php
namespace Training\designPattern;

/**
 * @todo 观察者模式
 * @author zhuangzhiwei
 * subject observer
 */

//抽象主题接口
interface Subject{
    //注册一个新的观察者
    public function addObserver(Observer $observer);
    //移除一个已经注册的观察者
    public function removeObserver(Observer $observer);
    //通知所以注册的观察者
    public function notifyObserver();
}

//观察者抽象接口
interface Observer{
    //观察者动作
    public function update();
}

//主题，被观察者，如股票系统
class StockSystemSubject implements Subject{
    private $observerSet;
    public function __construct()
    {
        $this->observerSet = [];
    }

    public function addObserver(Observer $observer)
    {
        // TODO: Implement addObserver() method.
        return array_push($this->observerSet,$observer);
    }

    public function removeObserver(Observer $observer)
    {
        // TODO: Implement removeObserver() method.
        $index = array_search($observer,$this->observerSet);
        if($index !== false && array_key_exists($index, $this->observerSet)){
            unset($this->observerSet[$index]);
            return true;
        }else{
            return false;
        }
    }

    public function notifyObserver()
    {
        // TODO: Implement notifyObserver() method.
        if($this->observerSet){
            foreach ($this->observerSet as $observer){
                $observer->update();
            }
            return true;
        }
        return false;
    }
}

//观察者实现，如买了股票的人
class InvestorsObserver implements Observer{
    private  $name;//股民名字

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update()
    {
        // TODO: Implement update() method.
        echo "股票变动了，已经通知了$this->name 。<br>";
    }
}