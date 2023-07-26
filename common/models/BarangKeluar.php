<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "barang_keluar".
 *
 * @property int $id
 * @property int|null $id_kode_barang_keluar
 * @property int|null $jumlah_barang_keluar
 */
class BarangKeluar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang_keluar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kode_barang_keluar', 'jumlah_barang_keluar'], 'default', 'value' => null],
            [['id_kode_barang_keluar', 'jumlah_barang_keluar'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_kode_barang_keluar' => 'Id Kode Barang Keluar',
            'jumlah_barang_keluar' => 'Jumlah Barang Keluar',
        ];
    }
}
