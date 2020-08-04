<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "huertas_basculas".
 *
 * @property int $huertas_id
 * @property int $basculas_id
 *
 * @property Basculas $basculas
 * @property Huertas $huertas
 */
class HuertasBasculas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'huertas_basculas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['huertas_id', 'basculas_id'], 'required'],
            [['huertas_id', 'basculas_id'], 'integer'],
            [['basculas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Basculas::className(), 'targetAttribute' => ['basculas_id' => 'id']],
            [['huertas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Huertas::className(), 'targetAttribute' => ['huertas_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'huertas_id' => 'Huertas ID',
            'basculas_id' => 'Basculas ID',
        ];
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

    /**
     * Gets query for [[Huertas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHuertas()
    {
        return $this->hasOne(Huertas::className(), ['id' => 'huertas_id']);
    }
}
