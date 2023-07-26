<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ref_provinsi}}`.
 */
class m230726_155823_create_ref_provinsi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ref_provinsi}}', [
            'id' => $this->primaryKey(),
            'nama_provinsi' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ref_provinsi}}');
    }
}
