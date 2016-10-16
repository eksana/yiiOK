<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\TestFormrev;
//use app\models\Article;
use app\models\Review;
//use app\models\Posts;
use Yii;


class RevController extends Controller{

	public $layout='basicrev';
	
//все статьи
public function actionTestrev(){
	$this->layout='basicrev';
	//return $this->render('shownew');

	$modelrev=new TestFormrev();
	/*$modelnew->title='Заголовок';
	$modelnew->text='Текст';
	$modelnew->sourth='Источник';
	$modelnew->save();*/

//TestForm::deleteAll(['>','id',2]);
/*$modelnew::deleteAll(['>','id',1]);*/


 if ($modelrev->load(Yii::$app->request->post()) ){
 	if($modelrev->save() ){
 		Yii::$app->session->setFlash('success','Данные приняты');
 		return $this->refresh();
 	}
 	else{
 		Yii::$app->session->setFlash('error','Ошибка');
 		}
 	}

 return $this->render('testrev',compact('modelrev'));


}


//одна статья
public function actionShowrev(){
	$this->layout='basicrev';
//return 'news';
//return $this->render('shownew');

	$rev=review::find()->all();

	/*$cats=article::find()->orderBy(['id'=>SORT_DESC])->all();
	$post=posts::find()->orderBy(['id'=>SORT_DESC])->all();*/

return $this->render('showrev',compact('rev'));


}


}
	
?>