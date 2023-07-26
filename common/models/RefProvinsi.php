<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ref_provinsi".
 *
 * @property int $id
 * @property string|null $nama_provinsi
 */
class RefProvinsi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_provinsi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_provinsi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_provinsi' => 'Nama Provinsi',
        ];
    }
}
