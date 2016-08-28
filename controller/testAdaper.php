<?php
namespace Training\controller;
include '../designPattern/AdapterModel.php';
use Training\designPattern\Adapter;
use Training\designPattern\Adaptee;

//对象适配器测试
$adaptee = new Adaptee();
$adapter = new Adapter($adaptee);
$adapter->speakChinese();
echo "<br/>";
$adapter->speakForeignLanguage();