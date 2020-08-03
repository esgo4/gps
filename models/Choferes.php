<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "choferes".
 *
 * @property int $id
 * @property string|null $nombres
 * @property string|null $apellido_paterno
 * @property string|null $apellido_materno
 * @property string|null $estado
 * @property string|null $ciudad
 * @property string|null $colonia
 * @property int|null $tipo_vialidad_id
 * @property string|null $calle
 * @property string|null $numero
 * @property string|null $codigo_postal
 * @property string|null $comunidad
 * @property string|null $lada_telefono
 * @property string|null $telefono
 * @property string|null $email
 * @property string|null $fecha
 * @property string|null $timestamp
 *
 * @property AsignacionCorte[] $asignacionCortes
 * @property ContactoFamiliarChoferes[] $contactoFamiliarChoferes
 * @property VehiculosChofer[] $vehiculosChofers
 */
class Choferes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'choferes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_vialidad_id'], 'integer'],
            [['fecha', 'timestamp'], 'safe'],
            [['nombres', 'apellido_paterno', 'apellido_materno', 'estado', 'ciudad', 'colonia', 'calle', 'numero', 'comunidad', 'email'], 'string', 'max' => 255],
            [['codigo_postal'], 'string', 'max' => 5],
            [['lada_telefono'], 'string', 'max' => 3],
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
            'nombres' => 'Nombres',
            'apellido_paterno' => 'Apellido Paterno',
            'apellido_materno' => 'Apellido Materno',
            'estado' => 'Estado',
            'ciudad' => 'Ciudad',
            'colonia' => 'Colonia',
            'tipo_vialidad_id' => 'Tipo Vialidad ID',
            'calle' => 'Calle',
            'numero' => 'Numero',
            'codigo_postal' => 'Codigo Postal',
            'comunidad' => 'Comunidad',
            'lada_telefono' => 'Lada Telefono',
            'telefono' => 'Telefono',
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
        return $this->hasMany(AsignacionCorte::className(), ['chofer_id' => 'id']);
    }

    /**
     * Gets query for [[ContactoFamiliarChoferes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContactoFamiliarChoferes()
    {
        return $this->hasMany(ContactoFamiliarChoferes::className(), ['choferes_id' => 'id']);
    }

    /**
     * Gets query for [[VehiculosChofers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVehiculosChofers()
    {
        return $this->hasMany(VehiculosChofer::className(), ['choferes_id' => 'id']);
    }
}
