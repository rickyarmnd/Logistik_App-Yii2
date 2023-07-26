<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%supplier}}`.
 */
class m230726_155619_create_supplier_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%supplier}}', [
            'id' => $this->primaryKey(),
            'id_kategori_supplier' => $this->integer(),
            'nama_supplier' => $this->string(),
            'id_prov_supplier' => $this->integer(),
            'id_kec_supplier' => $this->integer(),
            'id_kota_supplier' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%supplier}}');
    }
}
