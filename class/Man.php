<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016/8/25
 * Time: 13:51
 */




class Man
{
    /**
     * @param $age    年龄
     * @param $name   名字
     *
     */
    public  function __construct($age,$name){
       // echo 'Construce  a man';
        $this->_age=$age;
        $this->_name=$name;

    }

    public function getAge(){
        return $this->_age;
    }
    public function getName(){
        return $this->_name();
    }
    private $_age,$_name;

    public static function sayHello(){
        echo 'hello man';
    }

}