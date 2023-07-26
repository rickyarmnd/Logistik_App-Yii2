<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\RefKecamatanKota;

/**
 * RefKecamatanKotaSearch represents the model behind the search form about `common\models\RefKecamatanKota`.
 */
class RefKecamatanKotaSearch extends RefKecamatanKota
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_provinsi'], 'integer'],
            [['nama_kab_kota'], 'safe'],
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
        $query = RefKecamatanKota::find();

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
            'id_provinsi' => $this->id_provinsi,
        ]);

        $query->andFilterWhere(['like', 'nama_kab_kota', $this->nama_kab_kota]);

        return $dataProvider;
    }
}
