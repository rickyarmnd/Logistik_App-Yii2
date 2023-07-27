<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Gudang;

/**
 * GudangSearch represents the model behind the search form about `common\models\Gudang`.
 */
class GudangSearch extends Gudang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_supplier'], 'integer'],
            [['nama_gudang'], 'safe'],
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
        $query = Gudang::find()->joinWith('supplier');

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
            'id_supplier' => $this->id_supplier,
        ]);

        $query->andFilterWhere(['like', 'nama_gudang', $this->nama_gudang]);

        return $dataProvider;
    }
}
