<?php
namespace app\controllers;
use yii\web\Controller;


class PostController extends Controller{

	public $layout='basic';
//все статьи
public function actionTest(){
return $this->render('test');
}

//одна статья
public function actionShow(){
	//$this->layout='basic';
return $this->render('show');
}
}
	
?>