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
	return 'posts';
	}

	public function attributeLabels(){
	return[
	'name'=>'Имя',
	'email'=>'E-mail',
	'text'=>'Текст сообщения',

	];
	}

	public function rules(){
	return[
		[ ['name','text'],'required'],
		['email','email'],
	];
}


	}
	
?>