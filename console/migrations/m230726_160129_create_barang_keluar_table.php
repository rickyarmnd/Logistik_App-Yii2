<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%barang_keluar}}`.
 */
class m230726_160129_create_barang_keluar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%barang_keluar}}', [
            'id' => $this->primaryKey(),
            'id_kode_barang_keluar' => $this->integer(),
            'jumlah_barang_keluar' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%barang_keluar}}');
    }
}
