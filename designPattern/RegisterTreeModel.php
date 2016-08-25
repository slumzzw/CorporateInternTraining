<?php
/**
 * @todo 注册树模型
 * Created by PhpStorm.
 * User: zhuangzhiwei
 * Date: 2016/8/25
 * Time: 11:32
 */
namespace Training\designPattern;

class RegisterTreeModel
{
    private static $registerSet = [];

    //set方法，注册一个对象
    public function setObject($registerName, $object)
    {
        self::$registerSet[$registerName] = $object;
    }

    //get方法，获取注册树上的实例
    public function getObject($registerName)
    {
        return self::$registerSet[$registerName];
    }

    //remove方法，移除注册树的某个实例
    public function removeObject($registerName)
    {
        unset(self::$registerSet[$registerName]);
    }
}