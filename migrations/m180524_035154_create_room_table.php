<?php

use yii\db\Migration;

/**
 * Handles the creation of table `room`.
 */
class m180524_035154_create_room_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('room', [
            'id' => $this->primaryKey(),
            'price_per_night' => $this->money()->notNull(),
            'floor' => $this->integer()->notNull(),
            'max_persons' => $this->integer()->notNull(),
            'has_baby_bed' => $this->string(5)->notNull(),
            'has_shower' => $this->string(5)->notNull(),
            'has_bath' => $this->string(5)->notNull(),
            'has_seeview' => $this->string(5)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('room');
    }
}
