<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vehiculos".
 *
 * @property int $id
 * @property string|null $marca
 * @property string|null $modelo
 * @property int|null $año
 * @property string|null $placas
 * @property string|null $serie_motor
 * @property string|null $color
 * @property float|null $kilometraje
 * @property string|null $foto1
 * @property string|null $foto2
 * @property string|null $foto3
 * @property string|null $foto4
 * @property string|null $foto5
 * @property string|null $fecha
 * @property string|null $timestamp
 *
 * @property AsignacionCorte[] $asignacionCortes
 * @property EmpaquesVehiculos[] $empaquesVehiculos
 * @property HuertasVehiculosHistorial[] $huertasVehiculosHistorials
 * @property VehiculosChofer[] $vehiculosChofers
 */
class Vehiculos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vehiculos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['año'], 'integer'],
            [['kilometraje'], 'number'],
            [['fecha', 'timestamp'], 'safe'],
            [['marca', 'modelo', 'placas', 'serie_motor', 'color', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'año' => 'Año',
            'placas' => 'Placas',
            'serie_motor' => 'Serie Motor',
            'color' => 'Color',
            'kilometraje' => 'Kilometraje',
            'foto1' => 'Foto1',
            'foto2' => 'Foto2',
            'foto3' => 'Foto3',
            'foto4' => 'Foto4',
            'foto5' => 'Foto5',
            'fecha' => 'Fecha',
            'timestamp' => 'Timestamp',
        ];
    }

    /**
     * Gets query for [[AsignacionCortes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAsignacionCortes()
    {
        return $this->hasMany(AsignacionCorte::className(), ['vehiculos_id' => 'id']);
    }

    /**
     * Gets query for [[EmpaquesVehiculos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmpaquesVehiculos()
    {
        return $this->hasMany(EmpaquesVehiculos::className(), ['vehiculos_id' => 'id']);
    }

    /**
     * Gets query for [[HuertasVehiculosHistorials]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHuertasVehiculosHistorials()
    {
        return $this->hasMany(HuertasVehiculosHistorial::className(), ['vehiculos_id' => 'id']);
    }

    /**
     * Gets query for [[VehiculosChofers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVehiculosChofers()
    {
        return $this->hasMany(VehiculosChofer::className(), ['vehiculos_id' => 'id']);
    }
}
