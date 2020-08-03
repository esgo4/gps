<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contactos_basculas".
 *
 * @property int $id
 * @property int $basculas_id
 * @property string|null $nombres
 * @property string|null $apellido_paterno
 * @property string|null $apellido_materno
 * @property string|null $cargo
 * @property string|null $correo_electronico
 * @property string|null $email
 * @property string|null $lada_telefono_fijo
 * @property string|null $telefono_fijo
 * @property string|null $extension
 * @property string|null $lada_telefono_movil
 * @property string|null $telefono_movil
 *
 * @property AsignacionCorte[] $asignacionCortes
 * @property Basculas $basculas
 */
class ContactosBasculas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contactos_basculas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['basculas_id'], 'required'],
            [['basculas_id'], 'integer'],
            [['nombres', 'apellido_paterno', 'apellido_materno', 'cargo', 'correo_electronico', 'email'], 'string', 'max' => 255],
            [['lada_telefono_fijo', 'lada_telefono_movil'], 'string', 'max' => 3],
            [['telefono_fijo', 'telefono_movil'], 'string', 'max' => 10],
            [['extension'], 'string', 'max' => 45],
            [['basculas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Basculas::className(), 'targetAttribute' => ['basculas_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'basculas_id' => 'Basculas ID',
            'nombres' => 'Nombres',
            'apellido_paterno' => 'Apellido Paterno',
            'apellido_materno' => 'Apellido Materno',
            'cargo' => 'Cargo',
            'correo_electronico' => 'Correo Electronico',
            'email' => 'Email',
            'lada_telefono_fijo' => 'Lada Telefono Fijo',
            'telefono_fijo' => 'Telefono Fijo',
            'extension' => 'Extension',
            'lada_telefono_movil' => 'Lada Telefono Movil',
            'telefono_movil' => 'Telefono Movil',
        ];
    }

    /**
     * Gets query for [[AsignacionCortes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAsignacionCortes()
    {
        return $this->hasMany(AsignacionCorte::className(), ['basculas_id' => 'id']);
    }

    /**
     * Gets query for [[Basculas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBasculas()
    {
        return $this->hasOne(Basculas::className(), ['id' => 'basculas_id']);
    }
}
