<?php

namespace app\controllers;

class UserTableController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
