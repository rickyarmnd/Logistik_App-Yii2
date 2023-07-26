<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%barang_masuk}}`.
 */
class m230726_160038_create_barang_masuk_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%barang_masuk}}', [
            'id' => $this->primaryKey(),
            'id_kode_barang_masuk' => $this->integer(),
            'jumlah_barang_masuk' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%barang_masuk}}');
    }
}
