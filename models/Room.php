<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property int $id
 * @property string $price_per_night
 * @property int $floor
 * @property int $max_persons
 * @property int $has_baby_bed
 * @property int $has_shower
 * @property int $has_bath
 * @property int $has_seeview
 */
class Room extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id','price_per_night', 'floor', 'max_persons'], 'required'],
            [['price_per_night'], 'number'],
            [['floor'], 'integer'],
            [['max_persons', 'has_baby_bed', 'has_shower', 'has_bath', 'has_seeview'], 'string']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'price_per_night' => 'Price Per Night',
            'floor' => 'Floor',
            'max_persons' => 'Max Persons',
            'has_baby_bed' => 'Has Baby Bed',
            'has_shower' => 'Has Shower',
            'has_bath' => 'Has Bath',
            'has_seeview' => 'Has Seeview',
        ];
    }
}
