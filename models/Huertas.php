<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "huertas".
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
 * @property string|null $poligono
 * @property string|null $fecha
 * @property string|null $timestamp
 *
 * @property AsignacionCorte[] $asignacionCortes
 * @property HuertasBasculas[] $huertasBasculas
 * @property HuertasVehiculosHistorial[] $huertasVehiculosHistorials
 */
class Huertas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'huertas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_vialidad_id'], 'integer'],
            [['poligono'], 'string'],
            [['fecha', 'timestamp'], 'safe'],
            [['nombre', 'estado', 'ciudad', 'colonia', 'calle', 'comunidad', 'latitud', 'longitud'], 'string', 'max' => 255],
            [['numero'], 'string', 'max' => 45],
            [['codigo_postal'], 'string', 'max' => 5],
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
            'poligono' => 'Poligono',
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
        return $this->hasMany(AsignacionCorte::className(), ['huerta_id' => 'id']);
    }

    /**
     * Gets query for [[HuertasBasculas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHuertasBasculas()
    {
        return $this->hasMany(HuertasBasculas::className(), ['huertas_id' => 'id']);
    }

    /**
     * Gets query for [[HuertasVehiculosHistorials]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHuertasVehiculosHistorials()
    {
        return $this->hasMany(HuertasVehiculosHistorial::className(), ['huertas_id' => 'id']);
    }
}
