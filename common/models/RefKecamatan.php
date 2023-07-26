<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ref_kecamatan".
 *
 * @property int $id
 * @property int|null $id_kab_kota
 * @property string|null $nama_kecamatan
 */
class RefKecamatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_kecamatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kab_kota'], 'default', 'value' => null],
            [['id_kab_kota'], 'integer'],
            [['nama_kecamatan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_kab_kota' => 'Id Kab Kota',
            'nama_kecamatan' => 'Nama Kecamatan',
        ];
    }
}
