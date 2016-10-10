<?php

namespace app\controllers;
use yii\web\Controller;

Class MyController extends Controller{

 public function actionSay($message = 'Привет')
    {
        return $this->render('say', ['message' => $message]);
        //return $this->render('say', ['message' => $message]);
    }
}
?>