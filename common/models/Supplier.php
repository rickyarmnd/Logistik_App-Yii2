<?php

namespace common\models;

use common\models\KetegoriSupplierBarang;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "supplier".
 *
 * @property int $id
 * @property int|null $id_kategori_supplier
 * @property string|null $nama_supplier
 * @property int|null $id_prov_supplier
 * @property int|null $id_kec_supplier
 * @property int|null $id_kota_supplier
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kategori_supplier', 'id_prov_supplier', 'id_kec_supplier', 'id_kota_supplier'], 'default', 'value' => null],
            [['id_kategori_supplier', 'id_prov_supplier', 'id_kec_supplier', 'id_kota_supplier'], 'integer'],
            [['nama_supplier'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_kategori_supplier' => 'Id Kategori Supplier',
            'nama_supplier' => 'Nama Supplier',
            'id_prov_supplier' => 'Id Prov Supplier',
            'id_kec_supplier' => 'Id Kec Supplier',
            'id_kota_supplier' => 'Id Kota Supplier',
        ];
    }

    public function getAllKategori()
    {
        return ArrayHelper::map(KetegoriSupplierBarang::find()->all(), 'id', 'nama_supplier');
    }
    public function getAllProvinsi(){
        return ArrayHelper::map(RefProvinsi::find()->all(), 'id', 'nama_provinsi');
        
    }
    public function getAllKecamatan(){
        return ArrayHelper::map(RefKecamatan::find()->all(), 'id', 'nama_kecamatan');
        
    }
    public function getAllKota(){
        return ArrayHelper::map(RefKecamatanKota::find()->all(), 'id', 'nama_kota');
        
    }
}
