<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contactos_empaques".
 *
 * @property int $id
 * @property int $Empaques_id
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
 * @property Empaques $empaques
 */
class ContactosEmpaques extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contactos_empaques';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Empaques_id'], 'required'],
            [['Empaques_id'], 'integer'],
            [['nombres', 'apellido_paterno', 'apellido_materno', 'cargo', 'correo_electronico', 'email'], 'string', 'max' => 255],
            [['lada_telefono_fijo', 'lada_telefono_movil'], 'string', 'max' => 3],
            [['telefono_fijo', 'telefono_movil'], 'string', 'max' => 10],
            [['extension'], 'string', 'max' => 45],
            [['Empaques_id'], 'exist', 'skipOnError' => true, 'targetClass' => Empaques::className(), 'targetAttribute' => ['Empaques_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Empaques_id' => 'Empaques ID',
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
     * Gets query for [[Empaques]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmpaques()
    {
        return $this->hasOne(Empaques::className(), ['id' => 'Empaques_id']);
    }
}
