<?php

namespace backend\controllers;

class ApimessagesController extends \yii\rest\ActiveController
{
    public $modelClass = 'app\models\Messages';

    public function behaviors()
    {
        return \yii\helpers\ArrayHelper::merge(parent::behaviors(), [
            'corsFilter' => [
                'class' => \yii\filters\Cors::className(),
            ],
        ]);
    }
}