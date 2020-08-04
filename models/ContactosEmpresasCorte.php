<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contactos_empresas_corte".
 *
 * @property int $id
 * @property int $empresas_corte_id
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
 * @property EmpresasCorte $empresasCorte
 */
class ContactosEmpresasCorte extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contactos_empresas_corte';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['empresas_corte_id'], 'required'],
            [['empresas_corte_id'], 'integer'],
            [['nombres', 'apellido_paterno', 'apellido_materno', 'cargo', 'correo_electronico'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 45],
            [['lada_telefono_fijo', 'extension', 'lada_telefono_movil'], 'string', 'max' => 3],
            [['telefono_fijo', 'telefono_movil'], 'string', 'max' => 10],
            [['empresas_corte_id'], 'exist', 'skipOnError' => true, 'targetClass' => EmpresasCorte::className(), 'targetAttribute' => ['empresas_corte_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'empresas_corte_id' => 'Empresas Corte ID',
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
     * Gets query for [[EmpresasCorte]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresasCorte()
    {
        return $this->hasOne(EmpresasCorte::className(), ['id' => 'empresas_corte_id']);
    }
}
