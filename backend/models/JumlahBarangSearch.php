<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\JumlahBarang;

/**
 * JumlahBarangSearch represents the model behind the search form about `common\models\JumlahBarang`.
 */
class JumlahBarangSearch extends JumlahBarang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_barang', 'id_gudang', 'barang_masuk', 'barang_keluar'], 'integer'],
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
        $query = JumlahBarang::find();

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
            'id_barang' => $this->id_barang,
            'id_gudang' => $this->id_gudang,
            'barang_masuk' => $this->barang_masuk,
            'barang_keluar' => $this->barang_keluar,
        ]);

        return $dataProvider;
    }
}
