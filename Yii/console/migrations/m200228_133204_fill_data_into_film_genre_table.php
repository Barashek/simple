<?php

use yii\db\Migration;

/**
 * Class m200228_133204_fill_data_into_film_genre_table
 */
class m200228_133204_fill_data_into_film_genre_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('film_genre',
            ['film_id', 'genre_id'],
            [
                [1, 1],
                [1, 2],
                [2, 3],
                [2, 2],
                [3, 1],
                [3, 5],
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
        echo "m200228_133204_fill_data_into_film_genre_table cannot be reverted.\n";

        return false;
    }
    */
}
