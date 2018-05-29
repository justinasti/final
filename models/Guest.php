<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guest".
 *
 * @property int $id
 * @property string $fname
 * @property string $lname
 * @property string $phone
 * @property string $address
 * @property string $email
 */
class Guest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fname', 'lname', 'phone', 'address'], 'required'],
            [['fname', 'lname'], 'string'],
            [['phone'], 'string', 'max' => 15],
            [['address'], 'string'],
            [['email'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fname' => 'First Name',
            'lname' => 'Last Name',
            'phone' => 'Phone',
            'address' => 'Address',
            'email' => 'Email',
        ];
    }
}
