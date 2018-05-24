<?php

namespace app\controllers;

use app\models\Bookings;

class BookingsController extends \yii\web\Controller
{
    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionIndex()
    {
        $bookings = Bookings::find()->orderBy('id')->all();

        return $this->render('index', compact('bookings'));
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

    public function actionView()
    {
        return $this->render('view');
    }

}
