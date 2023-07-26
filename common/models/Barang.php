<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id
 * @property int|null $kode_barang
 * @property string|null $nama_barang
 * @property string|null $tanggal_produk
 * @property int|null $id_supplier
 * @property string|null $tanggal_exp
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
            [['kode_barang', 'id_supplier'], 'default', 'value' => null],
            [['kode_barang', 'id_supplier'], 'integer'],
            [['tanggal_produk', 'tanggal_exp'], 'safe'],
            [['nama_barang'], 'string', 'max' => 255],
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
        ];
    }
}
