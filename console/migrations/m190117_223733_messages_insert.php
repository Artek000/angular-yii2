<?php

use yii\db\Migration;

/**
 * Class m190117_223733_messages_insert
 */
class m190117_223733_messages_insert extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $insert = [
            [
                'login' => 'Artek000',
                'nick' => 'Artem K.',
                'from' => 'Artem K.',
                'to' => 'Sasha R.',
                'message_text' => 'привет как дела?? у меня все отлично) чат работает)',
                'created_at' => '1371201284',
            ],
            [
                'login' => 'Artek000',
                'nick' => 'Artem K.',
                'from' => 'Artem K.',
                'to' => 'Sasha R.',
                'message_text' => 'привет как дела?? у меня все отлично) чат работает)',
                'created_at' => '1371201284',
            ],
            [
                'login' => 'Artek000',
                'nick' => 'Artem K.',
                'from' => 'Artem K.',
                'to' => 'Sasha R.',
                'message_text' => 'привет как дела?? у меня все отлично) чат работает)',
                'created_at' => '1371201284',
            ],
            [
                'login' => 'Artek000',
                'nick' => 'Artem K.',
                'from' => 'Artem K.',
                'to' => 'Sasha R.',
                'message_text' => 'привет как дела?? у меня все отлично) чат работает)',
                'created_at' => '1371201284',
            ],
        ];

        $this->batchInsert('{{%messages}}', [
            'login',
            'nick',
            'from',
            'to',
            'message_text',
            'created_at',
        ], $insert);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('{{%messages}}');
    }
}
