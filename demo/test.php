<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 16-9-8
 * Time: 上午9:36
 */
require '../vendor/autoload.php';


try{
    $pdo = new \PDO("mysql:host=127.0.0.1;dbname=weibo",'root','123456');
    $pdo->exec("SET NAMES utf8");

    $db = new NotORM($pdo);

    //user表
    // $db->user() -> return NotORM_Result
    // limit-> 从第?开始,取?条
    $res = $db->user()->select('id,nick')->limit(5,2);
    //echo get_class($res); // NotORM_Result

    foreach ($res as $val) {
        echo $val['id'],'---',$val['nick']."<br/>";
    }

} catch (\PDOException $e){
    die($e->getMessage());
} catch (\Exception $e){
    die($e->getMessage());
}