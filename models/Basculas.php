<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "basculas".
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
 * @property string|null $latitud
 * @property string|null $longitud
 * @property string|null $area_telefono
 * @property string|null $telefono
 * @property string|null $extension
 * @property string|null $email
 * @property string|null $fecha
 * @property string|null $timestamp
 *
 * @property ContactosBasculas[] $contactosBasculas
 * @property HuertasBasculas[] $huertasBasculas
 */
class Basculas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'basculas';
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
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
            'area_telefono' => 'Area Telefono',
            'telefono' => 'Telefono',
            'extension' => 'Extension',
            'email' => 'Email',
            'fecha' => 'Fecha',
            'timestamp' => 'Timestamp',
        ];
    }

    /**
     * Gets query for [[ContactosBasculas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContactosBasculas()
    {
        return $this->hasMany(ContactosBasculas::className(), ['basculas_id' => 'id']);
    }

    /**
     * Gets query for [[HuertasBasculas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHuertasBasculas()
    {
        return $this->hasMany(HuertasBasculas::className(), ['basculas_id' => 'id']);
    }
}
