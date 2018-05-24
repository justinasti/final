<?php

namespace app\controllers;

use Yii;
use app\models\Room;

class RoomController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new Room();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [ 'model' => $model]);
    }

    public function actionDelete($id)
    {
        Room::findOne($id)->delete();

        return $this->redirect(['/room/index']);
    }

    public function actionIndex()
    {
        $room = Room::find()->orderBy('id')->all();

        return $this->render('index', compact('room'));
    }

    public function actionUpdate($id)
    {
        $room = Room::findOne($id);

        if ($room->load(Yii::$app->request->post()) && $room->save()) {
            return $this->redirect(['view', 'id' => $room->id]);
        }

        return $this->render('update', compact('room'));
    }

    public function actionView($id)
    {
        $room = Room::findOne($id);

        return $this->render('view', compact('room'));
    }

}