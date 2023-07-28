<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "barang".
 *
 * @property int $id
 * @property int|null $kode_barang
 * @property string|null $nama_barang
 * @property string|null $tanggal_produk
 * @property int|null $id_supplier
 * @property string|null $tanggal_exp
 * @property int|null $id_gudang
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_barang', 'id_supplier', 'id_gudang'], 'default', 'value' => null],
            [['id_supplier', 'id_gudang'], 'integer'],
            [['tanggal_produk', 'tanggal_exp'], 'safe'],
            [['kode_barang', 'nama_barang'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_barang' => 'Kode Barang',
            'nama_barang' => 'Nama Barang',
            'tanggal_produk' => 'Tanggal Produk',
            'id_supplier' => 'Id Supplier',
            'tanggal_exp' => 'Tanggal Exp',
            'id_gudang' => 'Id Gudang',
        ];
    }
    public function getAllSupplier()
    {
        return ArrayHelper::map(Supplier::find()->all(), 'id', 'nama_supplier');
    }
    public function getSupplier()
    {
        return $this->hasOne(Supplier::class, ['id' => 'id_supplier']);
    }
    public function getGudang(){
        return $this->hasOne(Gudang::class , ['id' => 'id_gudang']);
    }
}
