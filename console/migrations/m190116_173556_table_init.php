<?php

use yii\db\Migration;

/**
 * Class m190116_173556_table_init
 */
class m190116_173556_table_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%messages}}', [
            'id' => $this->primaryKey(),
            'login' => $this->string()->notNull(),
            'nick' => $this->string()->notNull(),
            'from' => $this->string()->notNull(),
            'to' => $this->string()->notNull(),
            'message_text' => $this->text(),
            'created_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%messages}}');
    }

}
