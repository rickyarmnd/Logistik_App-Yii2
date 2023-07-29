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
        $this->batchInsert('ketegori_supplier_barang' , ['id' , 'nama_kategori'],
        [
            [1 , 'Makanan'],
            [2 , 'Minuman'],
            [3 , 'Pakaian'],
            [4 , 'Furniture'],
            [5 , 'Alat Berat'],
            [6 , 'Senjata'],
            [7 , 'Perabotan'],
            [8 , 'Kopi'],
            [9 , 'Susu'],
            [10 , 'Tembakau'],
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
