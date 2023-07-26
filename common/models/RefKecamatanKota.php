<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ref_kecamatan_kota".
 *
 * @property int $id
 * @property int|null $id_provinsi
 * @property string|null $nama_kab_kota
 */
class RefKecamatanKota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_kecamatan_kota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_provinsi'], 'default', 'value' => null],
            [['id_provinsi'], 'integer'],
            [['nama_kab_kota'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_provinsi' => 'Id Provinsi',
            'nama_kab_kota' => 'Nama Kab Kota',
        ];
    }
}
