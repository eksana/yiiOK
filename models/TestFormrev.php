<?php
namespace app\models;
 use yii\db\ActiveRecord;
//use yii\base\Model;


/*class TestFormnew extends Model{
	public $title;
	public $text;
	public $sourth;

}*/

class TestFormrev extends ActiveRecord{

	public static function tableName(){
	return 'review';
	}

	public function attributeLabels(){
	return[
	'title'=>'Заголовок',
	'text'=>'Текст',
	'date'=>'Дата',
	'dateakt'=>'Дата актуальности',

	];
	}

	public function rules(){
	return[
		[ ['title','text','date','dateakt'],'required'],
		//['email','email'],
	];
}


	}
	
?>