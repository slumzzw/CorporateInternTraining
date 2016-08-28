<?php
namespace Training\controller;
include '../designPattern/ObserverModel.php';
use Training\designPattern\InvestorsObserver;
use Training\designPattern\StockSystemSubject;

//观察者模式测试

//新建一个名为zhuangzhiwei的观察者
$observer1 = new InvestorsObserver("zhuangzhiwei");
//新建一个名为zzw观察者
$observer2 = new InvestorsObserver("zzw");
//把新建的观察者加入到被观察系统中
$subject = new StockSystemSubject();
$subject->addObserver($observer1);
$subject->addObserver($observer2);
$subject->notifyObserver();