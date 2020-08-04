<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empaques_vehiculos".
 *
 * @property int $id
 * @property int $Empaques_id
 * @property int|null $vehiculos_id
 *
 * @property Empaques $empaques
 * @property Vehiculos $vehiculos
 */
class EmpaquesVehiculos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empaques_vehiculos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Empaques_id'], 'required'],
            [['Empaques_id', 'vehiculos_id'], 'integer'],
            [['Empaques_id'], 'exist', 'skipOnError' => true, 'targetClass' => Empaques::className(), 'targetAttribute' => ['Empaques_id' => 'id']],
            [['vehiculos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vehiculos::className(), 'targetAttribute' => ['vehiculos_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Empaques_id' => 'Empaques ID',
            'vehiculos_id' => 'Vehiculos ID',
        ];
    }

    /**
     * Gets query for [[Empaques]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmpaques()
    {
        return $this->hasOne(Empaques::className(), ['id' => 'Empaques_id']);
    }

    /**
     * Gets query for [[Vehiculos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVehiculos()
    {
        return $this->hasOne(Vehiculos::className(), ['id' => 'vehiculos_id']);
    }
}
