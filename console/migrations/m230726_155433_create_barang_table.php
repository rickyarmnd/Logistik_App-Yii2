<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%barang}}`.
 */
class m230726_155433_create_barang_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%barang}}', [
            'id' => $this->primaryKey(),
            'kode_barang' => $this->integer(),
            'nama_barang' => $this->string(),
            'tanggal_produk' => $this->date(),
            'id_supplier' => $this->integer(),
            'tanggal_exp' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%barang}}');
    }
}
