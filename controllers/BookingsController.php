<?php

namespace app\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Bookings;
use app\components\AccessRule;
use app\models\Guest;
use app\models\Room;
use app\models\User;

class BookingsController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'ruleConfig' => [
                    'class' => AccessRule::className(),
                ],
                'only' => ['index','create','update','delete'],
                'rules'=>[
                    [
                        'actions'=>['index','create','update'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                    [
                        'actions' => ['index','delete'],
                        'allow' => true,
                        'roles' => [User::ROLE_ADMIN]
                    ]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionCreate()
    {
        $bookings = new Bookings();

        if($bookings->load(Yii::$app->request->post()) && $bookings->save()) {
            return $this->redirect(['view', 'id' => $bookings->id]);
        }

        return $this->render('create', ['bookings' => $bookings]);
    }

    public function actionDelete($id)
    {
        Bookings::findOne($id)->delete();

        return $this->redirect(['bookings/index']);
    }

    public function actionIndex()
    {
        $bookings = Bookings::find()->orderBy('id')->all();

        return $this->render('index', compact('bookings'));
    }

    public function actionUpdate($id)
    {
        $bookings = Bookings::findOne($id);
        if ($bookings->load(Yii::$app->request->post()) && $bookings->save()) {
            return $this->redirect(['view', 'id' => $bookings->id]);
        }
        return $this->render('update', compact('bookings'));
    }

    public function actionView($id)
    {
        $bookings = Bookings::findOne($id);

        return $this->render('view', compact('bookings'));
    }

}
