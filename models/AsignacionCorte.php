<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asignacion_corte".
 *
 * @property int $id
 * @property int $empaques_id
 * @property int|null $empresas_corte_id
 * @property int|null $huerta_id
 * @property int|null $basculas_id
 * @property int|null $vehiculos_id
 * @property int|null $chofer_id
 * @property int|null $cuadrilla_id
 * @property int|null $fecha
 * @property string|null $timestamp
 *
 * @property Empaques $empaques
 * @property ContactosBasculas $basculas
 * @property Choferes $chofer
 * @property Cuadrillas $cuadrilla
 * @property EmpresasCorte $empresasCorte
 * @property Huertas $huerta
 * @property Vehiculos $vehiculos
 */
class AsignacionCorte extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asignacion_corte';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'empaques_id'], 'required'],
            [['id', 'empaques_id', 'empresas_corte_id', 'huerta_id', 'basculas_id', 'vehiculos_id', 'chofer_id', 'cuadrilla_id', 'fecha'], 'integer'],
            [['timestamp'], 'string', 'max' => 45],
            [['id'], 'unique'],
            [['empaques_id'], 'exist', 'skipOnError' => true, 'targetClass' => Empaques::className(), 'targetAttribute' => ['empaques_id' => 'id']],
            [['basculas_id'], 'exist', 'skipOnError' => true, 'targetClass' => ContactosBasculas::className(), 'targetAttribute' => ['basculas_id' => 'id']],
            [['chofer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Choferes::className(), 'targetAttribute' => ['chofer_id' => 'id']],
            [['cuadrilla_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cuadrillas::className(), 'targetAttribute' => ['cuadrilla_id' => 'id']],
            [['empresas_corte_id'], 'exist', 'skipOnError' => true, 'targetClass' => EmpresasCorte::className(), 'targetAttribute' => ['empresas_corte_id' => 'id']],
            [['huerta_id'], 'exist', 'skipOnError' => true, 'targetClass' => Huertas::className(), 'targetAttribute' => ['huerta_id' => 'id']],
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
            'empaques_id' => 'Empaques ID',
            'empresas_corte_id' => 'Empresas Corte ID',
            'huerta_id' => 'Huerta ID',
            'basculas_id' => 'Basculas ID',
            'vehiculos_id' => 'Vehiculos ID',
            'chofer_id' => 'Chofer ID',
            'cuadrilla_id' => 'Cuadrilla ID',
            'fecha' => 'Fecha',
            'timestamp' => 'Timestamp',
        ];
    }

    /**
     * Gets query for [[Empaques]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmpaques()
    {
        return $this->hasOne(Empaques::className(), ['id' => 'empaques_id']);
    }

    /**
     * Gets query for [[Basculas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBasculas()
    {
        return $this->hasOne(ContactosBasculas::className(), ['id' => 'basculas_id']);
    }

    /**
     * Gets query for [[Chofer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChofer()
    {
        return $this->hasOne(Choferes::className(), ['id' => 'chofer_id']);
    }

    /**
     * Gets query for [[Cuadrilla]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCuadrilla()
    {
        return $this->hasOne(Cuadrillas::className(), ['id' => 'cuadrilla_id']);
    }

    /**
     * Gets query for [[EmpresasCorte]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresasCorte()
    {
        return $this->hasOne(EmpresasCorte::className(), ['id' => 'empresas_corte_id']);
    }

    /**
     * Gets query for [[Huerta]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHuerta()
    {
        return $this->hasOne(Huertas::className(), ['id' => 'huerta_id']);
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
