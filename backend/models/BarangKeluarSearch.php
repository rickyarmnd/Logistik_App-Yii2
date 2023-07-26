<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BarangKeluar;

/**
 * BarangKeluarSearch represents the model behind the search form about `common\models\BarangKeluar`.
 */
class BarangKeluarSearch extends BarangKeluar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_kode_barang_keluar', 'jumlah_barang_keluar'], 'integer'],
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
        $query = BarangKeluar::find();

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
            'id_kode_barang_keluar' => $this->id_kode_barang_keluar,
            'jumlah_barang_keluar' => $this->jumlah_barang_keluar,
        ]);

        return $dataProvider;
    }
}
