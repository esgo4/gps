<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vehiculos;

/**
 * VehiculosBuscar represents the model behind the search form of `app\models\Vehiculos`.
 */
class VehiculosBuscar extends Vehiculos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'año'], 'integer'],
            [['marca', 'modelo', 'placas', 'serie_motor', 'color', 'foto1', 'foto2', 'foto3', 'foto4', 'foto5', 'fecha', 'timestamp'], 'safe'],
            [['kilometraje'], 'number'],
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
        $query = Vehiculos::find();

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
            'año' => $this->año,
            'kilometraje' => $this->kilometraje,
            'fecha' => $this->fecha,
            'timestamp' => $this->timestamp,
        ]);

        $query->andFilterWhere(['like', 'marca', $this->marca])
            ->andFilterWhere(['like', 'modelo', $this->modelo])
            ->andFilterWhere(['like', 'placas', $this->placas])
            ->andFilterWhere(['like', 'serie_motor', $this->serie_motor])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'foto1', $this->foto1])
            ->andFilterWhere(['like', 'foto2', $this->foto2])
            ->andFilterWhere(['like', 'foto3', $this->foto3])
            ->andFilterWhere(['like', 'foto4', $this->foto4])
            ->andFilterWhere(['like', 'foto5', $this->foto5]);

        return $dataProvider;
    }
}
