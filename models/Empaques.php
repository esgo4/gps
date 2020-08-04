<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empaques".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $estado
 * @property string|null $ciudad
 * @property string|null $colonia
 * @property int|null $tipo_vialidad_id
 * @property string|null $calle
 * @property string|null $numero
 * @property string|null $codigo_postal
 * @property string|null $comunidad
 * @property string|null $area_telefono
 * @property string|null $telefono
 * @property string|null $extension
 * @property string|null $latitud
 * @property string|null $longitud
 * @property string|null $email
 * @property string|null $fecha
 * @property string|null $timestamp
 *
 * @property AsignacionCorte[] $asignacionCortes
 * @property ContactosEmpaques[] $contactosEmpaques
 * @property EmpaquesVehiculos[] $empaquesVehiculos
 */
class Empaques extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empaques';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_vialidad_id'], 'integer'],
            [['fecha', 'timestamp'], 'safe'],
            [['nombre', 'estado', 'ciudad', 'colonia', 'calle', 'comunidad', 'latitud', 'longitud', 'email'], 'string', 'max' => 255],
            [['numero', 'extension'], 'string', 'max' => 45],
            [['codigo_postal'], 'string', 'max' => 5],
            [['area_telefono'], 'string', 'max' => 3],
            [['telefono'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'estado' => 'Estado',
            'ciudad' => 'Ciudad',
            'colonia' => 'Colonia',
            'tipo_vialidad_id' => 'Tipo Vialidad ID',
            'calle' => 'Calle',
            'numero' => 'Numero',
            'codigo_postal' => 'Codigo Postal',
            'comunidad' => 'Comunidad',
            'area_telefono' => 'Area Telefono',
            'telefono' => 'Telefono',
            'extension' => 'Extension',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
            'email' => 'Email',
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
        return $this->hasMany(AsignacionCorte::className(), ['empaques_id' => 'id']);
    }

    /**
     * Gets query for [[ContactosEmpaques]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContactosEmpaques()
    {
        return $this->hasMany(ContactosEmpaques::className(), ['Empaques_id' => 'id']);
    }

    /**
     * Gets query for [[EmpaquesVehiculos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmpaquesVehiculos()
    {
        return $this->hasMany(EmpaquesVehiculos::className(), ['Empaques_id' => 'id']);
    }
}
