<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Supplier;

/**
 * SupplieriSearch represents the model behind the search form about `common\models\Supplier`.
 */
class SupplieriSearch extends Supplier
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_kategori_supplier', 'id_prov_supplier', 'id_kec_supplier', 'id_kota_supplier'], 'integer'],
            [['nama_supplier'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Supplier::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_kategori_supplier' => $this->id_kategori_supplier,
            'id_prov_supplier' => $this->id_prov_supplier,
            'id_kec_supplier' => $this->id_kec_supplier,
            'id_kota_supplier' => $this->id_kota_supplier,
        ]);

        $query->andFilterWhere(['like', 'nama_supplier', $this->nama_supplier]);

        return $dataProvider;
    }
}
