<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "gudang".
 *
 * @property int $id
 * @property int|null $id_supplier
 * @property string|null $nama_gudang
 */
class Gudang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gudang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_supplier'], 'default', 'value' => null],
            [['id_supplier'], 'integer'],
            [['nama_gudang'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_supplier' => 'Id Supplier',
            'nama_gudang' => 'Nama Gudang',
        ];
    }

    public function getAllSupplier(){
        return ArrayHelper::map(Supplier::find()->all(), 'id', 'nama_supplier');
    }
    public function getSupplier(){
        return $this->hasOne(Supplier::class , ['id' => 'id_supplier']);
    }
}
