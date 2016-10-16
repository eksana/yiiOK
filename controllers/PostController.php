<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\TestForm;
use app\models\Article;
//use app\models\New;
use app\models\Posts;
use Yii;


class PostController extends Controller{

	public $layout='basic';
	//public $layout='basicnews';

//все статьи
public function actionTest(){
	$model=new TestForm();
	/*$model->name='Автор';
$model->email='mail@mail.com';
$model->text='Текст статьи';
$model->save();*/

//TestForm::deleteAll(['>','id',2]);
//$model::deleteAll(['>','id',1]);


 if ($model->load(Yii::$app->request->post()) ){
 	if($model->save() ){
 		Yii::$app->session->setFlash('success','Данные приняты');
 		return $this->refresh();
 	}
 	else{
 		Yii::$app->session->setFlash('error','Ошибка');
 		}
 	}

 return $this->render('test',compact('model'));


}


//одна статья
public function actionShow(){
	//$this->layout='basic';


//$cats=article::find()->all();

	$cats=article::find()->orderBy(['id'=>SORT_DESC])->all();
	//$post=posts::find()->orderBy(['id'=>SORT_DESC])->all();

return $this->render('show',compact('cats'));


}


}
	
?>