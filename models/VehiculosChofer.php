<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vehiculos_chofer".
 *
 * @property int $vehiculos_id
 * @property int $choferes_id
 *
 * @property Choferes $choferes
 * @property Vehiculos $vehiculos
 */
class VehiculosChofer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vehiculos_chofer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vehiculos_id', 'choferes_id'], 'required'],
            [['vehiculos_id', 'choferes_id'], 'integer'],
            [['choferes_id'], 'exist', 'skipOnError' => true, 'targetClass' => Choferes::className(), 'targetAttribute' => ['choferes_id' => 'id']],
            [['vehiculos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vehiculos::className(), 'targetAttribute' => ['vehiculos_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'vehiculos_id' => 'Vehiculos ID',
            'choferes_id' => 'Choferes ID',
        ];
    }

    /**
     * Gets query for [[Choferes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChoferes()
    {
        return $this->hasOne(Choferes::className(), ['id' => 'choferes_id']);
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
