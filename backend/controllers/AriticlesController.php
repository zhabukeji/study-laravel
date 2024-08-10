<?php

namespace backend\controllers;

class AriticlesController extends \yii\web\Controller
{
    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actionDestroy()
    {
        return $this->render('destroy');
    }

    public function actionEdit()
    {
        return $this->render('edit');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionShow()
    {
        return $this->render('show');
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

}
