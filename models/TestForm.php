<?php
namespace app\models;
 use yii\db\ActiveRecord;
//use yii\base\Model;


/*class TestForm extends Model{
	public $name;
	public $email;
	public $text;

}*/

class TestForm extends ActiveRecord{

	public static function tableName(){
	//return 'posts';
		return 'article';
	}

	public function attributeLabels(){
	return[
	'title'=>'Заголовок',
	'text'=>'Текст сообщения',
	'author'=>'Автор',
	//'path'=>'Путь',


	];
	}

	public function rules(){
	return[
		[ ['title','text','author'],'required'],
		//['email','email'],
	];
}


	}
	
?>