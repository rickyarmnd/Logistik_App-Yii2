<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ketegori_supplier_barang}}`.
 */
class m230726_155733_create_ketegori_supplier_barang_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ketegori_supplier_barang}}', [
            'id' => $this->primaryKey(),
            'nama_kategori' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ketegori_supplier_barang}}');
    }
}
