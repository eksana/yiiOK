<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\TestFormnew;
//use app\models\Article;
use app\models\Newn;
//use app\models\Posts;
use Yii;


class NewController extends Controller{

	public $layout='basicnew';
	
//все статьи
public function actionTestnew(){
	$this->layout='basicnew';
	//return $this->render('shownew');

	$modelnew=new TestFormnew();
	/*$modelnew->title='Заголовок';
	$modelnew->text='Текст';
	$modelnew->sourth='Источник';
	$modelnew->save();*/

//TestForm::deleteAll(['>','id',2]);
/*$modelnew::deleteAll(['>','id',1]);*/


 if ($modelnew->load(Yii::$app->request->post()) ){
 	if($modelnew->save() ){
 		Yii::$app->session->setFlash('success','Данные приняты');
 		return $this->refresh();
 	}
 	else{
 		Yii::$app->session->setFlash('error','Ошибка');
 		}
 	}

 return $this->render('testnew',compact('modelnew'));


}


//одна статья
public function actionShownew(){
	$this->layout='basicnew';
//return 'news';
//return $this->render('shownew');

	$news=newn::find()->all();

	/*$cats=article::find()->orderBy(['id'=>SORT_DESC])->all();
	$post=posts::find()->orderBy(['id'=>SORT_DESC])->all();*/

return $this->render('shownew',compact('news'));


}


}
	
?>