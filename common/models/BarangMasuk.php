<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "barang_masuk".
 *
 * @property int $id
 * @property int|null $id_kode_barang_masuk
 * @property int|null $jumlah_barang_masuk
 */
class BarangMasuk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang_masuk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kode_barang_masuk', 'jumlah_barang_masuk'], 'default', 'value' => null],
            [['id_kode_barang_masuk', 'jumlah_barang_masuk'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_kode_barang_masuk' => 'Id Kode Barang Masuk',
            'jumlah_barang_masuk' => 'Jumlah Barang Masuk',
        ];
    }
}
