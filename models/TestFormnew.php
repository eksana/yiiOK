<?php
namespace app\models;
 use yii\db\ActiveRecord;
//use yii\base\Model;


/*class TestFormnew extends Model{
	public $title;
	public $text;
	public $sourth;

}*/

class TestFormnew extends ActiveRecord{

	public static function tableName(){
	return 'newn';
	}

	public function attributeLabels(){
	return[
	'title'=>'Заголовок',
	'text'=>'Текст',
	'sourth'=>'Источник',

	];
	}

	public function rules(){
	return[
		[ ['title','text','sourth'],'required'],
		//['email','email'],
	];
}


	}
	
?>