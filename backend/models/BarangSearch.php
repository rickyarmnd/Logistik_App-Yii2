<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Barang;

/**
 * BarangSearch represents the model behind the search form about `common\models\Barang`.
 */
class BarangSearch extends Barang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'kode_barang', 'id_supplier'], 'integer'],
            [['nama_barang', 'tanggal_produk', 'tanggal_exp'], 'safe'],
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
        $query = Barang::find();

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
            'kode_barang' => $this->kode_barang,
            'tanggal_produk' => $this->tanggal_produk,
            'id_supplier' => $this->id_supplier,
            'tanggal_exp' => $this->tanggal_exp,
        ]);

        $query->andFilterWhere(['like', 'nama_barang', $this->nama_barang]);

        return $dataProvider;
    }
}
