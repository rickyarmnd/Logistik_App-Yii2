<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ref_kecamatan}}`.
 */
class m230726_155901_create_ref_kecamatan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ref_kecamatan}}', [
            'id' => $this->primaryKey(),
            'id_kab_kota' => $this->integer(),
            'nama_kecamatan' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ref_kecamatan}}');
    }
}
