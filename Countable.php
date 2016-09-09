<?php

class ConutMe
{
    protected $_myCount = 3;

    public function count()
    {
        return $this->_myCount;
    }
}

$countable = new ConutMe();
echo count($countable); ///result is "1", not as expected
exit();


/*
 * Countable这个接口用于统计对象的数量,当对一个对象调用count的时候,如果类(如CountMe)没有继承Countable
 * 将一直返回1,如果继承了Countable会返回所实现的count方法所返回的数字
 */
class CountMe implements Countable
{
    protected $_myc = 4;

    public function count()
    {
        return $this->_myc;
    }
}

$countable = new CountMe();
echo count($countable);//result is "3" as expected