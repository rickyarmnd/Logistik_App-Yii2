<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\RefKecamatan;

/**
 * RefKecamatanSearch represents the model behind the search form about `common\models\RefKecamatan`.
 */
class RefKecamatanSearch extends RefKecamatan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_kab_kota'], 'integer'],
            [['nama_kecamatan'], 'safe'],
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
        $query = RefKecamatan::find();

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
            'id_kab_kota' => $this->id_kab_kota,
        ]);

        $query->andFilterWhere(['like', 'nama_kecamatan', $this->nama_kecamatan]);

        return $dataProvider;
    }
}
