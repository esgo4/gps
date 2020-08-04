<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AsignacionCorte;

/**
 * AsignacionCorteBuscar represents the model behind the search form of `app\models\AsignacionCorte`.
 */
class AsignacionCorteBuscar extends AsignacionCorte
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'empaques_id', 'empresas_corte_id', 'huerta_id', 'basculas_id', 'vehiculos_id', 'chofer_id', 'cuadrilla_id', 'fecha'], 'integer'],
            [['timestamp'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = AsignacionCorte::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'empaques_id' => $this->empaques_id,
            'empresas_corte_id' => $this->empresas_corte_id,
            'huerta_id' => $this->huerta_id,
            'basculas_id' => $this->basculas_id,
            'vehiculos_id' => $this->vehiculos_id,
            'chofer_id' => $this->chofer_id,
            'cuadrilla_id' => $this->cuadrilla_id,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'timestamp', $this->timestamp]);

        return $dataProvider;
    }
}
