<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%gudang}}`.
 */
class m230727_110819_create_gudang_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%gudang}}', [
            'id' => $this->primaryKey(),
            'id_supplier' => $this->integer(),
            'nama_gudang' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%gudang}}');
    }
}
