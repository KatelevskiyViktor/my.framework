<?php


namespace app\controllers;
use app\models\Main;
use mf\Controller;


/** @property Main $model */
class MainController extends Controller
{
    public function indexAction()
    {
        $names = $this->model->getNames();
        $this->setMeta('Main page', 'Description...', 'keywords...');
        $this->set(compact('names'));
    }
}