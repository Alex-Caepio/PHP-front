<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m230127_182846_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this
            ->primaryKey()
            ->append('AUTO_INCREMENT'),
            'username' => $this->string(),
            'email' => $this->string(),
            'password_hash' => $this->string(),
            'created_at' => $this->timestamp()->append('ON UPDATE CURRENT_TIMESTAMP')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
