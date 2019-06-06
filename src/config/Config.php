<?php
namespace App\config;

class Config
{
    public function getDB()
    {
        return parse_ini_file(dirname(__DIR__).'/database.ini');
    }
}