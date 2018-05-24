<?php

use yii\db\Migration;

/**
 * Handles the creation of table `bookings`.
 */
class m180524_040118_create_bookings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('bookings', [
            'id' => $this->primaryKey(),
            'start_date' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'end_date' => $this->dateTime()->notNull(),
            'room_id' => $this->integer(),
            'guest_id' => $this->integer(),
            'total_price' => $this->money()->notNull()
        ]);

        $this->createIndex(
            'idx-bookings-room_id',
            'bookings', 'room_id'
        );

        $this->addForeignKey(
            'fk-bookings-room',
            'bookings', 'room_id',
            'room', 'id'
        );

        $this->createIndex(
            'idx-bookings-guest_id',
            'bookings', 'guest_id'
        );

        $this->addForeignKey(
            'fk-bookings-guest', 
            'bookings', 'guest_id',
            'guest', 'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-bookings-room', 'bookings');
        $this->dropForeignKey('fk-bookings-guest', 'bookings');
        $this->dropIndex('idx-bookings-room_id', 'bookings');
        $this->dropIndex('idx-bookings-guest_id', 'bookings');
        $this->dropTable('bookings');
    }
}
