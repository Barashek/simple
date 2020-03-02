<?php

use yii\db\Migration;

/**
 * Class m200228_125928_filldatainto_film_table
 */
class m200228_125928_fill_data_into_film_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('film',
            ['name', 'producer_id'],
            [
                ['film 1', 1],
                ['film 2', 2],
                ['film 3', 3],
                ['film 4', 2],
                ['film 5', 5],
                ['film 6', 6],
                ['film 7', 4],
                ['film 8', 3],
                ['film 9', 1]
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200228_125928_filldatainto_film_table cannot be reverted.\n";

        return false;
    }
    */
}
