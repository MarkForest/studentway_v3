<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tour_prices_block`.
 */
class m181224_082420_create_tour_prices_block_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tour_prices_block', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tour_prices_block');
    }
}
