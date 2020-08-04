<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresas_corte".
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
 * @property string|null $email
 * @property string|null $fecha
 * @property string|null $timestamp
 *
 * @property AsignacionCorte[] $asignacionCortes
 * @property ContactosEmpresasCorte[] $contactosEmpresasCortes
 */
class EmpresasCorte extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empresas_corte';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_vialidad_id'], 'integer'],
            [['fecha', 'timestamp'], 'safe'],
            [['nombre', 'estado', 'ciudad', 'colonia', 'calle', 'comunidad', 'email'], 'string', 'max' => 255],
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
        return $this->hasMany(AsignacionCorte::className(), ['empresas_corte_id' => 'id']);
    }

    /**
     * Gets query for [[ContactosEmpresasCortes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContactosEmpresasCortes()
    {
        return $this->hasMany(ContactosEmpresasCorte::className(), ['empresas_corte_id' => 'id']);
    }
}
