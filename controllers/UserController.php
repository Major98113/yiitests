<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;


class UserController extends Controller {
    public function actionIndex(){
        return $this->render('@app/views/site/about');
    }
}