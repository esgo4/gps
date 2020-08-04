<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ContactosEmpresasCorte;

/**
 * ContactosEmpresasCorteBuscar represents the model behind the search form of `app\models\ContactosEmpresasCorte`.
 */
class ContactosEmpresasCorteBuscar extends ContactosEmpresasCorte
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'empresas_corte_id'], 'integer'],
            [['nombres', 'apellido_paterno', 'apellido_materno', 'cargo', 'correo_electronico', 'email', 'lada_telefono_fijo', 'telefono_fijo', 'extension', 'lada_telefono_movil', 'telefono_movil'], 'safe'],
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
        $query = ContactosEmpresasCorte::find();

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
            'empresas_corte_id' => $this->empresas_corte_id,
        ]);

        $query->andFilterWhere(['like', 'nombres', $this->nombres])
            ->andFilterWhere(['like', 'apellido_paterno', $this->apellido_paterno])
            ->andFilterWhere(['like', 'apellido_materno', $this->apellido_materno])
            ->andFilterWhere(['like', 'cargo', $this->cargo])
            ->andFilterWhere(['like', 'correo_electronico', $this->correo_electronico])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'lada_telefono_fijo', $this->lada_telefono_fijo])
            ->andFilterWhere(['like', 'telefono_fijo', $this->telefono_fijo])
            ->andFilterWhere(['like', 'extension', $this->extension])
            ->andFilterWhere(['like', 'lada_telefono_movil', $this->lada_telefono_movil])
            ->andFilterWhere(['like', 'telefono_movil', $this->telefono_movil]);

        return $dataProvider;
    }
}
