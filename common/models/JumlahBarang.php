<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jumlah_barang".
 *
 * @property int $id
 * @property int|null $id_barang
 * @property int|null $id_gudang
 * @property int|null $barang_masuk
 * @property int|null $barang_keluar
 */
class JumlahBarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jumlah_barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_barang', 'id_gudang', 'barang_masuk', 'barang_keluar'], 'default', 'value' => null],
            [['id_barang', 'id_gudang', 'barang_masuk', 'barang_keluar'], 'integer'],
            ['barang_keluar' , 'validateValue']
        ];
    }

    public function validateValue($attribute){
        if($this->barang_keluar > $this->getCountTotal()) {
            $this->addError($attribute, 'jumlahnya tidak boleh melebihi barang masuk');
        }
    }

    public function getCountTotal(){
        $jumlah_barang_masuk = Self::find()->where(['id_gudang' => $this->id_gudang , 'id_barang' => $this->id_barang])->sum('barang_masuk');
        $jumlah_barang_keluar = Self::find()->where(['id_gudang' => $this->id_gudang , 'id_barang' => $this->id_barang])->sum('barang_keluar');
        $total_barang = $jumlah_barang_masuk - $jumlah_barang_keluar;

        return $total_barang;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_barang' => 'Id Barang',
            'id_gudang' => 'Id Gudang',
            'barang_masuk' => 'Barang Masuk',
            'barang_keluar' => 'Barang Keluar',
        ];
    }
}
