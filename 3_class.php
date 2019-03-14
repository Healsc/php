<?php
    class Person{
        var $name = "zs";
        //类里声明变量用var
        function say(){
            echo $this -> name;
        }
    }
    $p1 = new Person();
    $p1 -> say();