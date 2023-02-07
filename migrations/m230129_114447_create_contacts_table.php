<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contacts}}`.
 */
class m230129_114447_create_contacts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contacts}}', [
            'id' => $this
                ->primaryKey()
                ->append('AUTO_INCREMENT'),
            'name' => $this->string(),
            'email' => $this->string(),
            'subject' => $this->string(),
            'verifyCode' => $this->string(),
            'created_at' => $this->timestamp()->append('ON UPDATE CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->append('ON UPDATE CURRENT_TIMESTAMP')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contacts}}');
    }
}
