<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BarangMasuk;

/**
 * BarangMasukSearch represents the model behind the search form about `common\models\BarangMasuk`.
 */
class BarangMasukSearch extends BarangMasuk
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_kode_barang_masuk', 'jumlah_barang_masuk'], 'integer'],
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
        $query = BarangMasuk::find();

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
            'id_kode_barang_masuk' => $this->id_kode_barang_masuk,
            'jumlah_barang_masuk' => $this->jumlah_barang_masuk,
        ]);

        return $dataProvider;
    }
}
