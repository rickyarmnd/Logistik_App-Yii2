<?php

use yii\db\Migration;

/**
 * Class m230727_112757_add_column_barang_table
 */
class m230727_112757_add_column_barang_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('barang' ,'id_gudang' , $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230727_112757_add_column_barang_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230727_112757_add_column_barang_table cannot be reverted.\n";

        return false;
    }
    */
}
