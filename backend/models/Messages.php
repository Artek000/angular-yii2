<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property int $id
 * @property string $login
 * @property string $nick
 * @property string $from
 * @property string $to
 * @property string $message_text
 * @property int $created_at
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'nick', 'from', 'to', 'created_at'], 'required'],
            [['message_text'], 'string'],
            [['created_at'], 'integer'],
            [['login', 'nick', 'from', 'to'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'nick' => 'Nick',
            'from' => 'From',
            'to' => 'To',
            'message_text' => 'Message Text',
            'created_at' => 'Created At',
        ];
    }

    public function afterFind()
    {
        $this->created_at = \Yii::$app->formatter->asDatetime($this->created_at,'php:Y-m-d H:i');
    }

    public function beforeValidate() {

        $this->created_at = strtotime($this->created_at);

        return parent::beforeValidate();
    }
}
