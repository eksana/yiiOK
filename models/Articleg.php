<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property string $id
 * @property string $title
 * @property string $text
 * @property string $author
 * @property integer $mark
 */
class Articleg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'author', 'mark'], 'required'],
            [['text'], 'string'],
            [['mark'], 'integer'],
            [['title', 'author'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'author' => 'Author',
            'mark' => 'Mark',
        ];
    }
}
