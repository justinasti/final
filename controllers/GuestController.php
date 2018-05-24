<?php

namespace app\controllers;

use Yii;
use app\models\Guest;

class GuestController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $guest = new Guest();

        if($guest->load(Yii::$app->request->post()) && $guest->save()) {
            return $this->redirect(['view', 'id' => $guest->id]);
        }
        return $this->render('create', compact('guest'));
    }

    public function actionDelete($id)
    {
        Guest::findOne($id)->delete();

        return $this->redirect(['guest/index']);
    }

    public function actionIndex()
    {
        $guest = Guest::find()->orderBy('fname')->all();
        return $this->render('index', compact('guest'));
    }

    public function actionUpdate($id)
    {
        $guest = Guest::findOne($id);
        if ($guest->load(Yii::$app->request->post()) && $guest->save()) {
            return $this->redirect(['view', 'id' => $guest->id]);
        }

        return $this->render('update', compact('guest'));
    }

    public function actionView($id)
    {
        $guest = Guest::findOne($id);
        return $this->render('view', compact('guest'));
    }

}
