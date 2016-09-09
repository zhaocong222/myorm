<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 16-9-9
 * Time: 上午9:46
 */
//IteratorAggregate（聚合式迭代器）接口

class myData implements IteratorAggregate {
    public $property1 = "Public property one";
    public $property2 = "Public property two";
    public $property3 = "Public property three";

    public function __construct() {
        $this->property4 = "last property";
    }

    public function getIterator()
    {
        //返回数组迭代器
        return new ArrayIterator($this);
    }

}

$obj = new myData();

/*
foreach ($obj as $key=>$value){
    var_dump($key,$value);
    echo "\n";
}
*/

//实例2
class my implements IteratorAggregate
{
    private $arr = [];
    const TYPE_INDEXED = 1;
    const TYPE_ASSOCIATIVE = 2;

    public function __construct(array $data,$type = self::TYPE_INDEXED)
    {
        reset($data);
        //each 返回当前数组的键值,并且指针向前移动一步
        while (list($k,$v) = each($data)){
            $type == self::TYPE_INDEXED  ? $this->arr[] = $v :
                                         $this->arr[$k] = $v;
        }
        /*
        print_r($this->arr);
        exit();
        */
    }

    public function getIterator()
    {
        //对 属性arr迭代
        return new ArrayIterator($this->arr);
    }
}

//返回一个迭代器
$obj = new my(['one'=>'php','javascript','three'=>'c#','java',], 1 );

//迭代
/*
foreach ($obj as $key=>$value){
    var_dump($key,$value);
    echo "<br/>";
}
*/

class comm
{

    private $age = 12;
    protected $sex = 'boy';
    public $name = 'lemon';

    public function getAge()
    {
        return $this->age;
    }

}

foreach (new comm() as $k=>$v){
    var_dump($k,$v);
}
