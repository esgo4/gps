<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacto_familiar_choferes".
 *
 * @property int $id
 * @property int $choferes_id
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
 * @property Choferes $choferes
 */
class ContactoFamiliarChoferes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacto_familiar_choferes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['choferes_id'], 'required'],
            [['choferes_id'], 'integer'],
            [['nombres', 'apellido_paterno', 'apellido_materno', 'cargo', 'correo_electronico', 'email', 'extension'], 'string', 'max' => 255],
            [['lada_telefono_fijo', 'lada_telefono_movil'], 'string', 'max' => 3],
            [['telefono_fijo', 'telefono_movil'], 'string', 'max' => 10],
            [['choferes_id'], 'exist', 'skipOnError' => true, 'targetClass' => Choferes::className(), 'targetAttribute' => ['choferes_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'choferes_id' => 'Choferes ID',
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
     * Gets query for [[Choferes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChoferes()
    {
        return $this->hasOne(Choferes::className(), ['id' => 'choferes_id']);
    }
}
