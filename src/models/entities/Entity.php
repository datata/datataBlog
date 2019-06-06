<?php
namespace App\models\entities;


abstract class Entity
{
    public function __get($name)
    {
        if(property_exist($this,$name)){
            return $this->{$name};
        }
    }

    public function __set($name,$value)
    {
        if(property_exist($this,$name)){
            $this->{$name}=$value;
        }
    }
}