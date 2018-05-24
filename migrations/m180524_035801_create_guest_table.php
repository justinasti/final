<?php

use yii\db\Migration;

/**
 * Handles the creation of table `guest`.
 */
class m180524_035801_create_guest_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('guest', [
            'id' => $this->primaryKey(),
            'fname' => $this->string()->notNull(),
            'lname' => $this->string()->notNull(),
            'phone' => $this->string(15)->notNull(),
            'address' => $this->string()->notNull(),
            'email' => $this->string(45)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('guest');
    }
}
