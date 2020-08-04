<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gps".
 *
 * @property int $id
 * @property string|null $imei
 * @property string|null $latitud
 * @property string|null $longitud
 * @property string|null $velocidad
 * @property string|null $timestamp
 */
class Gps extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gps';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['timestamp'], 'safe'],
            [['imei', 'latitud', 'longitud', 'velocidad'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imei' => 'Imei',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
            'velocidad' => 'Velocidad',
            'timestamp' => 'Timestamp',
        ];
    }
}
