<?php
class myIterator implements Iterator {

    private $position = 0;
    private $array = array(
        "firstelement",
        "secondelement",
        "lastelement",
    );

    public function __construct() {
        $this->position = 0;
    }

    //返回到迭代器的第一个元素
    function rewind() {
        var_dump(__METHOD__);
        $this->position = 0;
    }

    //返回当前元素
    function current() {
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }

    //返回当前元素的键
    function key() {
        var_dump(__METHOD__);
        return $this->position;
    }

    //向前移动到下一个元素
    function next() {
        var_dump(__METHOD__);
        ++$this->position;
    }

    //检查当前位置是否有效
    function valid() {
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }
}

$it = new myIterator;

//记录步骤
//1. 在第一次循环迭代之前, Iterator::rewind() is called
//2. 在每次循环迭代中,  Iterator::valid() is called
//3. 如果Iterator::valid() 返回 false , 循环结束
//   如果Iterator::valid() 返回 true , Iterator::current() is called and Iterator::key() is called.
//4. 返回当前迭代器的值 echo 
//5. 在每一次迭代后,  Iterator::next() is called , 然后又从 步骤2开始执行.

foreach($it as $key => $value) {
    echo $key,'-',$value;
    echo "\n";
}
/*
 * 输出的结果
 * myIterator::rewind   重置迭代器(返回到迭代器的第一个元素)
 *
 * myIterator::valid    检查当前位置是否有效
 * myIterator::current
 * myIterator::key
 * 0-firstelement
 * myIterator::next
 *
 * myIterator::valid
 * myIterator::current
 * myIterator::key
 * 1-secondelement
 * myIterator::next
 *
 * myIterator::valid
 * myIterator::current
 * myIterator::key
 * 2-lastelement
 * myIterator::next
 *
 * myIterator::valid
 *
 * 循环结束
 *
 */

?>