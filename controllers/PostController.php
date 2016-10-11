<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\article;


class PostController extends Controller{

	public $layout='basic';
//все статьи
public function actionTest(){
return $this->render('test');
}

//одна статья
public function actionShow(){
	//$this->layout='basic';


//$cats=article::find()->all();

	$cats=article::find()->orderBy(['id'=>SORT_DESC])->all();

return $this->render('show',compact('cats'));
}
}
	
?>