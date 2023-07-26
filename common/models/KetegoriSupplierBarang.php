<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ketegori_supplier_barang".
 *
 * @property int $id
 * @property string|null $nama_kategori
 */
class KetegoriSupplierBarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ketegori_supplier_barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kategori'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_kategori' => 'Nama Kategori',
        ];
    }
}
