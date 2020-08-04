<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "huertas_vehiculos_historial".
 *
 * @property int $id
 * @property int $huertas_id
 * @property int|null $vehiculos_id
 * @property string|null $fecha
 *
 * @property Huertas $huertas
 * @property Vehiculos $vehiculos
 */
class HuertasVehiculosHistorial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'huertas_vehiculos_historial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['huertas_id'], 'required'],
            [['huertas_id', 'vehiculos_id'], 'integer'],
            [['fecha'], 'safe'],
            [['huertas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Huertas::className(), 'targetAttribute' => ['huertas_id' => 'id']],
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
            'huertas_id' => 'Huertas ID',
            'vehiculos_id' => 'Vehiculos ID',
            'fecha' => 'Fecha',
        ];
    }

    /**
     * Gets query for [[Huertas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHuertas()
    {
        return $this->hasOne(Huertas::className(), ['id' => 'huertas_id']);
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
