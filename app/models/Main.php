<?php


namespace app\models;


use mf\Model;
use RedBeanPHP\R;

class Main extends Model
{
    public function getNames(): array
    {
        return R::findAll('name');
    }
}