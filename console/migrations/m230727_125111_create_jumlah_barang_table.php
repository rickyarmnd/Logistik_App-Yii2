<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%jumlah_barang}}`.
 */
class m230727_125111_create_jumlah_barang_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%jumlah_barang}}', [
            'id' => $this->primaryKey(),
            'id_barang' => $this->integer(),
            'id_gudang' => $this->integer(),
            'barang_masuk' => $this->integer(),
            'barang_keluar' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%jumlah_barang}}');
    }
}
